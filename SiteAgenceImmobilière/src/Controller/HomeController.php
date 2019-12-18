<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function index(): Response
    {
        return new Response('Bienvenue sur la page d\'accueil de l\'agence immobilière');
    }
}
