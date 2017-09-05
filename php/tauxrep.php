<?php 

require('connexion.php');

$db = data_base_connect();
$taux = $_POST['taux'];
$id = $_POST['id'];
$ajout = $db->prepare("UPDATE demande_ SET tauxAvancement = :taux where idDemande=:id");
//Exécution de la requête 
$ajout->bindValue(':id', $id);
$ajout->bindValue(':taux', $taux);
try {
        $ajout->execute();  
        echo "ok";
} catch (Exception $e) {
        echo $e->getMessage();
}


?>
