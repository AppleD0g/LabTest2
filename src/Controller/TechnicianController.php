<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class TechnicianController extends AbstractController
{
    /**
     * @Route("/servers", name="servers")
     * @IsGranted("ROLE_TECHNICIAN")
     */
    public function index()
    {
        return $this->render('servers/index.html.twig', [
            'controller_name' => 'TechnicianController',
        ]);
    }
}
