<?php
include('requete.php')
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="index.css">
  <title> Bienvenue</title>
</head>

<body>
<br>
    <h1>Bienvenue</h1>
    <div class="form-group">
    	<form method="POST">
    	<label> Type de hobbies</label>
      <select class="form-control" name="type_hobbies">

          <?php echo listederoulante('type_hobbies'); ?>                     
      </select>
    	<br>
      <label> Formateurs</label>
      <select class="form-control" name="formateurs">
        
          <?php echo listederoulante('formateurs'); ?>                     
      </select>
		<br>
    <label> Apprenants</label>
      <select class="form-control" name="apprenants">

          <?php echo listederoulante('apprenants'); ?>                     
      </select>
      <label>Age</label>
      <select class="form-control" name="age">

      <?php echo listederoulante('age');?>
      </select>

      <br>
      <br>
      <h1> AJOUTER UN NOUVEL APPRENANT </h1>
      <label>Nom</label>
      <br>
      <input type="text" name="nom">
      <br>
      <label>Prenom</label>
      <br>
      <input type="text" name="prenom">
      <br>
      <label>Mail</label>
      <br>
      <input type="email" name="mail">
      <br>
      
      <button type="submit" class="btn btn-primary">Ajouter un apprenant</button>
      </form>
    </div>
<br>
  <div>
    <label> Liste apprenants et leurs formateurs et leurs hobbies</label>
    <br>
    <div  class="list-group" name="requete">
      <?php echo liste('requete');?>
    </div>
  </div>
    

</body>
</html>

