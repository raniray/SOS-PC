<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Nouvelle demande</title>
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
    
    <header class="header2 fixed clearfix navbar navbar-fixed-top">
    
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
            if($_SESSION['login']==true) { 
                             ?>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div>
                                    <div class="col-lg-5">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
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
                                             <a href="#" class="btn button btn-block">Se déconnecter</a>
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
                                             <a href="login.html.html" class="btn button btn-block">Se connecter</a>
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
  
<div class="demande">

<div class="container">
  <div class="row form-group">
        <div class="col-xs-22">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                <li class="active"><a href="#step-1">
                    <h4 class="list-group-item-heading">Etape 1</h4>
                    <p class="list-group-item-text">Caractérestiques de votre PC</p>
                </a></li>
                <li class="disabled"><a href="#step-2">
                    <h4 class="list-group-item-heading">Etape 2</h4>
                    <p class="list-group-item-text">Type de panne </p>
                </a></li>
                <li class="disabled"><a href="#step-3">
                    <h4 class="list-group-item-heading">Etape 3</h4>
                    <p class="list-group-item-text">Description de la panne</p>
                </a></li>
                
                <li class="disabled"><a href="#step-4">
                    <h4 class="list-group-item-heading">Etape 4</h4>
                    <p class="list-group-item-text">Informations supplémentaires</p>
                </a></li>
                
            </ul>
        </div>
  </div>
    <div class="row setup-content" id="step-1">
        <div class="col-xs-16">
            <div class="well text-center">
              <center>
                <h1> ETAPE 1</h1>
                <form class="form-horizontal">

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Modèle PC:</label>  
  <div class="col-md-5">
  <input id="nome" name="nome" type="text" placeholder="Modèle PC ex : Dell latitude" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Processeur:</label>  
  <div class="col-md-5">
  <input id="nome" name="nome" type="text" placeholder="Processeur ex : i3" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="nome">RAM:</label>  
  <div class="col-md-5">
  <input id="nome" name="nome" type="text" placeholder="RAM ex 8 GB" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="sla">Système d'exploitation:</label>
  <div class="col-md-5">
    <select id="sla" name="sla" class="form-control">
      <option value="1">Windows XP</option>
      <option value="2">Windows 7</option>
      <option value="3">Windows 8</option>
      <option value="4">Windows 10</option>
      <option value="5">Windows Linux</option>
      <option value="6">Mac OS</option>
      <option value="7">Autres..</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="sla">Ancienneté</label>
  <div class="col-md-5">
    <select id="sla" name="sla" class="form-control">
      <option value="1">moins d'un ans</option>
      <option value="2">1 ans</option>
      <option value="3">Entre 2  et 5 ans </option>
      <option value="4">Plus de 5 ans </option>
     </select>
  </div>
</div>
                
</center>               
</form>
                
                
                <button id="activate-step-2" class="btn btn-primary btn-md">Activer Etape 2</button>
            </div>
        </div>
    </div>


    <div class="row setup-content" id="step-2">
        <div class="col-xs-16">
            <div class="col-md-16 well text-center">
                <h1 class="text-center"> Etape 2</h1>
 
               <div class="container">
 
                      <div class="row">
                       <div class="col-lg-16">
                       <div class="container">
                        <div class="row clearfix">
                         <div class="col-md-16 column">
                           <form class="form-horizontal">

                              <div class="form-group">
                               <label class="col-md-4 control-label" for="nome">intitulé de la panne:</label>  
                                <div class="col-md-5">
                                 <input id="nome" name="nome" type="text" placeholder="RAM ex 8 GB" class="form-control input-md" required="">
    
                               </div>
                              </div>


<!-- Select Basic -->
                                <div class="form-group">
                                  <label class="col-md-4 control-label" for="sla">Type de panne</label>
                                  <div class="col-md-5">
                                    <select id="sla" name="sla" class="form-control">
                                      <option value="1">Software</option>
                                      <option value="2">Hardware</option>
                                      <option value="3">Je ne sais pas...</option>
                                    </select>
                                  </div>
                                </div> 
                              </form>
            </div>
          </div>
    </div> 
    </div>
          </div>
    </div> 

    <!-- /container -->
    


                
                <button id="activate-step-3" class="btn btn-primary btn-md">Activer Etape 3</button>
            </div>
        </div>
    </div>




<div class="row setup-content" id="step-3">
        <div class="col-xs-16">
            <div class="col-md-16 well text-center">
                <h1 class="text-center"> Etape 3</h1>
                <h4 class="text-center"> Description de la panne</h4>

                              <textarea class="form-control" type="textarea" id="desc" placeholder="Decrire la panne" maxlength="140" rows="10"></textarea>
                            
                               <div class="container">

                             </br> 
    </div> 

    <!-- /container -->
    


                
                <button id="activate-step-4" class="btn btn-primary btn-md">Activer Etape 4</button>
                
            </div>
        </div>
    </div>




    
    <div class="row setup-content" id="step-4">
        <div class="col-xs-16">
            <div class="col-md-16 well text-center">
                <h1 class="text-center"> Etape 4</h1>
                <h4 class="text-center">Joindre une capture de la panne</h4>
                  <div class="container">
                    <div class="col-md-16">
                     <div class="form-group">
                    <form class="form-horizontal">

                        <div class="form-group">
                                  
                         
                                  <div class="col-md-8 control-label">
                                    <input id="prev" type="text" class="form-control2" readonly>
                                  </div>
                                  
                                  <div class="col-md-4"> 
                                  <span class="btn btn-primary btn-md btn-file">
                                  Parcourir… <input type="file" id="imgInp">
                                   </span>


                                 </div>


                       </div> 

                  </form>
    </div>
</div>
</div>
            <button id="activate-step-3" class="btn btn-primary btn-md">Envoyer la demande</button>    
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
  
</html>

