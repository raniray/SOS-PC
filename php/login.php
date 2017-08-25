<?php
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "sosPc";
require('connexion.php');
// Create connection
$db = data_base_connect();
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$password = password_hash($_POST['pwd'], PASSWORD_BCRYPT);

$insert = $db->prepare("INSERT INTO Compte values (null,:nom,:prenom,:mail,:password,'C','I',null,null,null,null)");

$insert->bindParam(':nom',$nom);
$insert->bindParam(':prenom',$prenom);
$insert->bindParam(':mail',$mail);
$insert->bindParam(':password',$password);
try {
            $insert->execute();
            echo "successful";
    } catch (Exception $e) {
            return $e->getMessage();
    }

// $sql = "INSERT INTO Compte values (null,'".$_POST['nom']."','".$_POST['prenom']."','".$_POST['mail']."','".password_hash($_POST['pwd'], PASSWORD_BCRYPT)."','C','I',null,null,null,null)";
// if ($conn->query($sql) === TRUE) {
//      echo "successful";
// } else {
//      echo "error";
// }
// $conn->close();
?>
