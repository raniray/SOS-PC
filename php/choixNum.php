<?php 	
require('connexion.php');
$db = data_base_connect();
$num = $_POST['num'];
$idUser = $_POST['id'];



                    
                       $stmt = $db->prepare("UPDATE reparateur_ SET classement=:num WHERE idUser=:id");
                       $stmt->bindValue(':id',$idUser);
					   $stmt->bindValue(':num',$num);
                   
$stmt->execute();

?>