<?php 

require('connexion.php');

$db = data_base_connect();

$nom = !empty($_POST['nom']) ? trim($_POST['nom']) : null;
$prenom = !empty($_POST['prenom']) ? trim($_POST['prenom']) : null;
$mail = !empty($_POST['email']) ? trim($_POST['email']) : null;
$pass = !empty($_POST['pwd']) ? trim($_POST['pwd']) : null;
$dateNaissance = !empty($_POST['date_de_naissance']) ? trim($_POST['date_de_naissance']) : null;
$idUser = !empty($_POST['id']) ? trim($_POST['id']) : null;
//Formulation de la requête
$sql = "UPDATE User_ SET nomUser=:nomUser, prenomUser=:prenomUser, mailUser=:mailUser, telUser=:telUser, dateNaissUser=:naissance where idUser=$idUser";
$stmt = $db->prepare($sql);
//liaison des variables 
$stmt->bindValue(':nomUser', $nom);
$stmt->bindValue(':prenomUser', $prenom);
$stmt->bindValue(':mailUser', $mail);
$stmt->bindValue(':telUser', !empty($_POST['tel']) ? trim($_POST['tel']) : null);
$stmt->bindValue(':naissance', $dateNaissance);


$ajout = $db->prepare("UPDATE Reparateur_ SET profession=:profession,classement=:classement,biography=:biography where idUser=:idUser");
$ajout->bindValue(':idUser', $idUser);
$ajout->bindValue(':classement', !empty($_POST['classement']) ? trim($_POST['classement']) : null);
$ajout->bindValue(':profession', !empty($_POST['profession']) ? trim($_POST['profession']) : null);
$ajout->bindValue(':biography', !empty($_POST['biographie']) ? trim($_POST['biographie']) : null);

//Exécution de la requête 
try {
        $stmt->execute();  
        $ajout->execute();
        echo "Reparateur modifier Avec succées";
} catch (Exception $e) {
  echo $e->getMessage();
}

?>