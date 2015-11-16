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
     * @Route("/api/user/add", name="api_user_add")
     * @Method({"GET", "POST"})
     */
    public function addUser(){
        $user = new User();
        
        $user->setUserName("Symfony");
        $user->setEmail("teste@symfony.com");
        $user->setPassword("1234");
        
        $date = new \DateTime("2012-07-08");
        $user->setBirth($date);
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();
        
        $data = array(
            'sucess' => "true",
        );
        
        return new JsonResponse($data);
    }
    
    /**
     * @Route("/api/user/{iduser}/edit", requirements={"iduser" = "\d+"}, name="api_user_edit")
     * @Method({"GET", "POST"})
     */
    public function editUser(User $user){
        $entityManager = $this->getDoctrine()->getManager();
        
        $user->setUserName("Symfony Editado");
        $user->setEmail("teste@symfonyeditado.com");
        $user->setPassword("1234Editado");
        
        $date = new \DateTime("2012-07-08");
        $user->setBirth($date);

        $entityManager->flush();
        
        $data = array(
            'sucess' => "true",
        );

        return new JsonResponse($data);
    }
    
    /**
     * @Route("/api/user/{iduser}/get", requirements={"iduser" = "\d+"}, name="api_user_get")
     * @Method({"GET", "POST"})
     */
    public function getById(User $user){
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
    public function getByLogin(){
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
    public function setPosition(User $user){
        $entityManager = $this->getDoctrine()->getManager();
        
        $user->setLatitude($latitude);
        $user->setLongitude($longitude);
        
        $entityManager->flush();
        
        $data = array(
            'sucess' => 'true'
        );

        return new JsonResponse($data);
    }
    
    /**
     * @Route("/api/user/{iduser}/get-groups", requirements={"iduser" = "\d+"}, name="api_user_get-groups")
     * @Method({"GET", "POST"})
     */
    public function getGroups(User $user){
        $data = array();
        $groups = $user->getGroupgroup();
        
        foreach ($groups as $group){
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
