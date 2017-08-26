<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>SOS-PC</title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
		<link href="css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="css/style1.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
	</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>
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
                    <?php };
                         ?>            </li>
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
			
		<!-- banner start -->
		<!-- ================ -->
		<div id="banner" class="banner">
			<div class="banner-image"></div>
			<div class="banner-caption">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
							<h1 class="text-center">SOS-<span>PC</span></h1>
							<p class="lead text-center">La première plateforme de maintenance et de vente PC en Algérie qui met à votre disposition une équipe  formée des meilleurs réparateurs, afin de vous assurer un service fiable, rapide et à des prix très abordables. Chez SOS-PC  votre ordi est en bonnes mains ....</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner end -->
	</br>

		<!-- section start -->
		<!-- ================ -->
		<div class="section">
			<div class="container">
				<h1 class="text-center title" id="portfolio">Espace vente PC</h1>
				<br>
				<br>
				<br>

		<div>
							<center>

								<div class="btn button"><a href="galery2.php">tout</a></div>
								<div class="btn button"><a href="galery2.php">Les plus récentes</a></div>
								<div class="btn button"><a href="galery2.php">Les plus consultées</a></div>
								<div class="btn button"><a href="galery2.php">Les moins chères</a></div>

							</center>
						</div>
		</div>

				<div class="separator"></div>
				<br>			
				<div class="row object-non-visible" data-animation-effect="fadeIn">
					<div class="col-md-12">

						<!-- isotope filters start -->
						
						<!-- isotope filters end -->

						<!-- portfolio items start -->
						<div class="isotope-container row grid-space-20">
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/320x320.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-1">
											<i class="fa fa-search-plus"></i>
											<span>Voir l'annonce</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-1">Voir l'annonce</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
												<h4 class="modal-title" id="project-1-label">SOS-PC</h4>
											</div>
											<div class="modal-body">
												<h3>Annonce N°99</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Ici c'est le corps de l'annonce.</p>
													</div>
													<div class="col-md-6">
														<img src="images/320x320.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default2" data-dismiss="modal">Fermer</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item app-development">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/320x320.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-2">
											<i class="fa fa-search-plus"></i>
											<span>Voir l'annonce</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-2">Voir l'annonce</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-2" tabindex="-1" role="dialog" aria-labelledby="project-2-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
												<h4 class="modal-title" id="project-2-label">SOS-PC</h4>
											</div>
											<div class="modal-body">
												<h3>Annonce N°99</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Ici c'est le corps de l'annonce.</p>
													</div>
													<div class="col-md-6">
														<img src="images/320x320.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default2" data-dismiss="modal">Fermer</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/320x320.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-3">
											<i class="fa fa-search-plus"></i>
											<span>Voir l'annonce</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-3">Voir l'annonce</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-3" tabindex="-1" role="dialog" aria-labelledby="project-3-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">SOS-PC</span></button>
												<h4 class="modal-title" id="project-3-label">SOS-PC</h4>
											</div>
											<div class="modal-body">
												<h3>Annonce N°99</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Ici c'est le corps de l'annonce.</p>
													</div>
													<div class="col-md-6">
														<img src="images/320x320.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default2" data-dismiss="modal">Fermer</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item site-building">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/320x320.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-4">
											<i class="fa fa-search-plus"></i>
											<span>Voir l'annonce</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-4">Voir l'annonce</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-4" tabindex="-1" role="dialog" aria-labelledby="project-4-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-4-label">SOS-PC</h4>
											</div>
											<div class="modal-body">
												<h3>Annonce N°99</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Ici c'est le corps de l'annonce.</p>
													</div>
													<div class="col-md-6">
														<img src="images/320x320.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default2" data-dismiss="modal">Fermer</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item app-development">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/320x320.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-5">
											<i class="fa fa-search-plus"></i>
											<span>Voir l'annonce</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-5">Voir l'annonce</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-5" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-5-label">SOS-PC</h4>
											</div>
											<div class="modal-body">
												<h3>Annonce N°99</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Ici c'est le corps de l'annonce.</p>
													</div>
													<div class="col-md-6">
														<img src="images/320x320.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default2" data-dismiss="modal">Fermer</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/320x320.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-6">
											<i class="fa fa-search-plus"></i>
											<span>Voir l'annonce</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-6">Voir l'annonce</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-6" tabindex="-1" role="dialog" aria-labelledby="project-6-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-6-label">SOS-PC</h4>
											</div>
											<div class="modal-body">
												<h3>Annonce N°99</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Ici c'est le corps de l'annonce.</p>
													</div>
													<div class="col-md-6">
														<img src="images/320x320.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default2" data-dismiss="modal">Fermer</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item site-building">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/320x320.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-7">
											<i class="fa fa-search-plus"></i>
											<span>Voir l'annonce</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-7">Voir l'annonce</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-7" tabindex="-1" role="dialog" aria-labelledby="project-7-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-7-label">SOS-PC</h4>
											</div>
										<div class="modal-body">
												<h3>Annonce N°99</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Ici c'est le corps de l'annonce.</p>
													</div>
													<div class="col-md-6">
														<img src="images/320x320.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default2" data-dismiss="modal">Fermer</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/320x320.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-8">
											<i class="fa fa-search-plus"></i>
											<span>Voir l'annonce</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-8">Voir l'annonce</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-8" tabindex="-1" role="dialog" aria-labelledby="project-8-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-8-label">SOS-PC</h4>
											</div>
											<div class="modal-body">
												<h3>Annonce N°99</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Ici c'est le corps de l'annonce.</p>
													</div>
													<div class="col-md-6">
														<img src="images/320x320.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default2" data-dismiss="modal">Fermer</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/320x320.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-9">
											<i class="fa fa-search-plus"></i>
											<span>Voir l'annonce</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-9">Voir l'annonce</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-9" tabindex="-1" role="dialog" aria-labelledby="project-9-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-9-label">SOS-PC</h4>
											</div>
											<div class="modal-body">
												<h3>Annonce N°99</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Ici c'est le corps de l'annonce.</p>
													</div>
													<div class="col-md-6">
														<img src="images/320x320.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default2" data-dismiss="modal">Fermer</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item site-building">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/320x320.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-10">
											<i class="fa fa-search-plus"></i>
											<span>Voir l'annonce</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-10">Voir l'annonce</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-10" tabindex="-1" role="dialog" aria-labelledby="project-10-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-10-label">SOS-PC</h4>
											</div>
											<div class="modal-body">
												<h3>Annonce N°99</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Ici c'est le corps de l'annonce.</p>
													</div>
													<div class="col-md-6">
														<img src="images/320x320.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default2" data-dismiss="modal">Fermer</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/320x320.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-11">
											<i class="fa fa-search-plus"></i>
											<span>Voir l'annonce</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-11">Voir l'annonce</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-11" tabindex="-1" role="dialog" aria-labelledby="project-11-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-11-label">SOS-PC</h4>
											</div>
											<div class="modal-body">
												<h3>Annonce N°99</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Ici c'est le corps de l'annonce.</p>
													</div>
													<div class="col-md-6">
														<img src="images/320x320.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default2" data-dismiss="modal">Fermer</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item app-development">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/320x320.png" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-12">
											<i class="fa fa-search-plus"></i>
											<span>Voir l'annonce</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-12">Voir l'annonce</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-12" tabindex="-1" role="dialog" aria-labelledby="project-12-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-12-label">SOS-PC</h4>
											</div>
											<div class="modal-body">
												<h3>Annonce N°99</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Ici c'est le corps de l'annonce.</p>
													</div>
													<div class="col-md-6">
														<img src="images/320x320.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default2" data-dismiss="modal">Fermer</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

						</div>
						<!-- portfolio items end -->
					
					</div>
				</div>
			</div>
		</br>
	</br>
		<center>

		<button type="button" class="btn btn-sm button" data-dismiss="modal">Précedent
		</button>
		<button type="button" class="btn btn-sm button" data-dismiss="modal">Suivant..
		</button>

	    </center>
		
			<!-- .footer end -->
          


			<!-- .subfooter start -->
			<!-- ================ -->
			<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="text-center">Copyright © 2017 <a target="_blank" href="#">SOS-PC</a>.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- .subfooter end -->

		</footer>
		<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
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

	</body>
</html>
