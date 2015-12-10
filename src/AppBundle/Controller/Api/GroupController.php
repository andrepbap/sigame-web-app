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
}
