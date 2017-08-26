<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Gestion Réparateurs</title>
    <meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css'>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/style3.css" rel="stylesheet">

<script>
// Get the modal
var modal = document.getElementById('modelReparateur');

// Get the button that opens the modal
var btn = document.getElementById("myBtnRep");
 

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-infos")[0];

// When the user clicks the button, open the modal 
 function afficher() {
var modal = document.getElementById('modelReparateur');

    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function fermer(){
    var modal = document.getElementById('modelReparateur');
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
var modal = document.getElementById('modelReparateur');
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function annuler(){
  var modal = document.getElementById('modelReparateur');
    modal.style.display = "none";
}
</script>

  </head>

 <body class="default-bg3">

  <div class="banner-caption2">


      <!-- header start -->
    <!-- ================ --> 
    <header class="header2 fixed clearfix navbar navbar-fixed-top">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <!-- header-left start -->
            <!-- ================ -->
            <div class="header-left clearfix">
              <!-- logo -->
              <div class="logo smooth-scroll">
                <a href="#banner"><img id="logo" src="img/logo.png" alt="Worthy"></a>
              </div>
              <!-- name-and-slogan -->
              <div class="site-name-and-slogan smooth-scroll">
                <div class="site-name"><a href="#banner">SOS-PC</a></div>
                <div class="site-slogan">Votre PC en bonnes mains...</div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="header-right clearfix">
              <div class="main-navigation animated">
                <nav class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                    <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="accueilAdmin.php">Accueil</a></li>
            
                         <li><a href="accueilAdmin.php#portfolio">Vente</a></li>
                        <li class="active" >
                          <a  href="dashboard.php">Administration</a>
                    
                          
                          
                        </li>
                                                <li><a href="accueilAdmin.php#about">A propos</a></li>
                        <li><a href="accueilAdmin.php#contact">Contact</a></li>
                        <li class="dropdown"><li class="dropdown"> <a href="#" class="dropbtn">
          <span class="glyphicon glyphicon-user"></span> 
                        Mon compte 
                    </a>
                    <?php
          session_start();
          if($_SESSION['login']==true) { 
            ?>  
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div>
                                    <div class="col-lg-5">
                                         <div class="col-lg-5">
                                        <p class="text-center">
                                          
                                          <img class="round" src="<?php echo $_SESSION['picture'];?>">
   
                                            
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="text-left"><strong><?php  session_start();echo $_SESSION['login_user']; ?></strong></p>
                                        <p class="text-left small"><?php session_start();echo $_SESSION['mail']; ?></p>
                                        
                                    </div>

                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                             <a href="./php/logout.php" class="btn button btn-block">Se déconnecter</a>
                                             <a href="profileAdmin.php" class="btn button btn-block">Mon profil</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <?php };
                         ?>
                </li>
            </li>
            
                      </ul>
                    </div>

                  </div>
                </nav>
                <!-- navbar end -->

              </div>
              <!-- main-navigation end -->

            </div>
            <!-- header-right end -->

          </div>
        </div>
      </div>
    </header>
    <!-- header end -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<div class="container">
  <div class="row">
    
        
        <div class="col-md-12">
        <h3 class="text-center">Voici tous les réparateurs</h3>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   <th>Réparateur</th>
                    <th>Date d'adhérence</th>
                     <th>Evaluer réparateur</th>
                     <th>Modifier réparateur</th>
                      <th>Supprimer réparateur</th>
                       <th>Ajouter réparateur</th>
                   </thead>
    <tbody>
    
    <tr>
    
    <td>NOM PRENOM </td>
    <td>DD/MM/YYYY</td>
    <td style="position:relative;left:-3.4%;">
	<fieldset class="rating">
    <input type="radio" id="star5" name="rating1" value="5" /><label for="star5" title="Excellent">5 stars</label>
    <input type="radio" id="star4" name="rating1" value="4" /><label for="star4" title="Très bien">4 stars</label>
    <input type="radio" id="star3" name="rating1" value="3" /><label for="star3" title="Bien">3 stars</label>
    <input type="radio" id="star2" name="rating1" value="2" /><label for="star2" title="Un peu mauvais">2 stars</label>
    <input type="radio" id="star1" name="rating1" value="1" /><label for="star1" title="Mauvais">1 star</label>
</fieldset>
	</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Modifier"><button onclick="afficher();" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
        <div id="modelReparateur" class="model-R">
		<span id="span-wrapper"><span class="close-infos" onclick="fermer();">&times;</span></span>
		<div class="infos-reparateur-content">
    
    <div class="formR" id="profileRep">
	<ul id="listeprofil">
	  <li> <div class="text-center img-container">
          <img src="img/avatar.jpg" id ="photo-pro"class="avatar img-circle" alt="avatar" style=" margin-top:40px;height:100px;width:100px;">
		  <!--<div class="cercle" ><span id="telcharg"><p>Télécharger</p><p> photo</p></span></div>-->
         
          
          <div class="cercle" ><input type="file" class="form-control" id="cercle" style="position:absolute;top:10px;left:-27%;opacity:0;height:100px;width:100px;z-index:2;"><span id="telcharg"><i class="fa fa-upload"></i></span></div>
	
        </div></li>
	   </ul>
	  <br>
		<div class="meh-info" > 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nom:</td>
                        <td><input id="nom" name="nom" type="text" class="form-control3 input-md" required=""></td>
                      </tr>
                      <tr>
                        <td>Prénom:</td>
                        <td><input id="prenom" name="prenom" type="text" class="form-control3 input-md" required=""></td>
                      </tr>
                      <tr>
                        <td>Date de naissance:</td>
                        <td><div class="input-group date" data-provide="datepicker">
                        <input type="text" class="form-control3">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Email:</td>
                        <td><input id="mail" name="mail" type="text" class="form-control3 input-md" required=""></td>
                      </tr>
                        <tr>
                        <td>Numéro de téléphone:</td>
                        <td><input id="prenom" name="prenom" type="text" class="form-control3 input-md" required=""></td>
                      </tr>
                      <tr>
                        <td>Profession:</td>
                        <td><input id="prenom" name="profession" type="text" class="form-control3 input-md" required=""></td>
                      </tr>
					  <tr>
                        <td>Classement:</td>
                        <td><input id="prenom" name="classement" type="text" class="form-control3 input-md" required=""></td>
                      </tr>
					   <tr>
                        <td colspan="2">Biographie:</td>
                      </tr>
                      <tr>
                        <td colspan="2"><textarea class="form-control" type="textarea" id="desc" placeholder="biographie" maxlength="140" rows="8"></textarea></td>
                      </tr>
                    </tbody>
                  </table>
                
                </div>
	
	       
                <button class="btn button btn-block" style="bottom:15%;margin-left:-0.13%;">Enregistrer</button>
				  <button type="button" onclick="annuler();" class="btn btn-danger btn-block" style="bottom:10%;" data-dismiss="modal">Annuler</button>
            
	</div>
  </div>
  </div>
	</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Supprimer"><button class="btn btn-danger btn-xs" data-title="Edit" data-toggle="modal" data-target="#supprimer" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
    <td rowspan="6" style="width:20%;"><div style="text-align:center;position:relative;margin-top:30%;"><p class="nouveau-rep">Nouveau réparateur?</p><p class="nouveau-rep">Ajoutez-le!</p>
	<button  class="btn button btn-xs" onclick="afficher();" title="ajouter"><span class="glyphicon glyphicon-plus" ></span></button>
       
	</div>
	</td>
    </tr>
    
 <tr>
    
    <td>NOM PRENOM </td>
    <td>DD/MM/YYYY</td>
    <td style="position:relative;left:-3.4%;"><fieldset class="rating">
    <input type="radio" id="star52" name="rating2" value="5" /><label for="star52" title="Excellent">5 stars</label>
    <input type="radio" id="star42" name="rating2" value="4" /><label for="star42" title="Très bien">4 stars</label>
    <input type="radio" id="star32" name="rating2" value="3" /><label for="star32" title="Bien">3 stars</label>
    <input type="radio" id="star22" name="rating2" value="2" /><label for="star22" title="Un peu mauvais">2 stars</label>
    <input type="radio" id="star12" name="rating2" value="1" /><label for="star12" title="Mauvais">1 star</label>
</fieldset></td>
    <td>
	<p data-placement="top" data-toggle="tooltip" title="Modifier"><button onclick="afficher();" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
        <div id="modelReparateur" class="model-R">
		<span id="span-wrapper"><span class="close-infos" onclick="fermer();">&times;</span></span>
		<div class="infos-reparateur-content">
    
    <div class="formR">
	<ul id="listeprofil">
	  <li> <div class="text-center img-container">
          <img src="img/avatar.jpg" id ="photo-pro"class="avatar img-circle" alt="avatar" style=" margin-top:40px;height:100px;width:100px;">
		  <!--<div class="cercle" ><span id="telcharg"><p>Télécharger</p><p> photo</p></span></div>-->
         
          
          <div class="cercle" ><input type="file" class="form-control" id="cercle" style="position:absolute;top:10px;left:-27%;opacity:0;height:100px;width:100px;z-index:2;"><span id="telcharg"><i class="fa fa-upload"></i></span></div>
	
        </div></li>
	   </ul>
	  <br>
	
	
	       
                <button class="btn button btn-block" style="bottom:15%;margin-left:-0.13%;">Enregistrer</button>
				  <button class="btn btn-danger btn-block" style="bottom:10%;">Annuler</button>
            
	</div>
  </div>
  </div>
	</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Supprimer"><button class="btn btn-danger btn-xs" data-title="Edit" data-toggle="modal" data-target="#supprimer" ><span class="glyphicon glyphicon-remove"></span></button></p>
	 <div class="modal fade" id="supprimer" tabindex="-1" role="dialog" aria-labelledby="Suppresion" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Supprimer ce réparateur </h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Etes vous sur de vouloir supprimer ce réparateur?  </div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success yesButton" ><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;OUI</button>
        <button type="button" class="btn btn-default noButton" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;NON</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
	</td>

    </tr>
    
  <tr>
    
    <td>NOM PRENOM </td>
    <td>DD/MM/YYYY</td>
    <td style="position:relative;left:-3.4%;"><fieldset class="rating">
    <input type="radio" id="star53" name="rating3" value="5" /><label for="star53" title="Excellent">5 stars</label>
    <input type="radio" id="star43" name="rating3" value="4" /><label for="star43" title="Très bien">4 stars</label>
    <input type="radio" id="star33" name="rating3" value="3" /><label for="star33" title="Bien">3 stars</label>
    <input type="radio" id="star23" name="rating3" value="2" /><label for="star23" title="Un peu mauvais">2 stars</label>
    <input type="radio" id="star13" name="rating3" value="1" /><label for="star13" title="Mauvais">1 star</label>
</fieldset></td>
    <td>
	<p data-placement="top" data-toggle="tooltip" title="Modifier"><button onclick="afficher();" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
        <div id="modelReparateur" class="model-R">
		<span id="span-wrapper"><span class="close-infos" onclick="fermer();">&times;</span></span>
		<div class="infos-reparateur-content">
    
    <div class="formR">
	<ul id="listeprofil">
	  <li> <div class="text-center img-container">
          <img src="img/avatar.jpg" id ="photo-pro"class="avatar img-circle" alt="avatar" style=" margin-top:40px;height:100px;width:100px;">
		  <!--<div class="cercle" ><span id="telcharg"><p>Télécharger</p><p> photo</p></span></div>-->
         
          
          <div class="cercle" ><input type="file" class="form-control" id="cercle" style="position:absolute;top:10px;left:-27%;opacity:0;height:100px;width:100px;z-index:2;"><span id="telcharg"><i class="fa fa-upload"></i></span></div>
	
        </div></li>
	   </ul>
	  <br>
		
	       
                <button class="btn button btn-block" style="bottom:15%;margin-left:-0.13%;">Enregistrer</button>
				  <button class="btn btn-danger btn-block" style="bottom:10%;">Annuler</button>
            
	</div>
  </div>
  </div>
	</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Supprimer"><button class="btn btn-danger btn-xs" data-title="Edit" data-toggle="modal" data-target="#supprimer" ><span class="glyphicon glyphicon-remove"></span></button></p>
	 <div class="modal fade" id="supprimer" tabindex="-1" role="dialog" aria-labelledby="Suppresion" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Supprimer ce réparateur </h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Etes vous sur de vouloir supprimer ce réparateur?  </div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success yesButton" ><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;OUI</button>
        <button type="button" class="btn btn-default noButton" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;NON</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
	</td>
   
    </tr>  
 <tr>
    
    <td>NOM PRENOM </td>
    <td>DD/MM/YYYY</td>
    <td style="position:relative;left:-3.4%;"><fieldset class="rating">
    <input type="radio" id="star54" name="rating4" value="5" /><label for="star54" title="Excellent">5 stars</label>
    <input type="radio" id="star44" name="rating4" value="4" /><label for="star44" title="Très bien">4 stars</label>
    <input type="radio" id="star34" name="rating4" value="3" /><label for="star34" title="Bien">3 stars</label>
    <input type="radio" id="star24" name="rating4" value="2" /><label for="star24" title="Un peu mauvais">2 stars</label>
    <input type="radio" id="star14" name="rating4" value="1" /><label for="star14" title="Mauvais">1 star</label>
</fieldset></td>
    <td>
	<p data-placement="top" data-toggle="tooltip" title="Modifier"><button onclick="afficher();" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
        <div id="modelReparateur" class="model-R">
		<span id="span-wrapper"><span class="close-infos" onclick="fermer();">&times;</span></span>
		<div class="infos-reparateur-content">
    
    <div class="formR">
	<ul id="listeprofil">
	  <li> <div class="text-center img-container">
          <img src="img/avatar.jpg" id ="photo-pro"class="avatar img-circle" alt="avatar" style=" margin-top:40px;height:100px;width:100px;">
		  <!--<div class="cercle" ><span id="telcharg"><p>Télécharger</p><p> photo</p></span></div>-->
         
          
          <div class="cercle" ><input type="file" class="form-control" id="cercle" style="position:absolute;top:10px;left:-27%;opacity:0;height:100px;width:100px;z-index:2;"><span id="telcharg"><i class="fa fa-upload"></i></span></div>
	
        </div></li>
	   </ul>
	  <br>
		
	
	       
                <button class="btn button btn-block" style="bottom:15%;margin-left:-0.13%;">Enregistrer</button>
				  <button class="btn btn-danger btn-block" style="bottom:10%;">Annuler</button>
            
	</div>
  </div>
  </div>
	</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Supprimer"><button class="btn btn-danger btn-xs" data-title="Suppression" data-toggle="modal" data-target="#supprimer" ><span class="glyphicon glyphicon-remove"></span></button></p>
	    <div class="modal fade" id="supprimer" tabindex="-1" role="dialog" aria-labelledby="Suppresion" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Supprimer ce réparateur </h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Etes vous sur de vouloir supprimer ce réparateur?  </div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success yesButton" ><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;OUI</button>
        <button type="button" class="btn btn-default noButton" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;NON</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>

	</td>
   
    </tr>
   
    
 
<tr>
    
    <td>NOM PRENOM </td>
    <td>DD/MM/YYYY</td>
    <td style="position:relative;left:-3.4%;"><fieldset class="rating">
    <input type="radio" id="star55" name="rating5" value="5" /><label for="star55" title="Excellent">5 stars</label>
    <input type="radio" id="star45" name="rating5" value="4" /><label for="star45" title="Très bien">4 stars</label>
    <input type="radio" id="star35" name="rating5" value="3" /><label for="star35" title="Bien">3 stars</label>
    <input type="radio" id="star25" name="rating5" value="2" /><label for="star25" title="Un peu mauvais">2 stars</label>
    <input type="radio" id="star15" name="rating5" value="1" /><label for="star15" title="Mauvais">1 star</label>
</fieldset></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Modifier"><button onclick="afficher();" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
        <div id="modelReparateur" class="model-R">
		<span id="span-wrapper"><span class="close-infos" onclick="fermer();">&times;</span></span>
		<div class="infos-reparateur-content">
    
    <div class="formR">
	<ul id="listeprofil">
	  <li> <div class="text-center img-container">
          <img src="img/avatar.jpg" id ="photo-pro"class="avatar img-circle" alt="avatar" style=" margin-top:40px;height:100px;width:100px;">
		  <!--<div class="cercle" ><span id="telcharg"><p>Télécharger</p><p> photo</p></span></div>-->
         
          
          <div class="cercle" ><input type="file" class="form-control" id="cercle" style="position:absolute;top:10px;left:-27%;opacity:0;height:100px;width:100px;z-index:2;"><span id="telcharg"><i class="fa fa-upload"></i></span></div>
	
        </div></li>
	   </ul>
	  <br>
		
	       
                <button class="btn button btn-block" style="bottom:15%;margin-left:-0.13%;">Enregistrer</button>
				  <button class="btn btn-danger btn-block" style="bottom:10%;">Annuler</button>
            
	</div>
  </div>
  </div>
	</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Supprimer"><button class="btn btn-danger btn-xs" data-title="Edit" data-toggle="modal" data-target="#supprimer" ><span class="glyphicon glyphicon-remove"></span></button></p>
	 <div class="modal fade" id="supprimer" tabindex="-1" role="dialog" aria-labelledby="Suppresion" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Supprimer cet réparateur </h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Etes vous sur de vouloir supprimer ce réparateur?  </div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success yesButton" ><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;OUI</button>
        <button type="button" class="btn btn-default noButton" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;NON</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
	</td>
   
    </tr>
  
  <tr>
    
    <td>NOM PRENOM </td>
    <td>DD/MM/YYYY</td>
    <td style="position:relative;left:-3.4%;"><fieldset class="rating">
    <input type="radio" id="star56" name="rating6" value="5" /><label for="star56" title="Excellent">5 stars</label>
    <input type="radio" id="star46" name="rating6" value="4" /><label for="star46" title="Très bien">4 stars</label>
    <input type="radio" id="star36" name="rating6" value="3" /><label for="star36" title="Bien">3 stars</label>
    <input type="radio" id="star26" name="rating6" value="2" /><label for="star26" title="Un peu mauvais">2 stars</label>
    <input type="radio" id="star16" name="rating6" value="1" /><label for="star16" title="Mauvais">1 star</label>
</fieldset></td>
    <td>
	<p data-placement="top" data-toggle="tooltip" title="Modifier"><button onclick="afficher();" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
        <div id="modelReparateur" class="model-R">
		<span id="span-wrapper"><span class="close-infos" onclick="fermer();">&times;</span></span>
		<div class="infos-reparateur-content">
    
    <div class="formR">
	<ul id="listeprofil">
	  <li> <div class="text-center img-container">
          <img src="img/avatar.jpg" id ="photo-pro"class="avatar img-circle" alt="avatar" style=" margin-top:40px;height:100px;width:100px;">
		  <!--<div class="cercle" ><span id="telcharg"><p>Télécharger</p><p> photo</p></span></div>-->
         
          
          <div class="cercle" ><input type="file" class="form-control" id="cercle" style="position:absolute;top:10px;left:-27%;opacity:0;height:100px;width:100px;z-index:2;"><span id="telcharg"><i class="fa fa-upload"></i></span></div>
	
        </div></li>
	   </ul>
	  <br>
		
	       
                <button class="btn button btn-block" style="bottom:15%;margin-left:-0.13%;">Enregistrer</button>
				  <button class="btn btn-danger btn-block" style="bottom:10%;" onclick="annuler();" >Annuler</button>
            
	</div>
  </div>
  </div>
	</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Supprimer"><button class="btn btn-danger btn-xs" data-title="Edit" data-toggle="modal" data-target="#supprimer" ><span class="glyphicon glyphicon-remove"></span></button></p>
	 <div class="modal fade" id="supprimer" tabindex="-1" role="dialog" aria-labelledby="Suppresion" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Supprimer ce réparateur </h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Etes vous sur de vouloir supprimer ce réparateur?  </div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success yesButton" ><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;OUI</button>
        <button type="button" class="btn btn-default noButton" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;NON</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
	</td>
   
    </tr>  
   
    
   
    
    </tbody>
        
</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="gestionReparateurs.html">2</a></li>
  <li><a href="gestionReparateurs.html">3</a></li>
  <li><a href="gestionReparateurs.html">4</a></li>
  <li><a href="gestionReparateurs.html">5</a></li>
  <li><a href="gestionReparateurs.html"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
                
            </div>
            
        </div>
  </div>
</div>


 
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Supprimer ce réparateur </h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Etes vous sur de vouloir supprimer cette demande  </div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success yesButton" ><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;OUI</button>
        <button type="button" class="btn btn-default noButton" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;NON</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>

</body>
  <!-- Jquery and Bootstap core js files -->
    <script type="text/javascript" src="plugins/jquery.min.js"></script>
	
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Modernizr javascript -->
    <script type="text/javascript" src="plugins/modernizr.js"></script>

    <!-- Isotope javascript -->
    <script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
    
    <!-- Backstretch javascript -->
    <script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

    <!-- Appear javascript -->
    <script type="text/javascript" src="plugins/jquery.appear.js"></script>

    <!-- Initialization of Plugins -->
    <script type="text/javascript" src="js/template.js"></script>

    <!-- Custom Scripts -->
    <script type="text/javascript" src="js/custom.js"></script>

     <script type="text/javascript" src="js/demande.js"></script>

     <script type="text/javascript" src="js/image.js"></script>

     <script src='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js'></script>
  
</html>

