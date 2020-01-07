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

        return $this->render('estate/list.html.twig', [
            'estates' => $estates
        ]);
    }

    /**
     * @Route("/estates/{slug}-{id}", name="estateShow", requirements={"slug": "[a-z0-9\]*"})
     */
    public function estateShow(EstateRepository $estateRepository)
    {  
        
        $estates = $estateRepository->findAll();

        return $this->render('estate/show.html.twig', [
            'estates' => $estates
        ]);


    }
}
