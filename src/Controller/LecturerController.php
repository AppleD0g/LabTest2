<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


class LecturerController extends AbstractController
{
    /**
     * @Route("/grades", name="grades")
     * @IsGranted("ROLE_LECTURER")
     */
    public function index()
    {
        return $this->render('grades/index.html.twig', [
            'controller_name' => 'LecturerController',
        ]);
    }
}
