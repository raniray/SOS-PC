<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sosPc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO Compte values (null,'".$_POST['nom']."','".$_POST['prenom']."','".$_POST['mail']."','".password_hash($_POST['pwd'], PASSWORD_BCRYPT)."','C','I',null,null,null,null)";
if ($conn->query($sql) === TRUE) {
    
     echo "successful";
} else {
     echo "error";
}

$conn->close();
?>
