<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    
    // public function index(){
    //     return $this->render('user/users.html.twig');
    // }


    public function getUsers(){
        $em = $this->getDoctrine()->getManager();
        $listUsers = $em->getRepository('App:Users')->findBy([], ['name' => 'ASC']);
        return $this->render('user/users.html.twig', [
            'listUsers' => $listUsers
        ]);
    }
}
