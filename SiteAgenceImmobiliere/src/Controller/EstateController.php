<?php

namespace App\Controller;

use App\Entity\Estate;
use App\Repository\EstateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EstateController extends AbstractController
{
    /**
     * @Route("/estate", name="estate")
     */
    public function index(EstateRepository $estateRepository)
    {
           
        $estates = $estateRepository->findAll();

        return $this->render('estate/index.html.twig', [
            'estates' => $estates
        ]);
    }
}
