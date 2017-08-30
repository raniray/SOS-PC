<?php

require('connexion.php');
$db = data_base_connect();
//R�cup�ration des donn�es du form 

$model = !empty($_POST['model']) ? trim($_POST['model']) : null;
$date_creation = date();
$prix =  !empty($_POST['prix']) ? trim($_POST['prix']) : null;
$nbre_vu = 0;
$dureeValidite = 2;

$stmt = $db->prepare("INSERT INTO annonce_ (annoncePic,annonceContent,dateCreation,prix,nombreDeVues,durreeValidite) VALUES (null,:annonceContenu,:dateC,:prixA,:nbreVues,:dureeValid)");
$stmt->bindValue(':annonceContenu', $model);
$stmt->bindValue(':dateC', $date_creation);
$stmt->bindValue(':prixA', $prix);
$stmt->bindValue(':nbreVues', $nbre_vu);
$stmt->bindValue(':dureeValid', $dureeValidite);
try{
    $stmt->execute();	 
     echo "votre annonce a ete cree!";
}catch (Exception $e) {
        echo $e->getMessage();
      }
?>