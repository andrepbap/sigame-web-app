<?php

namespace AppBundle\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Utils\ApiValidator;
use AppBundle\Entity\Group;

class GroupController extends Controller {
    /**
     * @Route("/api/group/{idgroup}/get-users-location", requirements={"idgroup" = "\d+"}, name="api_group_get-users-location")
     * @Method({"GET", "POST"})
     */
    public function getUsersLocation(Group $group, Request $request){
        try {
            ApiValidator::validateRequest($request);
        } catch (Exception $ex) {
            return new JsonResponse(array(
                'error' => $ex->getMessage(),
            ));
        }
        
        $data = array();
        $users = $group->getUseruser();
        
        foreach ($users as $user){
            $data[] = array(
                'idUser' => $user->getIduser(),
                'longitude' => $user->getLongitude(),
                'latitude' => $user->getLatitude(),
                'position_date' => $user->getPositionDate()->format('Y-m-d H:i:s'),
                'photo_patch' => $user->getPhotoPatch()
            );
        }
 
        return new JsonResponse($data);
    }
    
    /**
     * @Route("/api/group/save", name="api_group_save")
     * @Method({"POST"})
     */
    public function saveGroup(Request $request){
        try {
            $params = ApiValidator::validateRequest($request);
        } catch (Exception $ex) {
            return new JsonResponse(array(
                'error' => $ex->getMessage(),
            ));
        }
        
        $entityManager = $this->getDoctrine()->getManager();
        
        if (isset($params->idGroup)) {
            $group = $this->getDoctrine()->getRepository('AppBundle:Group')->find($params->idGroup);

            if (isset($params->name)) {
                $group->setEmail($params->name);
            }
            
            if (isset($params->description)) {
                $group->setPassword($params->description);
            }
            
            if (isset($params->photo_patch)) {
                $group->setPassword($params->description);
            }
        } else {
            $group = new Group($params->name, $params->description);
            // find and add user
            $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($params->idUser);
            $group->addUseruser($user);
        }
        
        $validator = $this->get('validator');
        $errors = $validator->validate($group);
        
        if (count($errors) > 0) {
            $errorsString = (string) $errors;
            return new JsonResponse(array(
                'error' => $errorsString,
            ));
        }
        
        $entityManager->persist($group);
        $entityManager->flush();
        
        return new JsonResponse(array(
            'sucess' => 'true',
            'idGroup' => $group->getIdgroup()
        ));
    }
}
