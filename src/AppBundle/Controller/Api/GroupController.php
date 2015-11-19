<?php

namespace AppBundle\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Group;

class GroupController extends Controller {
    /**
     * @Route("/api/group/{idgroup}/get-users-location", requirements={"idgroup" = "\d+"}, name="api_group_get-users-location")
     * @Method({"GET", "POST"})
     */
    public function getUsersLocation(Group $group, Request $request){
        try {
            $params = ApiValidator::validateRequest($request);
        } catch (Exception $ex) {
            return new JsonResponse(array(
                'error' => $ex->getMessage(),
            ));
        }
        
        $data = array();
        $users = $group->getUseruser();
        
        //only group members can access those informations
        $validator = false;
        foreach ($users as $user){
            if($user->getIduser() === $params->idUser){
                $validator = true;
            }
            
            $data[] = array(
                'idUser' => $user->getIduser(),
                'longitude' => $user->getLongitude(),
                'latitude' => $user->getLatitude(),
                'position_date' => $user->getPositionDate()->format('Y-m-d H:i:s')
            );
        }
        
        if($validator === false){
            return new JsonResponse(array(
                'error' => "authentication error",
            ));
        }
        
        return new JsonResponse($data);
    }
}
