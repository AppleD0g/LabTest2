<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', []);
    }
    /**
     * @Route("/tuesday", name="tuesday")
     */
    public function about()
    {
        return $this->render('default/tuesday.html.twig', []);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout(){

        return $this->render('default/logout.html.twig',[]);
    }




}
