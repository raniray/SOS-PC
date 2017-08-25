<?php
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

?>
