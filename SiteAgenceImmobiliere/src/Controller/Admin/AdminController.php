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
     * @Route("/admin/estate/new", name="estateNew")
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
            $this->addFlash('success', 'Bien ajouté avec succès');
           
            return $this->redirectToRoute('adminList');
        }


        return $this->render('admin/new.html.twig', [
            'form' => $form->createView()
        ]);
            
    }

    /**
     * @Route("/admin/estate/edit/{id}", name="estateEdit", methods="GET|POST")
     */
    public function estateEdit(Estate $estate, Request $request)
    {  
        $form = $this->createForm(EstateType::class, $estate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('success', 'Bien modifié avec succès');
           
            return $this->redirectToRoute('adminList');
        }

        return $this->render('admin/edit.html.twig', [
            'estate' => $estate,
            'form' => $form->createView() ]);
       
    }

    /**
     * @Route("/admin/estate/delete/{id}", name="estateDelete", methods="POST")
     */
    public function estateDelete(Estate $estate, Request $request)
    {
        if ($this->isCsrfTokenValid('delete' . $estate->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($estate);
            $em->flush();
            $this->addFlash('success', 'Bien supprimé avec succès');

        }
        
        return $this->redirectToRoute('adminList');
    }

    
}
