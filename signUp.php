<!DOCTYPE html>
<html>
	<?php 
    session_start(); 
    if(isset($_SESSION['login'])==true){
        if(strcmp($_SESSION['Account_type'],"A")==0) {
            header("Location: accueilAdmine.php");
        }else{
            header("Location: home.php");
        }   
    }
    ?>
<head>
  <meta charset="UTF-8">
  <title>SignUP</title>
  
  
  		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    	<link  href="./css/signUp_style.css" rel="stylesheet" type="text/css" />


  
</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1 id="head">SOS-PC</h1>
		
		<form class="form" action="./php/signUp.php" method="post" id="form">
			<input type="text" pattern=".{2,}" maxlength="20" required id="nom" name="nom" placeholder="Nom (min 2 caractères)" title="Veuillez saisir votre nom" value="">
			<input type="text" pattern=".{2,}" maxlength="20" required id="prenom" name="prenom" placeholder="Prenom (min 2 caractères)"  title="Veuillez saisir votre prénom">
			<input type="email" maxlength="100" required id="mail" name="mail" placeholder="Email"  title="Veuillez saisir une adresse email valide">
			<input type="password"  pattern=".{6,}"  maxlength="20" required id="pwd" name="pwd"placeholder="Mot de passe (min 6 caractères)"  title="Veuillez saisir votre mot de passe de taille minimale 6">
			<input type="password" maxlength="20" required id="pwd2" name="pwd2" placeholder="Confirmer votre mot de passe"  title="Veuillez confirmer votre mot de passe">
			<input type="checkbox" required id="ch" name="ch" checked="checked"  title="Veuillez accepter la charte de conditions de SOS-PC"> j'accepte <a href="#">les conditions</a> de SOS-PC <br>
			<button  type="submit" id="login-button">S'inscrire</button>
		</br>
	</br>
	            <strong>vous avez un compte ? ...<a href="login.php"> connectez-vous</a></strong>
</br>
			<div class="alert alert-danger" style="display:none;" id="err">
 		    <strong>Attention!</strong> Indicates a dangerous or potentially negative action.
			</div>
		</form>	
	</div>
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<script src="trunk/dev/validation.js"></script>
   <script TYPE="text/javascript" src="./js/signUp_index.js"></script>

</body>
</html>
