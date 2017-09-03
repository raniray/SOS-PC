<?php
require('connexion.php');
$db = data_base_connect();
//Récup?ration des données du form 
$model = !empty($_POST['model']) ? trim($_POST['model']) : null;
$date_creation = date("l jS \of F Y h:i:s A");
$prix =  !empty($_POST['prix']) ? trim($_POST['prix']) : null;
$processeur =  !empty($_POST['processeur']) ? trim($_POST['processeur']) : null;
$RAM =  !empty($_POST['RAM']) ? trim($_POST['RAM']) : null;
$sysE = !empty($_POST['sysE']) ? trim($_POST['sysE']) : null;
$ancienn =  !empty($_POST['ancienn']) ? trim($_POST['ancienn']) : null;
$contenuAnnonce = !empty($_POST['contenuAnnonce']) ? trim($_POST['contenuAnnonce']) : null;
$imgAnnonce = !empty($_FILES['imgAnnonce']['name']) ? trim($_FILES['imgAnnonce']['name']) : null; 
//$imgAnnonce =  !empty($_POST['imgAnnonce']) ? trim($_POST['imgAnnonce']) : null;
echo $imgAnnonce;
$nbre_vu = 0;
$dureeValidite = 2;
$t="";
$url = "";
	$content ="Modèle:".$model." "."Processeur:"." ".$processeur." "."RAM:".$RAM." "."Système d'exploitation:".$sysE." "."Anciennete:".$ancienn." "."Detail:".$contenuAnnonce;

  $target_dir = "‪C:/wamp/www/SOS-PC-master1/imges/";  //Choisir là où l'image sera placée
 
	  
$target_file=$imgAnnonce;
$target_file = $target_dir . basename($_FILES["imgAnnonce"]["name"]);  //Récupérer le chemin de l'image téléchargée
echo $target_file;
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
}
 
    
/*$stmt = $db->prepare("INSERT INTO annonce_ (annoncePic,annonceContent,dateCreation,prix,nombreDeVues,durreeValidite) VALUES (:img,:annonceContenu,:dateC,:prixA,:nbreVues,:dureeValid)");
$stmt->bindValue(':annonceContenu', $content);
$stmt->bindValue(':dateC', $date_creation);
$stmt->bindValue(':prixA', $prix);
$stmt->bindValue(':nbreVues', $nbre_vu);
$stmt->bindValue(':dureeValid', $dureeValidite);
$stmt->bindValue(':img', $url);
try{
    $stmt->execute();	 
    // echo "votre annonce a ete cree!";
}catch (Exception $e) {
        echo $e->getMessage();
      }*/

	
 



?>