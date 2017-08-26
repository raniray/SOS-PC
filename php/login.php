<?php
<<<<<<< HEAD
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
/*
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
$conn->close();*/
=======
ini_set('display_errors', 1);
//Connexion a la basse de donnée.
try{
            $PDO = new PDO('mysql:host=localhost;dbname=sosPc','root','root');
            $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
            $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

}catch(PDOException $e) {
            echo "error";
}
//Récupération des données du form 
$mail = !empty($_POST['mail']) ? trim($_POST['mail']) : null;
$pass = !empty($_POST['pwd']) ? trim($_POST['pwd']) : null;
//Formulation de la requête
 $stmt = $PDO->prepare("SELECT * FROM Client_ WHERE  mailUser=:mail LIMIT 1");
          $stmt->execute(array(':mail'=>$mail));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);//Récupérer l'utilisateur concerné.
          if($stmt->rowCount() > 0)
          { 
if (password_verify($pass,$userRow['pswdUser']))

     {       session_start(); // On commence la session
            $_SESSION['login_user']=$userRow['nomUser']." ".$userRow['prenomUser'];
            $_SESSION['login']=true;
            $_SESSION['mail']=$mail;
            $_SESSION['picture']=$userRow['profilePicUser'];
            echo "successful";
      }else
      {
        echo "error";
      }
} else {
   echo "error";
}

>>>>>>> c2005459b02702240755ea6a02ea355f9b929d0e
?>
