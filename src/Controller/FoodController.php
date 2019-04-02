<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FoodController extends AbstractController
{
    /**
     * @Route("/food", name="food")
     */
    public function index()
    {
        return $this->render('food/index.html.twig', [
            'controller_name' => 'FoodController',
        ]);
    }
}
