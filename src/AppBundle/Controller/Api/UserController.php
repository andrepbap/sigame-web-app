<?php

namespace AppBundle\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Acl\Exception\Exception;
use AppBundle\Utils\ApiValidator;
use AppBundle\Entity\User;

class UserController extends Controller {
    
    /**
     * @Route("/api/user/save", name="api_user_save")
     * @Method({"POST"})
     */
    public function saveUser(Request $request) {
        try {
            $params = ApiValidator::validateRequest($request);
        } catch (Exception $ex) {
            return new JsonResponse(array(
                'error' => $ex->getMessage(),
            ));
        }

        $entityManager = $this->getDoctrine()->getManager();

        if (isset($params->idUser)) {
            $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($params->idUser);

            if (isset($params->email)) {
                $user->setEmail($params->email);
            }
            if (isset($params->password)) {
                $user->setPassword($params->password);
            }
        } else {
            $user = new User($params->userName, $params->email);
            //check if user have a facebook id
            if (isset($params->facebookId)) {
                $user->setFacebookId($params->facebookId);
                $user->setPhotoPatch($params->photo_patch);
            } else {
                $user->setPassword($params->password);
            }
        }

        $validator = $this->get('validator');
        $errors = $validator->validate($user);

        if (count($errors) > 0) {
            $errorsString = (string) $errors;
            return new JsonResponse(array(
                'error' => $errorsString,
            ));
        }

        $entityManager->persist($user);
        $entityManager->flush();

        return new JsonResponse(array(
            'sucess' => 'true',
            'idUser' => $user->getIduser()
        ));
    }

    /**
     * @Route("/api/user/{iduser}/get", requirements={"iduser" = "\d+"}, name="api_user_get")
     * @Method({"GET", "POST"})
     */
    public function getById(User $user, Request $request) {
        try {
            ApiValidator::validateRequest($request);
        } catch (Exception $ex) {
            return new JsonResponse(array(
                'error' => $ex->getMessage(),
            ));
        }
        
        $data = array(
            'idUser' => $user->getIduser(),
            'userName' => $user->getUserName(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'photo_patch' => $user->getPhotoPatch()
        );

        return new JsonResponse($data);
    }
    
    /**
     * @Route("/api/user/save-facebook-user", name="api_user_save-facebook-user")
     * @Method({"POST"})
     */
    public function saveFacebookUser(Request $request) {
        try {
            $params = ApiValidator::validateRequest($request);
        } catch (Exception $ex) {
            return new JsonResponse(array(
                'error' => $ex->getMessage(),
            ));
        }
        
        $user = $this->getDoctrine()->getRepository('AppBundle:User')->findOneBy(array("facebookId" => $params->facebookId));

        if($user == null){
            $entityManager = $this->getDoctrine()->getManager();
            
            $user = new User($params->userName, $params->email);
            $user->setFacebookId($params->facebookId);
            $user->setPhotoPatch($params->photo_patch);
            
            $entityManager->persist($user);
            $entityManager->flush();
        }

        $data = array(
            'idUser' => $user->getIduser(),
            'userName' => $user->getUserName(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'photo_patch' => $user->getPhotoPatch()
        );

        return new JsonResponse($data);
    }

    /**
     * @Route("/api/user/login", name="api_user_login")
     * @Method({"POST"})
     */
    public function getByLogin(Request $request) {
        try {
            $params = ApiValidator::validateRequest($request);
        } catch (Exception $ex) {
            return new JsonResponse(array(
                'error' => $ex->getMessage(),
            ));
        }
        
        $userArray = $this->getDoctrine()->getRepository('AppBundle:User')->findUserByLogin($params->email, $params->password);
        $user = $userArray[0];

        $data = array(
            'idUser' => $user->getIduser(),
            'userName' => $user->getUserName(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'photo_patch' => $user->getPhotoPatch()
        );

        return new JsonResponse($data);
    }

    /**
     * @Route("/api/user/{iduser}/set-position", requirements={"iduser" = "\d+"}, name="api_user_set-position")
     * @Method({"POST"})
     */
    public function setPosition(User $user, Request $request) {
        try {
            $params = ApiValidator::validateRequest($request);
        } catch (Exception $ex) {
            return new JsonResponse(array(
                'error' => $ex->getMessage(),
            ));
        }

        $entityManager = $this->getDoctrine()->getManager();

        $user->setLatitude((float) $params->latitude);
        $user->setLongitude((float) $params->longitude);
        $user->setPositionDate(new \DateTime($params->date));

        $validator = $this->get('validator');
        $errors = $validator->validate($user);

        if (count($errors) > 0) {
            $errorsString = (string) $errors;
            return new JsonResponse(array(
                'error' => $errorsString,
            ));
        }

        $entityManager->flush();

        return new JsonResponse(array(
            'sucess' => 'true',
        ));
    }

    /**
     * @Route("/api/user/{iduser}/get-groups", requirements={"iduser" = "\d+"}, name="api_user_get-groups")
     * @Method({"POST"})
     */
    public function getGroups(User $user, Request $request) {
        try {
            ApiValidator::validateRequest($request);
        } catch (Exception $ex) {
            return new JsonResponse(array(
                'error' => $ex->getMessage(),
            ));
        }
        
        $data = array();
        $groups = $user->getGroupgroup();

        foreach ($groups as $group) {
            $data[] = array(
                'idGroup' => $group->getIdgroup(),
                'group_name' => $group->getGroupName(),
                'description' => $group->getDescription(),
                'photo-patch' => $this->getRequest()->getUriForPath('/images/groups/'.$group->getPhotoPatch())
            );
        }

        return new JsonResponse($data);
    }

}
