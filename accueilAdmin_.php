<!DOCTYPE html>
<html lang="fr">
<?php session_start();
if(!isset($_SESSION['login'])){
		header("Location: login.php");
}

require('php/connexion.php');
$db = data_base_connect();
?>
	<head>
		<meta charset="utf-8">
		<title>SOS-PC</title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="images/favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
		<link href="css/animations.css" rel="stylesheet">
		<link href="css/style3.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
		<!--Graphs-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
		<script>
$(function () { 
    Highcharts.setOptions({
    lang: {
        months: ['janvier', 'février', 'mars', 'avril', 'mai', 'juin',
            'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'],
            weekdays: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi',
                'Jeudi', 'Vendredi', 'Samedi'],
                shortMonths: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil',
                    'Aout', 'Sept', 'Oct', 'Nov', 'Déc'],
                    decimalPoint: ',',
					printChart: 'Imprimer',
                    downloadPNG: 'Télécharger en image PNG',
                    downloadJPEG: 'Télécharger en image JPEG',
                    downloadPDF: 'Télécharger en document PDF',
                    downloadSVG: 'Télécharger en document Vectoriel',
                    exportButtonTitle: 'Export du graphique',
                    loading: 'Chargement en cours...',
                    printButtonTitle: 'Imprimer le graphique',
                    resetZoom: 'Réinitialiser le zoom',
                    resetZoomTitle: 'Réinitialiser le zoom au niveau 1:1',
                    thousandsSep: ' ',
                    decimalPoint: ','
    }
});
    var myChart = Highcharts.chart('stats', {
        chart: {
		
		backgroundColor: '#212121',
		polar:true,
            type: 'line'
        },
        title: {
		    style: {
         color: '#fff',
         font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
      },
            text: 'Statistiques SOS-PC'
        },
		 legend: {
          backgroundColor: '#424242'
       
    },
        xAxis:
		   
		   
		{
		
           categories: ['Jan', 'Fév', 'Mars', 'Avr', 'Mai', 'Juin', 'Jul', 'Août', 'Sep', 'Oct', 'Nov', 'Dec'],
		    labels: {
            style: {
                color: '#428bca',
				font: 'bold 11px Trebuchet MS, Verdana, sans-serif'
            }
        }
        },
        yAxis: {
	
      tickColor: '#000',
      labels: {
         style: {
            color: '#009688',
            font: 'bold 11px Trebuchet MS, Verdana, sans-serif'
         }
      },
            title: { 
			style: {
         color: '#fff',
         font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
      },
                text: 'Nombre par mois'
            }
        },
        series: [{
            name: 'Nombre de PCs vendus',
            data: [1, 0, 4,5,0,1,2,2,3,1,0,1]
        }, {
            name: 'Nombre de réparations effectuées',
            data: [2, 1, 0,3,7,2,4,2,3,1,0,2]
        },{
            name: 'Nombre d"inscris',
            data: [15, 17, 30,10,9,5,13,12,3,11,7,14]},
			{
            name: 'Nombre de réparateurs',
            data: [2, 3, 3,3,5,6,6,5,5,7,7,6]}]
    });
});
</script>
	</head>

	<body class="no-trans">
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

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

							<h1 class="text-center title" style="margin-top:-12%;font-size: 40px;">Quelques statistiques</h1><br>
							<div id="stats" style="min-width:100%; height:470px;margin-top:3%;"></div>
							
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
		<!-- banner end -->

		<div style="position:relative;background-color:#0a0a0a;width:100%;height:28%;margin-top:0%;"></div>

		<!-- section start -->
		<!-- ================ -->
		<div class="section translucent-bg-img">
			<div class="container object-non-visible" data-animation-effect="fadeIn">
				<h1 id="services"  class="text-center title">Nos TOP 4 réparateurs</h1>

				<div class="space"></div>
				<div class="isotope-container row grid-space-20">

				
				<?php 	
				$select = $db->prepare("SELECT * FROM reparateur_ JOIN User_ where reparateur_.idUser=User_.idUser ORDER BY classement DESC LIMIT 4");
				$select->execute();
				$i=0;
				while($row = $select->fetch()){
				?>

				<div class="col-sm-6 col-md-3 isotope-item web-design">
					<div class="image-box">
     					 <a class="imgover" href="#"><img src="images/320x320.png" class="rounded" alt=""></a>
      					 <center>
         				 <h6 class="heading">NOM Prénom</h6>
         				  <em>Evaluation=9999</em>
         				</br>
         			</br>
         			     <div class="btn button2"><a href="profileRepCons.php">Voir Profil</a></div>

         				</center>
        
       						
      					
      				</div>
      			</div>
				<?php } ?>
                       </div>
                   </br>

					</div>

       
		</div>

		<!-- section end -->

		<!-- section start -->
		
		<!-- section end -->
		<div class="translucent-bg blue">
				<div class="container">
					<div class="list-horizontal">
						<div class="row">
						</div>
					</div>
				</div>
			</div>
		<!-- section start -->
		<!-- ================ -->
		<div class="section">
			<div class="container">
				<h1 class="text-center title" id="portfolio">Espace vente PC</h1>
                 
				<div class="separator"></div>
				<br>		

				<div class="btn btn-primary btn-xs" id="nouvelle-annonce"><a href="nouvelleAnnonceClient.php" >Nouvelle annonce</a></div>
               
				<div class="row object-non-visible" data-animation-effect="fadeIn" style="margin-top:9%;">
					<div class="col-md-12">
						<div class="isotope-container row grid-space-20">
						
				
				<!-- Tous -->

				<div id="tous">

				<?php 	
				$select = $db->prepare("SELECT * FROM annonce_");
				$select->execute();
				$i=0;
				while($row = $select->fetch()){
				?>
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="<?php echo "images/annonces/".$row['annoncePic'];?>" alt="">
										<a class="overlay" id="<?php echo $row['idAnnonce']; ?>" name="<?php echo $row['idAnnonce']; ?>" onclick="voirAnnonce(<?php echo $row['idAnnonce'];?>);" data-toggle="modal" data-target="<?php  echo "#project".$row['idAnnonce'];?>" >
											<i class="fa fa-search-plus"></i>
											<span>Voir l'annonce tous</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="<?php echo "#project".$row['idAnnonce'];?>" >Voir l'annonce</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="<?php echo "project".$row['idAnnonce'];?>" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
												<h4 class="modal-title" id="project-1-label">SOS-PC</h4>
											</div>
											<div class="modal-body">
												<h3><?php echo "Annonce N°".$row['idAnnonce']; ?></h3>
												<div class="row">
													<div class="col-md-6">
													
														<p style="overflow:auto;"><?php echo $row['annonceContent']."<br>"."Prix:".$row['prix']."<br>".
														$row['dateCreation']."<br>"."Durée de validité:".$row['durreeValidite']."<br>".
														
														'<i class="fa fa-eye" aria-hidden="true">'.'</i>'.'&nbsp;&nbsp;'.
														$row['nombreDeVues']; 
														?></p>
													</div>
													<div class="col-md-6">
														<img src="<?php echo "images/annonces/".$row['annoncePic'];?>" alt="">
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
				<?php } ?>
						
				</div>
						</div>
						<!-- portfolio items end -->
					
					</div>
				</div>
			</div>
		</br>
	</br>
			<div class="filters text-center">



							<center>
								


								<div class="btn button"><button class="btn button" onclick="Annonces('T');">tout</button></div>
								<div class="btn button"><button class="btn button" onclick="Annonces('R');">Les plus récentes</button></div>
								<div class="btn button"><button class="btn button" onclick="Annonces('C');" >Les plus consultées</button></div>
								<div class="btn button"><button class="btn button" onclick="Annonces('M');" >Les moins chères</button></div>

							</center>
						</div>
		</div>
		<!-- section end -->
		<div class="translucent-bg blue">
				<div class="container">
					<div class="list-horizontal">
						<div class="row">
						</div>
					</div>
				</div>
			</div>
		<!-- section start -->
		<!-- ================ -->
		<div class="section translucent-bg bg-image-2 pb-clear">
			<div class="container object-non-visible" data-animation-effect="fadeIn">
				<h1 id="clients" class="title text-center">Nos clients</h1>
				<div class="space"></div>
				<div class="row">
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-1.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Mot clé !</h3>
								<blockquote>
									<p> Ici on met l'avis</p>
									<footer>Nom Prénom</footer>
								</blockquote>
							</div>
						</div>
		<a class=" btnC supprimer-avis" data-toggle="modal" data-target="#deleteClient">Supprimer</a>
								   <div class="modal fade" id="deleteClient" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Supprimer avis </h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Etes vous sur de vouloir supprimer cet avis  </div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class=" yesButton btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;OUI</button>
        <button type="button" class="noButton btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;NON</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
	<br><br><br>
					</div>
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-2.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Mot clé!</h3>
								<blockquote>
									<p>Ici on met l'avis</p>
									<footer>Nom Prénom</footer>
								</blockquote>
							</div>
						</div>
								<a class=" btnC supprimer-avis" data-toggle="modal" data-target="#deleteClient">Supprimer</a>
								   <div class="modal fade" id="deleteClient" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Supprimer avis </h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Etes vous sur de vouloir supprimer cet avis  </div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class=" yesButton btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;OUI</button>
        <button type="button" class="noButton btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;NON</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
	<br><br><br>
					</div>
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-3.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Mot clé!</h3>
								<blockquote>
									<p>Ici on met l'avis</p>
									<footer>Nom Prénom</footer>
								</blockquote>
							</div>
						</div>
								<a class=" btnC supprimer-avis" data-toggle="modal" data-target="#deleteClient">Supprimer</a>
								   <div class="modal fade" id="deleteClient" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Supprimer avis </h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Etes vous sur de vouloir supprimer cet avis  </div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class=" yesButton btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;OUI</button>
        <button type="button" class="noButton btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;NON</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
	<br><br><br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-2.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Mot clé!</h3>
								<blockquote>
									<p>Ici on met l'avis</p>
									<footer>Nom Prénom</footer>
								</blockquote>
							</div>
						</div>
								<a class=" btnC supprimer-avis" data-toggle="modal" data-target="#deleteClient">Supprimer</a>
								   <div class="modal fade" id="deleteClient" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Supprimer avis </h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Etes vous sur de vouloir supprimer cet avis  </div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class=" yesButton btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;OUI</button>
        <button type="button" class="noButton btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;NON</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
	<br><br><br>
					</div>
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-3.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Mot clé!</h3>
								<blockquote>
									<p>Ici on met l'avis</p>
									<footer>Nom Prénom</footer>
								</blockquote>
							</div>
						</div>
								<a class=" btnC supprimer-avis" data-toggle="modal" data-target="#deleteClient">Supprimer</a>
								   <div class="modal fade" id="deleteClient" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Supprimer avis </h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Etes vous sur de vouloir supprimer cet avis  </div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class=" yesButton btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;OUI</button>
        <button type="button" class="noButton btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;NON</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
	<br><br><br>
					</div>
					<div class="col-md-4">
						<div class="media testimonial">
							<div class="media-left">
								<img src="images/testimonial-1.png" alt="">
							</div>
							<div class="media-body">
								<h3 class="media-heading">Mot clé!</h3>
								<blockquote>
									<p>Ici on met l'avis</p>
									<footer>Nom Présnom </footer>
								</blockquote>
							</div>
						</div>
								<a class=" btnC supprimer-avis" data-toggle="modal" data-target="#deleteClient">Supprimer</a>
								   <div class="modal fade" id="deleteClient" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Supprimer avis </h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Etes vous sur de vouloir supprimer cet avis  </div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class=" yesButton btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;OUI</button>
        <button type="button" class="noButton btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&nbsp;NON</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
	<br><br><br>
					</div>
				</div>
			</div>
			<!-- section start -->
			<!-- ================ -->
			<div class="translucent-bg blue">
				<div class="container">
					<div class="list-horizontal">
						<div class="row">
						</div>
					</div>
				</div>
			</div>
			<!-- section end -->
		</div>
		<!-- section end -->
		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center">A propos de  <span>SOS-PC</span></h1>
						<p class="lead text-center">SOS-PC : La première plateforme de maintenance et vente PC en Algérie...</p>
						
						<div class="row">
							<div class="col-md-6">
								<img src="img/logo2.png" alt="" class="log">
								<div class="space"></div>
							</div>
							<div class="col-md-6">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi adipisci illo, voluptatum ipsam fuga error commodi architecto, laudantium culpa tenetur at id, beatae placeat deserunt iure quas voluptas fugit eveniet.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo ducimus explicabo quibusdam temporibus deserunt doloremque pariatur ea, animi a. Delectus similique atque eligendi, enim vel reiciendis deleniti neque aliquid, sit?</p>
								<ul class="list-unstyled">
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Lorem ipsum dolor sit amet</li>
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Reiciendis deleniti neque aliquid</li>
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Ipsam fuga error commodi</li>
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Lorem ipsum dolor sit amet</li>
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Dignissimos molestiae necessitatibus</li>
								</ul>
							</div>
						</div>
						<div class="space"></div>
						<h2>Becessitatibus quae beatae possimus ullam</h2>
						<div class="row">
							<div class="col-md-6">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi adipisci illo, voluptatum ipsam fuga error commodi architecto, laudantium culpa tenetur at id, beatae placeat deserunt iure quas voluptas fugit eveniet.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo ducimus explicabo quibusdam temporibus deserunt doloremque pariatur ea, animi a. Delectus similique atque eligendi, enim vel reiciendis deleniti neque aliquid, sit?</p>
								<p>Vitae dolores quam magnam accusantium nam, voluptatibus expedita delectus, dolorum odio magni ut nemo nihil ex earum pariatur molestias velit eveniet, facere autem saepe aut. Ut minima itaque porro facere. Cumque vitae autem, dignissimos molestiae necessitatibus culpa aliquam deleniti soluta sunt voluptatibus tenetur, unde dolorem eligendi doloribus quibusdam facere totam. Possimus atque deserunt numquam aliquam magnam, facilis officiis illo alias ipsa voluptas laborum, praesentium eveniet nobis velit voluptatem odio eligendi, corporis et iste distinctio! Repellendus, id, ad.</p>
							</div>
							<div class="col-md-6">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													Collapsible Group Item #1
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher.
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingTwo">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													Collapsible Group Item #2
												</a>
											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
											<div class="panel-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingThree">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
													Collapsible Group Item #3
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
											<div class="panel-body">
												Richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic.
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
		<!-- section end -->

		<!-- footer start -->
		<!-- ================ -->	
	       <footer id="footer" >

			<!-- .footer start -->
			<!-- ================ -->
			<div class="section translucent-bg bg-image-1">
			<div>
		 
				<div class="container">
                    
					<h1 class="title text-center" id="contact">Contactez-nous</h1>
					<div class="space"></div>
					<div class="row">
						<div class="col-sm-6">
							<div class="footer-content">
								<p class="large">Pour plus d'informations veuillez contacter notre service clients via e-mail, Téléphone ou dirèctement au niveau de notre siège officiel. N'oubliez pas de suivre nos flux sur les réseaux sociaux. </p>
								<ul class="list-icons">
									<li><i class="fa fa-map-marker pr-10"></i> 10,Rue Djoued Nouredine, Rebahi Nouar</li>
									<li><i class="fa fa-phone pr-10"></i> +00 1234567890</li>
									<li><i class="fa fa-fax pr-10"></i> +00 1234567891 </li>
									<li><i class="fa fa-envelope-o pr-10"></i> votreMail@mail.com</li>
								</ul>
								<ul class="social-links">
									<li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/HtmlCoder/714570988650168"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a target="_blank" href="https://twitter.com/HtmlcoderMe"><i class="fa fa-twitter"></i></a></li>
									<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
									
									<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>

								</ul>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="footer-content">
								<form role="form" id="footer-form">
									<div class="form-group has-feedback">
										<label class="sr-only" for="name2">Nom et prénom</label>
										<input type="text" class="form-control" id="name2" placeholder="Nom et prénom" name="name2" required>
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="email2">Email</label>
										<input type="email" class="form-control" id="email2" placeholder="Email" name="email2" required>
										<i class="fa fa-envelope form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="message2"> Votre message</label>
										<textarea class="form-control" rows="8" id="message2" placeholder="Message" name="message2" required></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<input type="submit" value="Envoyer" class="btn button2">
								</form>
							</div>
						</div>
						
					</div><br>

							<p class="text-center">Copyright © 2017 <a target="_blank" href="#">SOS-PC</a>.</p>
			<!-- .footer end -->
				</div>		
</div>			
</footer>


		<!-- JavaScript files
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
			<script type="text/javascript">
            
           function voirAnnonce(id){
             $.post("php/voirAnnonce.php",{id},(data)=>{
                  alert(data);
                })
            }
	function supprimerAnnonce(id){
              $.post("php/supprimerAnnonce.php",{id},(data)=>{
                  alert(data);	  
                })
				$('#supAnnonce').css("visibility", "hidden");
            }
	</script>

	</body>

</html>