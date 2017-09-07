<?php 

require('connexion.php');

$db = data_base_connect();
$dateInscription =  date("Y-m-d");

$idDemande = !empty($_POST['idDemande']) ? trim($_POST['idDemande']) : null;
$prix = !empty($_POST['prix']) ? trim($_POST['prix']) : null;
$type = !empty($_POST['type']) ? trim($_POST['type']) : null;
$temp = !empty($_POST['temps']) ? trim($_POST['temps']) : null;
$details = !empty($_POST['details']) ? trim($_POST['details']) : null;
//Formulation de la requête
$sql = "INSERT INTO `fichereparation_`(`idDemande`, `prix`, `type`, `temp`, `details`) VALUES ( :idDemande, :prix, :type, :temp, :details)";
$stmt = $db->prepare($sql);
//liaison des variables 
$stmt->bindValue(':idDemande', $idDemande);
$stmt->bindValue(':prix', $prix);
$stmt->bindValue(':temp', $temp);
$stmt->bindValue(':type', $type);
$stmt->bindValue(':details', $details);
try {
        $stmt->execute();  
        echo "Fiche inseré Avec succées";
} catch (Exception $e) {
  echo $e->getMessage();
}
?>