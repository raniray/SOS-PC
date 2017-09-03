<?php 
require('connexion.php');

$db = data_base_connect();
$mail = !empty($_POST['mail']) ? trim($_POST['mail']) : null;
$pass = !empty($_POST['pwd']) ? trim($_POST['pwd']) : null;

$md5pass = md5($pass);
//Formulation de la requête
$stmt = $db->prepare("SELECT * FROM User_ WHERE mailUser=:mail LIMIT 1");

          $res = $stmt->execute(array(':mail'=>$mail));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);//Récupérer l'utilisateur concerné.

          if($stmt->rowCount() > 0)
          {
            if ($md5pass==$userRow['pswdUser']) //password_verify($pass,$userRow['pswdUser'])
            {
                    session_start();
                     // On commence la session
                    $_SESSION['login_user']=$userRow['nomUser']." ".$userRow['prenomUser'];
                    $_SESSION['login']=true;
                    $_SESSION['mail']=$mail;
                    $_SESSION['picture']=$userRow['profilePicUser'];
                    $type = $userRow['statusAcount'];
                    switch($type) {
                      case 'C': {
                        $_SESSION['Account_type']="C";
                        echo "client";
                        break;
                    }
                      case 'R': {
                        $_SESSION['Account_type']="R";
                          echo "rep";
                          break;
                    }
                      case 'A': {
                        $_SESSION['Account_type']="A";
                          echo "admin"; 
                          break;       
                    }
                    }
              }else
              {
                echo "error";
              }
           }

?>
