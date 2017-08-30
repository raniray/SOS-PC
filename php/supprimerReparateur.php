<?php 

require('connexion.php');

$db = data_base_connect();

$supp = $db->prepare("DELETE From reparateur_ WHERE idUser=:id");
$supp->bindValue(':id', !empty($_POST['id']) ? trim($_POST['id']) : null);
    try {
              $supp->execute();
              echo "Reparateur supprimer Avec succées";
    } catch (Exception $e) {
    echo $e->getMessage()."   ".$_POST['id'];
    }

?>