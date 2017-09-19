<?php 

require('connexion.php');

$db = data_base_connect();
$mail = !empty($_POST['mail']) ? trim($_POST['mail']) : null;
$nom = !empty($_POST['nom']) ? trim($_POST['nom']) : null;
$msg = !empty($_POST['message']) ? trim($_POST['message']) : null;


$ajout = $db->prepare("INSERT INTO contact_ (nometprenom, mail, message) VALUES (:nom,:mail,:msg)");
//Exécution de la requête 
$ajout->bindValue(':msg', $msg);
$ajout->bindValue(':nom', $nom);
$ajout->bindValue(':mail', $mail);
try {
        $ajout->execute();  
        echo "Votre Message a été bien envoyée, Merci";
} catch (Exception $e) {
        echo $e->getMessage();
}
?>