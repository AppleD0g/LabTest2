<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class StudentController extends AbstractController
{
    /**
     * @Route("/timetable", name="timetable")
     * @IsGranted("ROLE_STUDENT")
     */
    public function index()
    {
        return $this->render('timetable/index.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    }
}
