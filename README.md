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
OK

_Configuration du serveur web_

> composer require symfony/apache-pack

> composer require symfony/web-server-bundle --dev

**BUG VERSION 5.0 SUR WINDOWS**
**Pour la partie symfony server:[start/stop]**
**Passer par l'exécutable Symfony pour Windows ici https://get.symfony.com/cli/setup.exe**