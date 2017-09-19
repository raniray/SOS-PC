<?php
session_start();

require('connexion.php');
$db = data_base_connect();

$id = !empty($_POST['id']) ? trim($_POST['id']) : null;


 

$stmt1 = $db->prepare("DELETE FROM avis_ WHERE idAvis=:id");

 $stmt1->bindValue(':id',$id);
 try{
    $stmt1->execute();	
	
    header("Location:accueilAdmin.php#clients");
}catch (Exception $e) {
        echo $e->getMessage();
      }	  
	  
	 
		   
?>