# masterclass
                                            Création d'un formulaire !



DIFFICULTÉS : 

-Créer un formulaire identique à celui à la maquette .
-Utilisation d'include
-Utilisation de switch case pour afficher les résultats des listes déroulantes 
-Utilisation de requête LEFT JOIN 
-Utilisation du sql pour créer directement une liste de valeurs.


Dans index.php : PAS DE REQUÊTE DANS CE FICHIER CRÉER DES INCLUDES POUR APPELER LES FONCTIONS DANS LA PAGE index.php

* 1ere partie : 

4 listes déroulantes à afficher dans le formulaire : 

1  pour afficher les hobbies
1 pour afficher les formateurs
1 pour afficher les apprenants
1 pour afficher l'âge

Pour celle de l'âge : 
1 pour l'âge --> LISTE DÉROULANTE DE 18 à 39ans A GENERER DIRECTEMENT EN SQL !!! (cf la documentation)


* 2eme partie : 

3 inputs :

1 pour le nom 
1 pour le prénom
1 pour le mail

1 bouton pour envoi à la base de données des informations 

Les 3 inputs doivent s'envoyer et s'enregistrer dans la base de données et récupérer l'id du hobby et du formateur pour le faire correspondre à l'apprenant ajouté.

* 3eme partie : 

Afficher le résultat de la requête suivante : Liste des apprenants et leurs formateurs ainsi que leurs hobbies


Dans le fichier requête.php : 

Se connecter à la base de données 
Utiliser la méthode Switch case pour stocker les différentes requêtes (hobbies, formateurs, apprenants, âge) et les afficher
Pour la liste déroulante de l'âge utiliser CREATE TYPE qui définit un nouveau type de données. (cf la documentation!!)

