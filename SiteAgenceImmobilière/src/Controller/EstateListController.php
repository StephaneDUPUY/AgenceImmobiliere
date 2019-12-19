<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EstateListController extends AbstractController
{
    /**
     * @Route("/estate/list", name="estate_list")
     */
    public function index()
    {
        return $this->render('estate_list/index.html.twig', [
            'controller_name' => 'EstateListController',
        ]);
    }
}
