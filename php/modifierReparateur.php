<?php 

require('connexion.php');

$db = data_base_connect();

$ajout = $db->prepare("UPDATE reparateur_ SET (nomUser,prenomUser,mailUser,pswdUser,statusAcount,telUser,profession,classement,dateInscription,biography) VALUES (:nomUser,:prenomUser,:mailUser,'PSW','R',:tel,:profession,:classement,:dateInscription,:biography) WHERE idUser = :userid");

$ajout->bindValue(':userid', !empty($_POST['id']) ? trim($_POST['id']) : null);
$ajout->bindValue(':nomUser', !empty($_POST['nom']) ? trim($_POST['nom']) : null);
$ajout->bindValue(':prenomUser', !empty($_POST['prenom']) ? trim($_POST['prenom']) : null);
$ajout->bindValue(':mailUser', !empty($_POST['email']) ? trim($_POST['email']) : null);
$ajout->bindValue(':tel', !empty($_POST['tel']) ? trim($_POST['tel']) : null);
$ajout->bindValue(':profession', !empty($_POST['profession']) ? trim($_POST['profession']) : null);
$ajout->bindValue(':classement', !empty($_POST['classement']) ? trim($_POST['classement']) : null);
$ajout->bindValue(':dateInscription', !empty($_POST['date_de_naissance']) ? trim($_POST['date_de_naissance']) : null);
$ajout->bindValue(':biography', !empty($_POST['biographie']) ? trim($_POST['biographie']) : null);

//Exécution de la requête 
    try {
              $ajout->execute();
              echo "Reparateur Modifier Avec succées";
      } catch (Exception $e) {
        echo $e->getMessage();
      }

?>