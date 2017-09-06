<?php
session_start();

require('connexion.php');
$db = data_base_connect();

$id = !empty($_POST['id']) ? trim($_POST['id']) : null;


 

$stmt1 = $db->prepare("DELETE FROM annonce_ WHERE idAnnonce=:id");

 $stmt1->bindValue(':id',$id);
 try{
    $stmt1->execute();	 
    echo "Votre annonce a été supprimée!";
}catch (Exception $e) {
        echo $e->getMessage();
      }	  
?>