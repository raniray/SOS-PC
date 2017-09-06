<?php 

require('connexion.php');

$db = data_base_connect();
$idrep = $_POST['rep'];
$id = $_POST['id'];
$ajout = $db->prepare("UPDATE demande_ SET idReparateur = :idrep where idDemande=:id");
//Exécution de la requête 
$ajout->bindValue(':id', $id);
$ajout->bindValue(':idrep', $idrep);
try {
        $ajout->execute();  
        echo "ok";
} catch (Exception $e) {
        echo $e->getMessage();
}

?>
