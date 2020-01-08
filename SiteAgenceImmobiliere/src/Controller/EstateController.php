<?php

namespace App\Controller;

use App\Entity\Estate;
use App\Repository\EstateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EstateController extends AbstractController
{
    /**
     * @Route("/estates", name="estatesList")
     */
    public function estatesList(EstateRepository $estateRepository)
    {
           
        $estates = $estateRepository->findAll();

        return $this->render('estates/list.html.twig', [
            'estates' => $estates
        ]);
    }

    /**
     * @Route("/estates/{id}", name="estateShow")
     */
    public function estateShow(Estate $estate)
    {  
        return $this->render('estates/show.html.twig', [
            'estate' => $estate
        ]);

       
    }
}
