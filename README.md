Calculateur de Dépense en Cigarettes

Ce projet est un calculateur web permettant aux utilisateurs de déterminer combien ils dépensent quotidiennement, hebdomadairement, mensuellement et annuellement en fonction de leur consommation de cigarettes.

Fonctionnalités

Sélection du Type de Cigarette : Les utilisateurs peuvent choisir entre des cigarettes industrielles et des cigarettes roulées.
Sélection de la Marque : En fonction du type de cigarette choisi, les utilisateurs peuvent sélectionner une marque parmi une liste prédéfinie.
Quantité de Cigarettes : Les utilisateurs peuvent spécifier le nombre de cigarettes qu'ils consomment par jour.
Calcul des Coûts : Une fois les choix effectués, le système calcule automatiquement le coût quotidien, hebdomadaire, mensuel, annuel et sur une période de 50 ans (coût de vie).
Affichage des Résultats : Les résultats sont affichés clairement après le calcul.
Technologies Utilisées

Frontend : HTML, CSS (styles simples pour la mise en page et l'interaction).
Backend : PHP (pour gérer les calculs et interagir avec la base de données).
Base de Données : MySQL (stockage des prix par type et marque de cigarettes).
Installation

Configurer l'Environnement :

Assurez-vous d'avoir installé XAMPP ou un autre serveur web avec PHP et MySQL.
Créez une base de données nommée cigarettes_db.
Importez la structure de la table et les données de prix à partir du fichier SQL fourni (prices.sql).
Déploiement :

Placez les fichiers HTML, PHP et CSS dans le répertoire de votre serveur web local (htdocs pour XAMPP).
Assurez-vous que les fichiers sont accessibles via une URL, par exemple http://localhost/votre_projet.
Configuration :

Assurez-vous que les informations de connexion à la base de données ($servername, $username, $password, $dbname) dans calculate.php sont correctes et correspondent à votre environnement.
Utilisation

Ouvrez votre navigateur web et accédez à l'URL où vous avez déployé le projet.
Remplissez les détails dans le formulaire (type de cigarette, marque, quantité de cigarettes par jour).
Cliquez sur le bouton "Calculer" pour voir les résultats.


Auteurs

Kumulus26 - Développeur principal
