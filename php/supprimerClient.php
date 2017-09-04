<?php 

require('connexion.php');

$db = data_base_connect();

$supp1 = $db->prepare("DELETE From client_ WHERE idUser=:id");
$supp2 = $db->prepare("DELETE From user_ WHERE idUser=:id");
$supp1->bindValue(':id', !empty($_POST['id']) ? trim($_POST['id']) : null);
$supp2->bindValue(':id', !empty($_POST['id']) ? trim($_POST['id']) : null);
    try {
              $supp1->execute();
              $supp2->execute();
              echo "Client supprimer Avec succées";
    } catch (Exception $e) {
    echo $e->getMessage();
    }

?>