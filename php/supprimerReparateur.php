<?php 

require('connexion.php');

$db = data_base_connect();

$supp = $db->prepare("DELET From reparateur_ WHERE idUser=:id");

$supp->bindValue(':idUser', !empty($_POST['id']) ? trim($_POST['id']) : null);
    try {
              $supp->execute();
              echo "Reparateur supprimer Avec succées";
    } catch (Exception $e) {
    echo $e->getMessage();
    }

?>