# Bonjour et bienvenue sur l'application de test 

Voici une application créer avec Laravel 8 et Vue.JS, je vais vous décrire par la suite 
comment lancer le projet.

## La base de données
Commençons tout d'abord par récupérer tout ce qu'il nous faut :

Lancer la commande ``composer install``

/!\ PENSEZ BIEN A ETRE DANS LE DOSSIER "back-api-charlie" pour les étapes jusqu'a la fin de 
'lancer l'API'

Tout d'abord pour la partie Back-end de l'application placez vous bien dans le dossier back-api-charlie


N'oubliez pas de créer une table et de modifier le fichier .env dans le back-end 
afin de pouvoir vous connecter a une base de donnée.

Ensuite utilisez la commande 
```php artisan migrate --seed``` afin de créer les tables dans votre Database et de la garnir de données.

## Lancer l'API

Lancez la commande
``php artisan serve`` afin de lancer le serveur

##Partie Vue JS
/!\ PENSEZ BIEN A ETRE DANS LE DOSSIER "front-api-charlie"

Lancer la commande ``npm install`` pour installer tout ce dont il y a besoin

Effectuer un ``npm run serve`` afin de lancer le serveur Vue.js



##Ressenti sur le projet

Très interessant, m'as permis de découvrir plus profondément Vue.JS avec les appels API
que j'avais déjà fait en React mais pas encore avec Vue. Cependant cela reste très similaire.

Le temps de développement du projet est très adapté en éspérant que celui ci 
corresponde à vos attentes.



## Temps mis à réaliser le projet
Etant en semaine de projet dans mon centre de formation je n'ai pu me concentrer
sur le projet que les soirs.

Projet développé en 3 jours.
