<?php
session_start();
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Nouvelle annonce</title>
    <meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
    

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css'>

        
        <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Plugins -->
    

    <!-- Worthy core CSS file -->
    <link href="css/style1.css" rel="stylesheet">

    <!-- Custom css --> 
    
    
    
    
  </head>

 <body class="default-bg2">

    <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop"><i class="icon-up-open-big"></i></div>
  <div class="banner-image"></div>
  <div class="banner-caption2">
  
            <!-- header start -->
    <!-- ================ --> 
    <header class="header fixed clearfix navbar navbar-fixed-top">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <!-- header-left start -->
            <!-- ================ -->
            <div class="header-left clearfix">
              <!-- logo -->
              <div class="logo smooth-scroll">
                <a href="home.php#banner"><img id="logo" src="img/logo.png" alt="Worthy"></a>
              </div>
              <!-- name-and-slogan -->
              <div class="site-name-and-slogan smooth-scroll">
                <div class="site-name"><a href="home.php#banner">SOS-PC</a></div>
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
					<?php if($_SESSION['Account_type']=='C'){ ?>
                    <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="home.php#banner">Accueil</a></li>
            
                         <li><a href="home.php#portfolio">Vente</a></li>
                         <?php
                           
                            if(isset($_SESSION['login'])==true) { 
                             ?> 
                        <li class="dropdown" >
                          <a class="dropbtn" href="#">Réparation-PC</a>
                    
                          <div class="dropdown-content">
                          <a href="history.php">Historique de réparation</a>
                           <a href="demandeRep.php">Nouvelle réparation</a>
                            <a href="index2.php">Live help</a>
                          </div>
                        </li>
                         <?php };
                         ?>
                                                <li><a href="home.php#about">A propos</a></li>
                        <li><a href="home.php#contact">Contact</a></li>
                        <li class="dropdown"><li class="dropdown"> <a href="#" class="dropbtn">
          <span class="glyphicon glyphicon-user"></span> 
                        Mon compte 
                    </a>
                    <?php
                   
            if(isset($_SESSION['login'])==true) { 
                             ?>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div>
                                    <div class="col-lg-5">
                                        <p class="text-center">
                                          
                                          <img class="round" src="<?php echo $_SESSION['picture'];?>">
   
                                            
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="text-left"><strong><?php echo $_SESSION['login_user']; ?></strong></p>
                                        <p class="text-left small"><?php echo $_SESSION['mail']; ?></p>
                                        
                                    </div>
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
                                             <a href="profile.php" class="btn button btn-block">Mon profil</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <?php }else{
                         ?>
                    <ul class="dropdown-menu">
                     
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                             <a href="signUp.html" class="btn button btn-block">S'inscrire</a>
                                             <a href="login.html" class="btn button btn-block">Se connecter</a>
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
					<?php }?>
					
					<?php if($_SESSION['Account_type']=='A') { ?>
					     										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li class="active"><a href="accueilAdmin.php">Accueil</a></li>
						
												 <li><a href="#portfolio">Vente</a></li>
												<li class="active" >
													<a  href="dashboard.php">Administration</a>					
  												
												  
												</li>
                                                <li><a href="#about">A propos</a></li>
												<li><a href="#contact">Contact</a></li>
												<li class="dropdown"><li class="dropdown"> <a href="#" class="dropbtn">
          <span class="glyphicon glyphicon-user"></span> 
                        Mon compte 
                    </a>
                    <?php
					if(isset($_SESSION['login'])==true) { 
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
                                        <p class="text-left"><strong><?php echo $_SESSION['login_user']; ?></strong></p>
                                        <p class="text-left small"><?php echo $_SESSION['mail']; ?></p>
                                        
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
			  <?php };?>
			  
			  <?php if($_SESSION['Account_type']=='R') { ?>
			  										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li class="active"><a href="accueilRep.php">Accueil</a></li>
						
												 <li><a href="accueilRep.php#portfolio">Vente</a></li>
												<li class="dropdown" >
													<a class="dropbtn" href="#">Réparation PC</a>
  									
  												<div class="dropdown-content">
    											<a href="Reparations.php">Réparations</a>
   												 <a href="ficheReparation.php">Fiche réparation</a>
												    <a href="liveHelpRep.php">Live help</a>
												  </div>
												</li>
                                                <li><a href="accueilRep.php#about">A propos</a></li>
												<li><a href="accueilRep.php#contact">Contact</a></li>
												<li class="dropdown"><li class="dropdown"> <a href="#" class="dropbtn">
          <span class="glyphicon glyphicon-user"></span> 
                        Mon compte 
                    </a>

                      <?php
                 
				    if($_SESSION['login']==true) { 
   											     ?>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div>
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
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                             <a href="./php/logout.php" class="btn button btn-block">Se déconnecter</a>
                                             <a href="profile.php" class="btn button btn-block">Mon profil</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <?php };
												 ?>            </li>
            </li>
						
											</ul>
										</div>
			  <?php } ?>
              <!-- main-navigation end -->
                  
            </div>
            <!-- header-right end -->

          </div>
        </div>
      </div>
    </header>
    <!-- header end -->
  
<div class="demande">

<div class="container">
<form class="form-horizontal" method="post" action="php/creer_avis.php">
  <div class="row form-group">
        <div class="col-xs-22">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
               
                <li ><a href="#step-2">
                    <h4 class="list-group-item-heading">Avis client</h4>
                    <p class="list-group-item-text">Que pensez-vous de SOS-PC?</p>
                </a></li>
                
                
             
                
            </ul>
        </div>
  </div>


    <div class="row setup-content" >
        <div class="col-xs-16">
            
                      <div class="row">
                       <div class="col-lg-16">
                       <div class="container">
                        <div class="row clearfix">
                         <div class="col-md-16 column">
                            <div class="col-md-16 well text-center">
                <h1 class="text-center"> Avis</h1>
                <h4 class="text-center"> Créer un avis</h4>
   
    </div> 

    <!-- /container -->
    


                
              
                
            </div>
            </div>
          </div>
    
          </div>
    </div> 

    <!-- /container -->
    


                
               
            </div>
        </div>
    </div>



<textarea class="form-control" style="margin-left:7%;max-width:1170px;" name="contenuAvis" type="textarea" id="contenuAvis" placeholder="Introduisez votre avis à propos de SOS-PC" maxlength="120" rows="12"></textarea>
                            
                               <div class="container">
                             

                             </br> 

					   <input class="btn btn-primary btn-md" type="submit" name="submitBtn" style="margin-left:45%;" value="Créer avis" ></input>  

                                         </form>
  

    </div>
</div>
</div>
              
            </div>
        </div>
    </div>
    




    
</div>








<!--
  <div>
    <p class="text-center">Copyright © 2017 <a target="_blank" href="#">SOS-PC</a>.</p>
  </div>-->
</div>
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
  
 <!-- <script type="text/javascript">
            
           function creerAnnonce(){
              // les paramaitre de la formulaire 
                model = $('#model').val();
                prix = $('#prix').val();
				processeur = $('#processeur').val();
				RAM = $('#RAM').val();
				sysE = $('#sysE').val();
				ancienn = $('#ancienn').val(),
				contenuAnnonce = $('#contenuAnnonce').val();
				duree = $('#duree').val();
				
                
                // envoie avec un post les paramaitre + le nom de fichier 
                $.post("php/newAnnonce.php",{model,prix,processeur,RAM,sysE,ancienn,contenuAnnonce,duree},(data)=>{
                  alert(data);// les actions faire aprés le resulta (data contient ce qu'on a ecrit dans le fichier ajouterReparateur par un echo)
                })
            }
			
			
     </script>-->
</html>