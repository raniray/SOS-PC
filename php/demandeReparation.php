<?php
require('connexion.php');
$db = data_base_connect();
session_start();

$target_dir = "../images/reparations/";
$target_file = $target_dir.basename($_FILES["imgInp"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imgInp"]["tmp_name"]);
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
if ($_FILES["imgInp"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imgInp"]["tmp_name"], $target_file)) {
        echo "The file ".basename( $_FILES["imgInp"]["name"])." has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

/*
$content ="Modèle:".$model." "."Processeur:"." ".$processeur." "."RAM:".$RAM." "."Système d'exploitation:".$sysE." "."Anciennete:".$ancienn." "."Detail:".$contenuAnnonce;
$target_dir = "‪C:/wamp/www/SOS-PC-master1/imges/";  //Choisir là où l'image sera placée
 
$target_file=$imgAnnonce;
$target_file = $target_dir . basename($_FILES["imgAnnonce"]["name"]);  //Récupérer le chemin de l'image téléchargée

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);  //Récupérer l'extension de l'image

// Vérifier si le fichier existe déjà
if (file_exists($target_file)) {
    echo "Cette image existe déjà!";
    $uploadOk = 0;
}
else{
	$t=$url =basename( $_FILES["imgAnnonce"]["name"]);
	
}
// Controller la taille du fichier téléchargé
if ($_FILES["imgAnnonce"]["size"] > 500000) {
    echo "Veuillez selectionner une image d'une taille plus petite.";
    $uploadOk = 0;
}
// limité les formats permises
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Uniquement les formats JPG, JPEG, PNG & GIF files qui sont permises.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Oups! Votre image n'a pas pu être  téléchargée!.";
} else {
	
    if (move_uploaded_file($_FILES["imgAnnonce"]["tmp_name"], $target_file)) {
		$url =basename( $_FILES["imgAnnonce"]["name"]);
		$base = 'http://localhost/SOS-PC-master1/home.php';
$data = array(
    'url' => $url,
);

$info = $base . '?' . http_build_query($data);
header("Location: $info");
       // echo "The file ". basename( $_FILES["imgAnnonce"]["name"]). " has been uploaded.";
		//"<img  id='logo' src='../../img/>"
		
		echo $url;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}*/
//Récup?ration des données du form 
$model = !empty($_POST['model']) ? trim($_POST['model']) : null;
$date_creation = date("Y-m-d");
$title =  !empty($_POST['title']) ? trim($_POST['title']) : null;
$type =  !empty($_POST['type']) ? trim($_POST['type']) : null;
$processeur =  !empty($_POST['processeur']) ? trim($_POST['processeur']) : null;
$RAM =  !empty($_POST['ram']) ? trim($_POST['ram']) : null;
$sysE = !empty($_POST['sys']) ? trim($_POST['sys']) : null;
$ancienn =  !empty($_POST['anne']) ? trim($_POST['anne']) : null;
$contenuAnnonce = !empty($_POST['desc']) ? trim($_POST['desc']) : null;
$imgAnnonce = !empty($_FILES['imgInp']['name']) ? trim($_FILES['imgInp']['name']) : null; 

$nbre_vu = 0;
$dureeValidite = 2;
$t="";
$url = "";
$stmt = $db->prepare("INSERT INTO demande_ (idClient,modelePc,processeur,ramPc,osPc,ancientePc,
                                            intitulePanne,typePanne,descriptionPanne,pannePic,
                                            idReparateur,dateCreation,etatDemande,tauxAvancement,
                                            prixAnnonce,discussionId)
                                     VALUES (:idClient,:modelePc,:processeur,:ramPc,:osPc,:acientePc,
                                            :intitulePanne,:typePanne,:descriptionPanne,:pannePic,
                                            null,:dateCreation,'Pas encore',0,
                                            0,null)");
$stmt->bindValue(':idClient', !empty($_SESSION['id']) ? trim($_SESSION['id']) : null);
$stmt->bindValue(':modelePc', $model);
$stmt->bindValue(':processeur', $processeur);
$stmt->bindValue(':ramPc', $RAM);
$stmt->bindValue(':osPc', $sysE);
$stmt->bindValue(':acientePc', $ancienn);
$stmt->bindValue(':intitulePanne', $title);
$stmt->bindValue(':typePanne', $type);
$stmt->bindValue(':descriptionPanne', $contenuAnnonce);
$stmt->bindValue(':pannePic', $imgAnnonce);
$stmt->bindValue(':dateCreation', $date_creation);
try{
    $stmt->execute();	 
    echo "votre demande a ete cree!";
}catch (Exception $e) {
        echo $e->getMessage();
      }
header("Location: ../Reparations.php");
?>