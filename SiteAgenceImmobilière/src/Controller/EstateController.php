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
         
        /*
        $estate = new Estate;
        $estate
            ->setTitle('Premier bien')
            ->setPrice(180000)
            ->setRooms(5)
            ->setBedrooms(2)
            ->setDescription('Quelques informations')
            ->setSurface(50)
            ->setFloor(2)
            ->setHeat(1)
            ->setCity('Nantes')
            ->setAddress('Route de La Jonelière')
            ->setPostalCode(44000);

        $em = $this->getDoctrine()->getManager();
        $em->persist($estate);
        $em->flush();
        */



        return $this->render('estate/index.html.twig', [
            'controller_name' => 'EstateController',
        ]);
    }
}
