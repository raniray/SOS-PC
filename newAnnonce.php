<?php

ini_set('display_errors', 1);
require('connexion.php');
$db = data_base_connect();
//Récupération des données du form 

$contenu = !empty($_POST['modelePC']) ? trim($_POST['nom']) : null;
$date_creation = date();
$prix =  !empty($_POST['prix']) ? trim($_POST['prix']) : null;
$nbre_vu = 0;
$dureeValidite = 2;

$sql = "INSERT INTO annonce_ (idAnnonce,annoncePic,annonceContent,dateCreation,prix,nombreDeVues,dureeValidite) VALUES (null,null,:annonceContenu,:dateC,:prixA,:nbreVues,:dureeValid)";
$stmt = $db->prepare($sql);
$stmt->bindValue(':annonceContenu', $contenu);
$stmt->bindValue(':dateC', $date_creation);
$stmt->bindValue(':prixA', $prix);
$stmt->bindValue(':nbreVues', $nbre_vu);
$stmt->bindValue(':dureeValid', $dureeValidite);
try{
    $result = $stmt->execute();
	
	 
     echo "votre annonce a été crée!";
	// header("location:./home.php");

}catch (Exception $e) {
        echo $e->getMessage();
      }

?>