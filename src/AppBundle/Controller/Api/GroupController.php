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
        if (!$request->query->get('json')) {
            return new JsonResponse(array(
                'error' => "json was not defined",
            ));
        }
        
        $json = utf8_encode($request->query->get('json'));
        $params = json_decode($json);
        
        $data = array();
        $users = $group->getUseruser();
        
        //only group members can access those informations
        $validator = false;
        foreach ($users as $user){
            if($user->getApiKey() === $params->apiKey && $user->getIduser() === $params->idUser){
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
