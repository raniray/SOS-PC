<?php
ini_set('display_errors', 1);
//Connexion a la basse de donnée.
try{
            $PDO = new PDO('mysql:host=localhost;dbname=sosPc','root','root');
            $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
            $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

}catch(PDOException $e) {
            echo "error";
}
//Récupération des données du form 
$nom = !empty($_POST['nom']) ? trim($_POST['nom']) : null;
$prenom = !empty($_POST['prenom']) ? trim($_POST['prenom']) : null;
$mail = !empty($_POST['mail']) ? trim($_POST['mail']) : null;
$prenom = !empty($_POST['prenom']) ? trim($_POST['prenom']) : null;
$pass = !empty($_POST['pwd']) ? trim($_POST['pwd']) : null;
//haché du message
$pwd=password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));
//Formulation de la requête
$sql = "INSERT INTO Client_ (idUser,nomUser,prenomUser,mailUser,pswdUser,statusAcount,ccpUser,profilePicUser,telUser,dateNaissUser) VALUES (null,:nomUser,:prenomUser,:mailUser,:pswdUser,'I',null,null,null,null)";
$stmt = $PDO->prepare($sql);
//liaison des variables 
$stmt->bindValue(':nomUser', $nom);
$stmt->bindValue(':prenomUser', $prenom);
$stmt->bindValue(':mailUser', $mail);
$stmt->bindValue(':pswdUser', $pwd);
//Exécution de la requête 
$result = $stmt->execute();
if ($result) {
	 session_start(); // On commence la session
	 $_SESSION['login_user']=$nom." ".$prenom;
     $_SESSION['login']=true;
     $_SESSION['mail']=$mail;
     echo "successful";
} else {
     echo "error";
}
?>
