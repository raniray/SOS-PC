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
    session_start();
    $username=$_POST['mail'];
    $password=$_POST['pwd'];
    $_SESSION['login_user']=$username; 
    $query = mysql_query("SELECT mailUser FROM Compte WHERE mailUser='$username' and pswdUser='$password'");
     if (mysql_num_rows($query) != 0)
    {
     
     echo "successful"; 
      }
      else
      {
      echo "error";
    }
$conn->close();
?>
