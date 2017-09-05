<?php
session_start();

require('connexion.php');
$db = data_base_connect();
//Récup?ration des données du form 
$id = !empty($_POST['id']) ? trim($_POST['id']) : null;


 

$stmt1 = $db->prepare("UPDATE annonce_ SET nombreDeVues=nombreDeVues+1 WHERE idAnnonce=:id");

 $stmt1->bindValue(':id',$id);
 try{
    $stmt1->execute();	 
    echo "update successfully!";
}catch (Exception $e) {
        echo $e->getMessage();
      }	  
?>