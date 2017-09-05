<?php 

require('connexion.php');

$db = data_base_connect();
$etat = $_POST['etat'];
$id = $_POST['id'];
$ajout = $db->prepare("UPDATE demande_ SET etatDemande = :etat where idDemande=:id");
//Exécution de la requête 
$ajout->bindValue(':id', $id);
$ajout->bindValue(':etat', $etat);
try {
        $ajout->execute();  
        echo "ok";
} catch (Exception $e) {
        echo $e->getMessage();
}


?>
