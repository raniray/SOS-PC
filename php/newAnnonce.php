<?php
session_start();
require('connexion.php');
$db = data_base_connect();

$target_dir = "../images/annonces/";
$target_file = $target_dir.basename($_FILES["imgAnnonce"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imgAnnonce"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["imgAnnonce"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imgAnnonce"]["tmp_name"], $target_file)) {
        echo "The file ".basename( $_FILES["imgAnnonce"]["name"])." has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

//Récup?ration des données du form 
$model = !empty($_POST['model']) ? trim($_POST['model']) : null;

setlocale (LC_TIME, 'fr_FR','fra'); 

$date_creation = strftime("%Y-%m-%d %H:%M:%S");
$prix =  !empty($_POST['prix']) ? trim($_POST['prix']) : null;
$processeur =  !empty($_POST['processeur']) ? trim($_POST['processeur']) : null;
$RAM =  !empty($_POST['RAM']) ? trim($_POST['RAM']) : null;
$sysE = !empty($_POST['sysE']) ? trim($_POST['sysE']) : null;
$ancienn =  !empty($_POST['ancienn']) ? trim($_POST['ancienn']) : null;
$contenuAnnonce = !empty($_POST['contenuAnnonce']) ? trim($_POST['contenuAnnonce']) : null;
$duree = !empty($_POST['duree']) ? trim($_POST['duree']) : null;
$imgAnnonce = !empty($_FILES['imgAnnonce']['name']) ? trim($_FILES['imgAnnonce']['name']) : null; 
//$imgAnnonce =  !empty($_POST['imgAnnonce']) ? trim($_POST['imgAnnonce']) : null;
$nbre_vu = 0;

$t="";
$url = "";
	$content = "Modèle:".$model."\n"."Processeur:"." ".$processeur."\n"."RAM:".$RAM."\n"."Système d'exploitation:".$sysE."\n"."Anciennete:"." ".$ancienn."\n"."Durée de validité:".$duree." "."Jours"."\n"."Detail:".$contenuAnnonce."\n";

  $target_dir = "‪C:/wamp/www/SOS-PC-master1/imges/";  //Choisir là où l'image sera placée
 //echo $_FILES["imgAnnonce"]."LOOOOL!";


	  // echo "File Name: " . $_FILES["imgAnnonce"]["name"] . "<br>";
//if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
 
//}
 
   $email =  $_SESSION['mail'];
 $stmt1 = $db->prepare("SELECT idUser FROM User_ WHERE mailUser=:mail");
 $stmt1->bindValue(':mail',$email);
 try{
    $stmt1->execute();	 
    while($row = $stmt1->fetch(PDO::FETCH_ASSOC)) 
{
  $ID = $row['idUser'];

}
}catch (Exception $e) {
        echo $e->getMessage();
      }
	  
$stmt = $db->prepare("INSERT INTO annonce_ (annoncePic,annonceContent,dateCreation,prix,nombreDeVues,durreeValidite,idUser) VALUES (:img,:annonceContenu,:dateC,:prixA,:nbreVues,:dureeValid,:idU)");
$stmt->bindValue(':annonceContenu', $content);
$stmt->bindValue(':dateC', $date_creation);
$stmt->bindValue(':prixA', $prix);
$stmt->bindValue(':nbreVues', $nbre_vu);
$stmt->bindValue(':dureeValid', $duree);
$stmt->bindValue(':img', $imgAnnonce);
$stmt->bindValue(':idU', $ID);
try{
    $stmt->execute();	 
     echo "votre annonce a ete cree!";
}catch (Exception $e) {
        echo $e->getMessage();
      }

	
 header("Location: ../home.php#vente");



?>