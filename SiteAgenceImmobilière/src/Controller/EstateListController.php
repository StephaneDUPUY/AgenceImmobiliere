<?php

namespace App\Controller;

use App\Entity\Estate;
use App\Repository\EstateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EstateListController extends AbstractController
{
    /**
     * @Route("/estate/list", name="estate_list")
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



        return $this->render('estate_list/index.html.twig', [
            'controller_name' => 'EstateListController',
        ]);
    }
}
