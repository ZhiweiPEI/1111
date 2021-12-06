# CDAW_2022 Projet_movieWebsite 
   ### auteur:ZhiweiPEI Xuechu WANG
   ### Lien vidéo：https://www.youtube.com/watch?v=zIKIOh6rrzM&t=1s
   
   Il s'agit de notre projet UV3 CDAW, utilisant principalement le framework laravel pour écrire un site web de films. La partie frontale du projet était enveloppée de vue, js et css, et la partie arrière était principalement écrite en php avec un contrôleur et quelques scripts. Il comprend de nombreuses fonctionnalités telles que la connexion, la déconnexion et l'enregistrement des utilisateurs. Recherche de films par catégorie de films. Ajout, modification et suppression des commentaires des utilisateurs. Ajout de films favoris, ajout de films que vous avez déjà vus, etc.
## Prerequisites

- git - https://git-scm.com/downloads
- docker - https://docs.docker.com/get-docker/
- vscode - https://code.visualstudio.com/
- vscode remote container extension - https://code.visualstudio.com/docs/remote/containers
## Projet de démarrage
1.git clone https://github.com/ZhiweiPEI/CDAW-WEB.git

2.Utilisez vscode pour ouvrir le fichier. Et rouvrir en utilisant le conteneur.

3.URL
- Apache on http://localhost:8080
- PhpMyAdmin on http://localhost:8081

4.Importation de la base de données
- créer une base de données avec le nom test
- importer le fichier de base de données test.sql
- Modifier le fichier .env dans le répertoire "catalogue" comme ca:

   DB_CONNECTION=mysql
   
   DB_HOST=mysql
   
   DB_PORT=3306
   
   DB_DATABASE=test
   
   DB_USERNAME=root
   
   DB_PASSWORD=root

5.Page d'accueil du film.
   http://localhost:8080/jalon2/catalogue/public

## Introduction aux fonctions du site web
1. Page d'accueil du film.
- Informations diverses sur le film, le réalisateur, le titre, le genre, etc.
- Bouton de détails du film
- Barre de recherche permettant de rechercher rapidement vos films préférés.
- Bouton Catégorie : vous pouvez afficher les films par catégories
2. Gestion des utilisateurs
- Le page d'accueil du film permettant de distinguer les utilisateurs connectés des utilisateurs non connectés.
- Dans la barre de navigation, les utilisateurs connectés peuvent cliquer sur le bouton "profil" pour afficher ou modifier leurs informations personnelles.
3. Page de détail d'un film ：Sélectionnez un film sur la page d'accueil et cliquez sur le bouton "view Info".
- Les utilisateurs peuvent voir les détails du synopsis du film, le casting et plus encore.
- Les utilisateurs peuvent ajouter des commentaires, les supprimer et les modifier.
- Les utilisateurs peuvent ajouter leurs films préférés
- Les utilisateurs peuvent marquer les films comme vus ou non vus.

4. Pages de listes diverses
- Il y a quatre listes au total, ce sont la liste des goûts, la liste des surveillances, la liste de l'historique et la liste de lecture.
- Dans la liste, vous pouvez voir des informations sur le film correspondant.



