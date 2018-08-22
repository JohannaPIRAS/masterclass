# masterclass

Création d'un formulaire !

Dans index.php : 

Créer un formulaire identique à celui à la maquette .
Utilisation d'include
Utilisation de switch case pour afficher les résultats des listes déroulantes 
Utilisation de requête LEFT JOIN 

1ere partie : 

4 listes déroulantes à afficher dans le formulaire : 

1  pour afficher les hobbies
1 pour afficher les formateurs
1 pour afficher les apprenants
1 pour l'âge --> LISTE DÉROULANTE DE 18 à 39ans A GENERER DIRECTEMENT DANS POSTGRES !!! (cf la documentation)

2eme partie : 

3 inputs :

1 pour le nom 
1 pour le prénom
1 pour le mail

1 bouton pour envoi à la base de données des informations 

3eme partie : 

Afficher le résultat de la requête suivante : Liste des apprenants et leurs formateurs ainsi que leurs hobbies

Dans le requête.php : 

Se connecter à la base de données 
Utiliser la méthode Switch case pour stocker les différentes requêtes (hobbies, formateurs, apprenants, âge) et les afficher sous forme de listes déroulantes

Pour la liste déroulante de l'âge utiliser CREATE TYPE qui définit un nouveau type de données.
