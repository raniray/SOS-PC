<?php
ini_set('display_errors', 1);
require('connexion.php');


$db = data_base_connect();
//Récupération des données du form 
$nom = !empty($_POST['nom']) ? trim($_POST['nom']) : null;
$prenom = !empty($_POST['prenom']) ? trim($_POST['prenom']) : null;
$mail = !empty($_POST['mail']) ? trim($_POST['mail']) : null;
$pass = !empty($_POST['pwd']) ? trim($_POST['pwd']) : null;
//haché du message
$pwd=md5($pass);

$dateInscription =  date("Y-m-d");

//Formulation de la requête
$sql = "INSERT INTO User_ (nomUser,prenomUser,mailUser,pswdUser,statusAcount,profilePicUser,telUser,dateNaissUser,dateInscription) VALUES (:nomUser,:prenomUser,:mailUser,:pswdUser,'C','./img/Profiles/default-user.png',null,null,:dateInscription)";
$stmt = $db->prepare($sql);
//liaison des variables 
$stmt->bindValue(':nomUser', $nom);
$stmt->bindValue(':prenomUser', $prenom);
$stmt->bindValue(':mailUser', $mail);
$stmt->bindValue(':pswdUser', $pwd);
$stmt->bindValue(':dateInscription', $dateInscription);
//Exécution de la requête 
$idUser = $db->lastInsertId('idUser');

$sql2 = "INSERT INTO Client_ (idUser,ccpUser) VALUES (:iduser,null)";
$stmtC = $db->prepare($sql2);
$stmtC->bindValue(':iduser', $idUser);
try{
  $res = $stmtC->execute();
  $stmt->execute(); 
  session_start(); // On commence la session
  $_SESSION['login_user']=$nom." ".$prenom;
  $_SESSION['login']=true;
  $_SESSION['mail']=$mail;
  $_SESSION['picture']="./img/Profiles/default-user.png";
  echo "successful";
  }
  catch(Exception $e){
        echo $e->getMessage();
  }

?>
