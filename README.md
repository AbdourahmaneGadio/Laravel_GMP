# Laravel GMP
Version Laravel Fortify du site GMP

![logo_gmp](https://github.com/AbdourahmaneGadio/Laravel_GMP/assets/91066652/156283cb-6c87-4a75-af2d-fd1b7f902126)

---

## Installation
Clonez le projet

### XAMPP (Windows)
XAMPP est un logiciel qui nous permet d'exécuter un serveur en local.

Téléchargez-le sur ce lien : https://www.apachefriends.org/fr/index.html

### Apache2 (Linux)
```console
sudo apt update && sudo apt install apache2 -y
```

### PHPMyAdmin
Afin d'administrer la base de données du projet, vous devez installer PHPMyAdmin sur votre ordinateur : https://www.phpmyadmin.net/downloads/

Prenez la version la plus récente (5.21 au 20.06.2023)

### Fichier d'environnement
Copiez le fichier .env.example vers un fichier au même emplacement, nommé .env

```console
cp .env-example .env
``` 

Ensuite, remplacez le contenu des lignes ci-dessous par vos données définies sur PHPMyAdmin

```console
DB_DATABASE/DB_USERNAME/DB_PASSWORD
``` 
### Paquets
Une fois le projet cloné, ouvrez un terminal à la racine du dépôt.

Puis, exécutez ces commandes pour installer les paquets: 

```console
npm install
composer install
```

---

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
