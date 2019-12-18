# Agence Immobiliere

Site exemple pour une agence immobilière avec back office

## Technologies utilisées

#### Symfony 5.0
#### PHP 7.3.5

_Installation de composer sous Windows_

https://getcomposer.org/Composer-Setup.exe

_Chargement de composer en ligne de commande_

> php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

> php -r "if (hash_file('sha384', 'composer-setup.php') === 'baf1608c33254d00611ac1705c1d9958c817a1a33bce370c0595974b342601bd80b92a3f46067da89e3b06bff421f182') { echo 'Installer > > verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

> php composer-setup.php

> php -r "unlink('composer-setup.php');"

_Ajout de dépendances_

> composer require symfony/var-dumper

> composer require altorouter/altorouter



_Composition du fichier composer.json_

```
{
    "require": {
        "symfony/var-dumper": "^5.0",
        "altorouter/altorouter": "^2.0"
    }
}

```

_Installation de composer_

> composer install

_Installation de Symfony_

> composer create-project symfony/website-skeleton SiteAgenceImmobilière

