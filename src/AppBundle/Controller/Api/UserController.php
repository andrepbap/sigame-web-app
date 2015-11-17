<?php

namespace AppBundle\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\User;

class UserController extends Controller {

    /**
     * @Route("/api/user/save", name="api_user_save")
     * @Method({"GET"})
     */
    public function saveUser(Request $request) {
        if ($request->query->get('json')) {
            $json = utf8_encode($request->query->get('json'));
            $params = json_decode($json);

            $entityManager = $this->getDoctrine()->getManager();

            if (isset($params->idUser)) {
                $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($params->idUser);

                if (isset($params->userName)) {
                    $user->setUserName($params->userName);
                }
                if (isset($params->email)) {
                    $user->setEmail($params->email);
                }
                if (isset($params->password)) {
                    $user->setPassword($params->password);
                }
                if (isset($params->birth)) {
                    $user->setBirth(new \DateTime($params->birth));
                }
            } else {
                $user = new User($params->userName, $params->email, $params->password, new \DateTime($params->birth));
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
            ));
        }
        return new JsonResponse(array(
            'error' => "json was not defined",
        ));
    }

    /**
     * @Route("/api/user/{iduser}/get", requirements={"iduser" = "\d+"}, name="api_user_get")
     * @Method({"GET", "POST"})
     */
    public function getById(User $user) {
        $data = array(
            'user_name' => $user->getUserName(),
            'email' => $user->getEmail()
        );

        return new JsonResponse($data);
    }

    /**
     * @Route("/api/user/login", name="api_user_login")
     * @Method({"GET", "POST"})
     */
    public function getByLogin() {
        $user = $this->getDoctrine()->getRepository('AppBundle:User')->findUserByLogin('teste@symfonyeditado.com', '1234Editado');

        $data = array(
            'query' => $user[0]->getUserName()
        );

        return new JsonResponse($data);
    }

    /**
     * @Route("/api/user/{iduser}/set-position", requirements={"iduser" = "\d+"}, name="api_user_set-position")
     * @Method({"GET", "POST"})
     */
    public function setPosition(User $user, Request $request) {
        if ($request->query->get('json')) {
            $json = utf8_encode($request->query->get('json'));
            $params = json_decode($json);

            $entityManager = $this->getDoctrine()->getManager();

            $user->setLatitude((float)$params->latitude);
            $user->setLongitude((float)$params->longitude);

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
        return new JsonResponse(array(
            'error' => 'json was not defined',
        ));
    }

    /**
     * @Route("/api/user/{iduser}/get-groups", requirements={"iduser" = "\d+"}, name="api_user_get-groups")
     * @Method({"GET", "POST"})
     */
    public function getGroups(User $user) {
        $data = array();
        $groups = $user->getGroupgroup();

        foreach ($groups as $group) {
            $data[] = array(
                'idGroup' => $group->getIdgroup(),
                'group_name' => $group->getGroupName(),
                'description' => $group->getDescription(),
                'photo-patch' => $group->getPhotoPatch()
            );
        }

        return new JsonResponse($data);
    }

}
