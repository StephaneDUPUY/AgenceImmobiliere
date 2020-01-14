<?php

namespace App\Controller\Admin;

use App\Entity\Estate;
use App\Form\EstateType;
use App\Repository\EstateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="adminList")
     */
    public function estatesList(EstateRepository $estateRepository)
    {
           
        $estates = $estateRepository->findAll();

        return $this->render('admin/list.html.twig', [
            'estates' => $estates
        ]);
    }

    /**
     * @Route("/admin/new", name="estateNew")
     */
    public function estatesNew(Request $request)
    {
        $estate = new Estate;
                
        $form = $this->createForm(EstateType::class, $estate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($estate);
            $em->flush();
           
            return $this->redirectToRoute('adminList');
        }


        return $this->render('admin/new.html.twig', [
            'form' => $form->createView()
        ]);
            
    }

    /**
     * @Route("/admin/{id}", name="estateEdit")
     */
    public function estateEdit(Estate $estate, Request $request)
    {  
        $form = $this->createForm(EstateType::class, $estate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
           
            return $this->redirectToRoute('adminList');
        }

        return $this->render('admin/edit.html.twig', [
            'estate' => $estate,
            'form' => $form->createView() ]);
       
    }

    
}
