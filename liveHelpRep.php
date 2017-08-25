<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Live help</title>
    <meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
    

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css'>

        <link rel="stylesheet" href="css/style2.css">
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
    <link href="css/style3.css" rel="stylesheet">

    <!-- Custom css --> 
    <link href="css/custom.css" rel="stylesheet">
       <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	    
<script src='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js'></script>

      
     <script type="text/javascript">
	 $(document).ready(function() {
	 $('#chatbox').css("visibility", "hidden");
  $('#userspanel').click(function (e) {
     // alert(e.target.id); // The id of the clicked element
       $('#chatclassmom').css("visibility", "hidden");
	  $('#chatbox').css("visibility", "visible");

      
	  
	   
  });
});
	 
	 </script>
    
    
  </head>

  <body>
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
	<div class="usersonline" id="userspanel">
	<h4 class="usersonline-title ">En ligne</h4>
<a href="#user1" ><p id="user1">NOM PRENOM  <i class="fa fa-circle online"></i></p></a>
<a href="#user2"><p id="user2">NOM PRENOM <i class="fa fa-circle online"></i></p></a>
<a href="#user3"><p id="user3">NOM PRENOM <i class="fa fa-circle online"></i></p></a>
<a href="#user4"><p id="user4">NOM PRENOM <i class="fa fa-circle online"></i></p></a>
<a href="#user5"><p id="user5">NOM PRENOM <i class="fa fa-circle online"></i></p></a>
<a href="#user6"><p id="user6">NOM PRENOM <i class="fa fa-circle online"></i></p></a>
<a href="#user7"><p id="user7">NOM PRENOM <i class="fa fa-circle online"></i></p></a>
<a href="#user8"><p id="user8">NOM PRENOM <i class="fa fa-circle online"></i></p></a>
<a href="#user9"><p id="user9">NOM PRENOM <i class="fa fa-circle online"></i></p></a>
<a href="#user10"><p id="user10">NOM PRENOM <i class="fa fa-circle online"></i></p></a>
<a href="#user11"><p id="user11">NOM PRENOM <i class="fa fa-circle online"></i></p></a>
<a href="#user12"><p id="user12">NOM PRENOM <i class="fa fa-circle online"></i></p></a>
</div>
<div class="chat" id="chatbox">
  <div class="chat-title">
    <h1>NOM PRENOM</h1>
    <h2>Live help</h2>
    <figure class="avatar">
      <img src="1.png" /></figure>
  </div>
  <div class="messages">
    <div class="messages-content"></div>
   </div>
  <div class="message-box">
    <textarea type="text" class="message-input" placeholder="Type message..."></textarea>
    <button type="submit" class="message-submit">Envoyer</button>
  </div>

</div>

   <div id="chatclassmom">
      <div id="cir1"></div>
	  <div id="cir2"></div>
	  <div id="cir3"></div>
	  <div id="liveHelp"><p>Live help...</p></div>
   </div> 
<p> Copyright © 2017 <a target="_blank" href="#">SOS-PC</a>.</p> 
<div class="bg"> </div>
  
    
   <script src="js/index2Admin.js"></script> 
    
  </body>
</html>
