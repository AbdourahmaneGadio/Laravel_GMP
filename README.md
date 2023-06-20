# Laravel_GMP
Version Laravel Fortify du site GMP

## Installation
Clonez le projet

### XAMPP
XAMPP est un logiciel qui nous permet d'exécuter un serveur en local.

Téléchargez-le sur ce lien : https://www.apachefriends.org/fr/index.html


### PHPMyAdmin
Afin d'administrer la base de données du projet, vous devez installer PHPMyAdmin sur votre ordinateur : https://www.phpmyadmin.net/downloads/

### Fichier d'environnement
Copiez le fichier .env.example vers un fichier au même emplacement, nommé .env

Ensuite, remplacez les lignes DB_DATABASE/DB_USERNAME/DB_PASSWORD, par vos données définies sur PHPMyAdmin

### Paquets
Une fois le projet cloné, ouvrez un terminal à la racine du dépôt.

Puis, exécutez ces commandes pour installer les paquets: 

```console
npm install
composer install
```


## Exécution
Pour lancer le serveur, ouvrez 2 terminaux distincts, et tapez ces commandes :

### 1er terminal
```console
npm run dev
```

### 2ème terminal
```console
php artisan serve
```