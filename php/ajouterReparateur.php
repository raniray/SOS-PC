<?php 

require('connexion.php');

$db = data_base_connect();

$pwd=md5($_POST['nom']);
$nom = !empty($_POST['nom']) ? trim($_POST['nom']) : null;
$prenom = !empty($_POST['prenom']) ? trim($_POST['prenom']) : null;
$mail = !empty($_POST['email']) ? trim($_POST['email']) : null;
$pass = !empty($_POST['pwd']) ? trim($_POST['pwd']) : null;
$dateNaissance = !empty($_POST['date_de_naissance']) ? trim($_POST['date_de_naissance']) : null;
$dateInscription =  date("Y-m-d");
//Formulation de la requête
$sql = "INSERT INTO User_ (nomUser,prenomUser,mailUser,pswdUser,statusAcount,profilePicUser,telUser,dateNaissUser,dateInscription) VALUES (:nomUser,:prenomUser,:mailUser,:pswdUser,'R','./img/Profiles/default-user.png',:telUser,:naissance,:dateInscription)";
$stmt = $db->prepare($sql);
//liaison des variables 
$stmt->bindValue(':nomUser', $nom);
$stmt->bindValue(':prenomUser', $prenom);
$stmt->bindValue(':mailUser', $mail);
$stmt->bindValue(':pswdUser', $pwd);
$stmt->bindValue(':dateInscription', $dateInscription);
$stmt->bindValue(':telUser', !empty($_POST['tel']) ? trim($_POST['tel']) : null);
$stmt->bindValue(':naissance', $dateNaissance);

try {
        $stmt->execute(); 
    }catch (Exception $e) {
  echo $e->getMessage();
}

$idUser = $db->lastInsertId();
$ajout = $db->prepare("INSERT INTO reparateur_ (idUser,profession,classement,biography) VALUES (:idUser,:profession,:classement,:biography)");
$ajout->bindValue(':idUser', $idUser);
$ajout->bindValue(':classement', !empty($_POST['classement']) ? trim($_POST['classement']) : null);
$ajout->bindValue(':profession', !empty($_POST['profession']) ? trim($_POST['profession']) : null);
$ajout->bindValue(':biography', !empty($_POST['biographie']) ? trim($_POST['biographie']) : null);
try{
//Exécution de la requête 
 
        $ajout->execute();
        echo "Reparateur inseré Avec succées".$idUser;
} catch (Exception $e) {
  echo $e->getMessage();
}


?>