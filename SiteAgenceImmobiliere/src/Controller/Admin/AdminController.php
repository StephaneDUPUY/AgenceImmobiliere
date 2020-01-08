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
     * @Route("/admin/{id}", name="estateEdit")
     */
    public function estateEdit(Estate $estate, Request $request)
    {  
        $form = $this->createForm(EstateType::class, $estate);
        
        return $this->render('admin/edit.html.twig', [
            'estate' => $estate,
            'form' => $form->createView()
        ]);

       
    }
}
