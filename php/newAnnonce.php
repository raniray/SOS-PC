<?php
session_start();
require('connexion.php');
$db = data_base_connect();
//Récup?ration des données du form 
$model = !empty($_POST['model']) ? trim($_POST['model']) : null;

date_default_timezone_set('Europe/Paris');
// --- La setlocale() fonctionnne pour strftime mais pas pour DateTime->format()
setlocale(LC_TIME, 'fr_FR.utf8','fra');// OK
// strftime("jourEnLettres jour moisEnLettres annee") de la date courante
$date_creation = strftime("%A %d %B %Y");
$prix =  !empty($_POST['prix']) ? trim($_POST['prix']) : null;
$processeur =  !empty($_POST['processeur']) ? trim($_POST['processeur']) : null;
$RAM =  !empty($_POST['RAM']) ? trim($_POST['RAM']) : null;
$sysE = !empty($_POST['sysE']) ? trim($_POST['sysE']) : null;
$ancienn =  !empty($_POST['ancienn']) ? trim($_POST['ancienn']) : null;
$contenuAnnonce = !empty($_POST['contenuAnnonce']) ? trim($_POST['contenuAnnonce']) : null;
$duree = !empty($_POST['duree']) ? trim($_POST['duree']) : null;
//$imgAnnonce = !empty($_FILES['imgAnnonce']['name']) ? trim($_FILES['imgAnnonce']['name']) : null; 
//$imgAnnonce =  !empty($_POST['imgAnnonce']) ? trim($_POST['imgAnnonce']) : null;
$nbre_vu = 0;

$t="";
$url = "";
	$content ="Modèle:".$model." "."Processeur:"." ".$processeur." "."RAM:".$RAM." "."Système d'exploitation:".$sysE." "."Anciennete:"." ".$ancienn." "."Durée de validité:".$duree." "."Detail:".$contenuAnnonce;

  $target_dir = "‪C:/wamp/www/SOS-PC-master1/imges/";  //Choisir là où l'image sera placée
 //echo $_FILES["imgAnnonce"]."LOOOOL!";
 $imgAnnonce = !empty($_FILES["imgAnnonce"]);

	  // echo "File Name: " . $_FILES["imgAnnonce"]["name"] . "<br>";
//if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["imgAnnonce"]) && $_FILES["imgAnnonce"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["imgAnnonce"]["name"];
        $filetype = $_FILES["imgAnnonce"]["type"];
        $filesize = $_FILES["imgAnnonce"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $_FILES["photo"]["name"])){
                echo $_FILES["imgAnnonce"]["name"] . " is already exists.";
            } else{
                move_uploaded_file($_FILES["imgAnnonce"]["tmp_name"], "upload/" . $_FILES["imgAnnonce"]["name"]);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
       // echo "Error: " . $imgAnnonce["error"];
    }
//}
 
   $ID =  $_SESSION['id'];
    	  
$stmt = $db->prepare("INSERT INTO annonce_ (annoncePic,annonceContent,dateCreation,prix,nombreDeVues,durreeValidite,idUser) VALUES (:img,:annonceContenu,:dateC,:prixA,:nbreVues,:dureeValid,:idU)");
$stmt->bindValue(':annonceContenu', $content);
$stmt->bindValue(':dateC', $date_creation);
$stmt->bindValue(':prixA', $prix);
$stmt->bindValue(':nbreVues', $nbre_vu);
$stmt->bindValue(':dureeValid', $duree);
$stmt->bindValue(':img', $url);
$stmt->bindValue(':idU', $ID);
try{
    $stmt->execute();	 
     echo "votre annonce a ete cree!";
}catch (Exception $e) {
        echo $e->getMessage();
      }

	
 



?>