<?php
session_start();
require('connexion.php');
$db = data_base_connect();



$avis = !empty($_POST['contenuAvis']) ? trim($_POST['contenuAvis']) : null;


  $target_dir = "?C:/wamp/www/SOS-PC-master1/imges/";  //Choisir là où l'image sera placée
 //echo $_FILES["imgAnnonce"]."LOOOOL!";


	  // echo "File Name: " . $_FILES["imgAnnonce"]["name"] . "<br>";
//if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
 
//}
 
   $client =  $_SESSION['login_user'];
   $mail = $_SESSION['mail'];
   
   $stmt1 = $db->prepare("SELECT idUser FROM User_ WHERE mailUser=:mail");
 $stmt1->bindValue(':mail',$mail);
 try{
    $stmt1->execute();	 
    while($row = $stmt1->fetch(PDO::FETCH_ASSOC)) 
{
  $ID = $row['idUser'];
  

}
}catch (Exception $e) {
        echo $e->getMessage();
      }
	 
 $stmt2 = $db->prepare("INSERT INTO avis_ (idUser,contenuAvis) VALUES(:idUser,:avis)");
 $stmt2->bindValue(':idUser',$ID);
 $stmt2->bindValue(':avis',$avis);
 try{
    $stmt2->execute();
 
}catch (Exception $e) {
        echo $e->getMessage();
      }
	  


	
 header("Location: ../home.php#clients");



?>