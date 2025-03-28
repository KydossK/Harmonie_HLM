# Harmonie Municipale de Hellemes

Site entrainement projet laravel 

mise en place d'une page réservée Users enregistrés (musiciens) 
création de tables, migrations, utilisation de app/private/xx pour cacher les photos musiciens 

## Prérequis

- PHP 7.x
- MariaDB 15.x
- Apache 2.x
- Npm x.x

## Installation

```
git clone https://github.com/editeur/projet.git
cd projet
# adaptez les paramètres
echo "DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name" > .env.local
composer install
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load
```

Pour charger les données nécessaires au bon fonctionnement :

```
php bin/console doctrine:fixtures:load --group=prod
```

## Utilisation

Le document root se trouve dans le dossier `public`.

Depuis la racine du projet, lancez un serveur web :

```
symfony serve
```

Puis ouvrez le lien [http://localhost:8000](http://localhost:8000).

- /admin : back office
- /login : connexion
- /register : inscription
- ...

## Tests

Pour lancer tous les tests :

```
php bin/phpunit
```

Pour lancer les tests liés au front-office :

```
php bin/phpunit tests/Front
```

Pour lancer les tests liés au back-office :

```
php bin/phpunit tests/Back
```

## Bugs

Bugs connus :

## Recommandations

Fonctionnalités qui devraient être implémentées :

a revoir -> systéme liaison photos / musiciens trombinoscope 


Chat ouvert pour les musiciens !!


## Mentions légales

Tout le code de ce repository est sous licence [GPL v3.0](https://www.gnu.org/licenses/gpl-3.0.html).

## Contact

Pour toute demande d'information, contactez foo.bar@example.com