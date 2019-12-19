# Agence Immobiliere

Site exemple pour une agence immobilière avec back office

## Technologies utilisées

#### Symfony 5.0
#### PHP 7.3.5

_Installation de composer sous Windows_

https://getcomposer.org/Composer-Setup.exe

_Installation de composer en ligne de commande_

> php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

> php -r "if (hash_file('sha384', 'composer-setup.php') === 'baf1608c33254d00611ac1705c1d9958c817a1a33bce370c0595974b342601bd80b92a3f46067da89e3b06bff421f182') { echo 'Installer > > verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

> php composer-setup.php

> php -r "unlink('composer-setup.php');"

_Installation de Symfony_

> composer create-project symfony/website-skeleton SiteAgenceImmobilière

_Création de .env.local_

DATABASE_URL=mysql://admin:admin@127.0.0.1:3306/siteagenceimmobiliere?serverVersion=5.7

_Lancement du server pour test_

> php -S 127.0.0.1:8000 -t pulic

_Configuration du serveur web_

> composer require symfony/apache-pack

> composer require symfony/web-server-bundle --dev

**BUG VERSION 5.0 SUR WINDOWS**
**Pour la partie symfony server:[start/stop]**
**Passer par l'exécutable Symfony pour Windows ici https://get.symfony.com/cli/setup.exe**

_Création de la route home dans routes.yaml_

```
# homepage
home:
  # chemin racine
  path: /
  # methode::class
  controller: App\controller\HomeController::index
```

_Création de HomeController_

```
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
```

_Suppression de la route et du controlleur_

_Ajout du controlleur avec sa route_

> bin/console make:controller HomeController

```
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
```

_Crée le modèle associé_

```
{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class="example-wrapper">
    <h1>Hello {{ controller_name }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href="{{ 'C:/wamp64/www/tests/Symfony/AgenceImmobiliere/SiteAgenceImmobilière/src/Controller/HomeController.php'|file_link(0) }}">src/Controller/HomeController.php</a></code></li>
        <li>Your template at <code><a href="{{ 'C:/wamp64/www/tests/Symfony/AgenceImmobiliere/SiteAgenceImmobilière/templates/home/index.html.twig'|file_link(0) }}">templates/home/index.html.twig</a></code></li>
    </ul>
</div>
{% endblock %}
```

_Ajout de Bootstrap dans base.html.twig_

_Ajout d'un controlleur pour la liste des biens_

> $ bin/console make:controller estateList

```
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
```
_Ajout d'une page pour la liste des biens_

_Création de la base de données siteagenceimmobiliere_

> $ bin/console d:d:c 

_Ajout de l'entité estate_

> bin/console m:e 

_Migration_

> bin/console m:m
> bin/console d:m:m

_Ajout de donées sur Estate_

