<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Demande</title>
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
                    <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="home.php#banner">Accueil</a></li>
            
                         <li><a href="home.php#portfolio">Vente</a></li>
                         <?php
                            session_start();
                            if($_SESSION['login']==true) { 
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
                    session_start();
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

  <div class="container">
   <div class="row">
   <div class="col-md-9">


      <div class="row">
        <div class="toppad" >
             <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Titre de la panne</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                
              
                <div class=" col-md-9 col-lg-9 "> 
                  <p>Ici on met la description de la panne </p> 
                  
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                       
                     <div class="row">
                      <div class="col-md-6">  
                      <a href="#" class="btn button btn-block">Modifier ma demande </a>
                    </div>

                      <div class="col-md-6">
                      <a href="#" class="btn btn-danger btn-block">Supprimer cette demande</a>
                      </div>
                    </div>
                  </div>

                      

                    </div>
            
          </div>
        </div>
      </div>

<div class="col-md-3">

      <div class="row">
        <div class="col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1 toppad" >
             <div class="panel panel-info glossy">
            <div class="panel-body">
              <div class="row">
              
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Crée par</td>
                        <td>NOM PRENOM</td>
                      </tr>
                      <tr>
                        <td>Date de création:</td>
                        <td>DD/MM/YYYY</td>
                      </tr>
                      <tr>
                        <td>Réparateur:</td>
                        <td>NOM Prénom</td>
                      </tr>
                  
                             <tr>
                        <td>Etat de la demande:</td>
                        <td>En cours de traitement</td>
                      </tr>
                        <tr>
                        <td>Avancement</td>
                        <td>60%</td>
                      </tr>
                      
                    </tbody>
                  </table>
                
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                  <div class="row">
                    <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-md-2">
                      <button type="button" class="btn-circle"><i class="glyphicon glyphicon-list"></i></button>
                    </div>
                    <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-md-2">
                      <button type="button" class="btn-circle-danger"><i class="glyphicon glyphicon-remove"></i></button>
                    </div>
                    <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-md-2">
                      <button type="button" class="btn-circle"><i class="glyphicon glyphicon-heart"></i></button>
                    </div>

                  </div>
                    
                  </div>

                      

                    </div>
            
          </div>
        </div>
      </div>


   </div>

   </div>


 </div>


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
  
</html>

