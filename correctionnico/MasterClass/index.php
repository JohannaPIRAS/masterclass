<?php
    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);

    include('requete.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RequêteLand</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-warning">
    <div class="container">
        <h1 class="display-3">Ici on va faire des requêtes avec du PHP et du SQL</h1>
        <hr>
    </div>
    <div class="container form-group">
        <div class="container">
            <?php if($_POST['nom_apprenant']){echo success();}; ?>
        </div>
        <form method="POST">
            <label>Nom de l'apprenant :</label><br>
            <input class="is-valid form-control" type="text" name="nom_apprenant" id="nom"><br>
            <label >Prénom de l'apprenant :</label><br>
            <input class="is-valid form-control" type="text" name="prenom_apprenant" id="prenom"><br>
            <label>Email :</label><br>
            <input class="is-valid form-control" type="email" name="email" id="email"><br>
            <label>Hobby :</label><br>
            <select class="custom-select" name="hobbies" id="hobbies"><br>
                <option selected="" disabled="">---------------</option>
                <?= listes('hobbies'); ?>
            </select><br><br>
            <label>Formateur :</label><br>
            <select class="custom-select" name="formateurs" id="formateurs">
                <option selected="" disabled="">---------------</option>
                <?= listes('formateurs'); ?>
            </select><br><br>
            <label>Age :</label><br>
            <select class="custom-select" name="age" id="age">
                <option selected="" disabled="">---------------</option>
                <?= listes('age'); ?>
            </select>
            <hr>
            <button type="submit" class="btn btn-success lg">Créer un apprenant</button>
        </form>
        <br>
    </div>
    <br>
    <br>
    <div class="container">
        <h3 class="display-4">Liste des apprenants</h3>
        <div class="list-group">
            <?= listes('liste_apprenant'); ?>
        </div>
        <br>
        <br>
    </div>
</body>
</html>