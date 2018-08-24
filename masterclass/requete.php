<?php  


$bd = "host=localhost port=5432 dbname=Masterclass user=admin password=admin";

$connect = pg_connect($bd);


function listederoulante($requete) {
    $textafficher = "";
    switch ($requete) {

    	case 'type_hobbies':
            // $textafficher = "";
            $requete ='SELECT id, type_hobbies FROM "MC_hobbies"';
            $resultat = pg_query($requete);

            
            while ($result = pg_fetch_array($resultat)) {
                $textafficher.= "<option value='".$result['id']."'>".$result['type_hobbies']." </option> ";
            }
            return $textafficher;
            break;


       	case 'formateurs':
            // $textafficher = "";
            $requete1 ='SELECT id, nom, prenom FROM "MC_formateurs"';
            $resultat1 = pg_query($requete1);
            
            while ($result = pg_fetch_array($resultat1)) {
                $textafficher.= "<option value='".$result['id']."'>".$result['nom']."".$result['prenom']." </option> ";
            }
            return $textafficher;
            break;

        case 'apprenants':
            // $textafficher = "";
            $requete2 ='SELECT id, nom, prenom, age FROM "MC_apprenants"';
            $resultat2 = pg_query($requete2);
            
            while ($result = pg_fetch_array($resultat2)) {
                $textafficher.= "<option value='".$result['id']."'>".$result['nom']."".$result['prenom']."</options>";
            }
            return $textafficher;
            break;

        case 'age':
        //$textafficher = "";
            $requete3 ="SELECT unnest(enum_range(NULL::age))::age AS age";
            $resultat3 = pg_query($requete3);
            
            while ($result = pg_fetch_array($resultat3)) {
                 $textafficher.= "<option value='".$result['age']."'>".$result['age']." </option>";
            }
            return $textafficher;
            break;

    }

};

function liste(){
        $affichage = "";

        $requete = 'SELECT "MC_apprenants".nom as noma, "MC_apprenants".prenom as prenoma, "MC_apprenants".mail, "MC_apprenants".age, "MC_formateurs".nom as formateurn,"MC_formateurs".prenom as formateurp, type_hobbies
                FROM "MC_apprenants"
                LEFT JOIN "MC_formateurs" ON "MC_apprenants".formateurs_id =                "MC_formateurs".id
                LEFT JOIN "MC_hobbies" ON "MC_apprenants".hobbies_id = "MC_hobbies".id;';

        $resultat = pg_query($requete);

        while($result = pg_fetch_array($resultat)){
            $affichage .= "<a class='list-group-item list-group-item-action'><h5 class='mb-1'>".$result['prenoma']." ".$result['noma']."</h5><h5 class='mb-1'>".$result['mail']."</h5><h5 class='mb-1'>Formateur : ".$result['formateurp']." ".$result['formateurn']."</h5><h5 class='mb-1'>".$result['type_hobbies']."</h5></a>";
        }

        return $affichage;
    }



if (isset($_POST['mail'])) {

$table = ''."MC_apprenants".'';


$insert_apprenant = "INSERT INTO \"MC_apprenants\" (nom, prenom, mail,formateurs_id, hobbies_id, age)
    VALUES ('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['mail']."',".$_POST['formateurs'].",".$_POST['type_hobbies'].",'".$_POST['age']."')";


$result = pg_query($insert_apprenant); 

var_dump($result);
var_dump($insert_apprenant);
}

