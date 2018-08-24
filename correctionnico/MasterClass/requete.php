<?php
    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);

    function listes($requete){
        $pdo = new PDO("pgsql:host=localhost; port=5432; dbname=bd_master_class",  "admin", "admin");
        
        $affichage = "";

        switch($requete){
            case 'hobbies':
                $requete = 'SELECT id, type_hobby FROM app_master_hobbies';
                $resultat = $pdo->query($requete);
                $result = $resultat->fetchAll();

                foreach($result as $res){
                    $affichage .= "<option value='".$res['id']."'>".$res['type_hobby']."</option>";
                }

                return $affichage;
                break;

            case 'formateurs':
                $requete2 = 'SELECT id, nom, prenom FROM app_master_formateur';
                $resultat2 = $pdo->query($requete2);
                $result = $resultat2->fetchAll();

                foreach($result as $res){
                    $affichage .= "<option value='".$res['id']."'>".$res['prenom']." ".$res['nom']."</option>";
                }

                return $affichage;
                break;

            case 'age':
                $requete3 = 'SELECT unnest(ENUM_RANGE(NULL::age))::age AS age';
                $resultat3 = $pdo->query($requete3);
                $result = $resultat3->fetchAll();
                
                foreach($result as $res){
                    $affichage .= "<option value='".$res['age']."'>".$res['age']."</option>";
                }

                return $affichage;

                break;
            
            case 'liste_apprenant':
                $requete = 'SELECT app_master_apprenant.nom, app_master_apprenant.prenom, app_master_apprenant.email, app_master_formateur.nom as nomf, app_master_formateur.prenom as prenomf, type_hobby
                FROM app_master_apprenant
                LEFT JOIN app_master_formateur ON app_master_apprenant.formateur_id = app_master_formateur.id
                LEFT JOIN app_master_hobbies ON app_master_apprenant.hobbies_id = app_master_hobbies.id';
        
                $resultat = $pdo->query($requete);
                $result = $resultat->fetchAll();
        
                foreach($result as $res){
                    $affichage .= "<a class='list-group-item list-group-item-action'><h5 class='mb-1'>".$res['prenom']." ".$res['nom']."</h5><h5 class='mb-1'>".$res['email']."</h5><h5 class='mb-1'>Formateur : ".$res['prenomf']." ".$res['nomf']."</h5><h5 class='mb-1'>".$res['type_hobby']."</h5></a>";
                }
        
                return $affichage;
                break;

            case 'apprenant':
                $nom = $_POST['nom_apprenant'];
                $prenom = $_POST['prenom_apprenant'];
                $email = $_POST['email'];
                $hobby = $_POST['hobbies'];
                $formateur = $_POST['formateurs'];
                $age = $_POST['age'];

                $requete_validation = $pdo->prepare(
                    "INSERT INTO app_master_apprenant (nom, prenom, email, formateur_id, hobbies_id, age) VALUES(?, ?, ?, ?, ?, ?);"
                );
        
                $requete_validation->bindParam(1, $nom);
                $requete_validation->bindParam(2, $prenom);
                $requete_validation->bindParam(3, $email);
                $requete_validation->bindParam(4, $formateur);
                $requete_validation->bindParam(5, $hobby);
                $requete_validation->bindParam(6, $age);
        
                $requete_validation->execute();

                break;
        
        }
    };

    function success(){
        echo "<div class='alert alert-success'><strong>L'apprenant a été créé avec succès</strong></div>";
    };

    if(isset($_POST['nom_apprenant'])){

        listes('apprenant'); 
    }

?>