<?php 	
require('connexion.php');
$db = data_base_connect();
$type = $_POST['type'];
switch($type) {
                      case 'T': { // tous
                        $select = $db->prepare("SELECT * FROM annonce_");
                        break;
                    }
                      case 'R': { // plus reccentes
                        $select = $db->prepare("SELECT * FROM annonce_ ORDER BY nombreDeVues DESC LIMIT 4");
                          break;
                    }
                      case 'M': { // moins cheres
                        $select = $db->prepare("SELECT * FROM annonce_ ORDER BY prix ASC LIMIT 4");
                          break;       
                    }
                      case 'C': { // plus consult�es 
                        $select = $db->prepare("SELECT * FROM annonce_ ORDER BY prix ASC LIMIT 4");
                          break;       
                    }
                    }
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
                <span>Voir l'annonce consulr�es</span>
            </a>
        </div>
        <a class="btn btn-default btn-block" data-toggle="modal" data-target="<?php echo "#project".$row['idAnnonce'];?>" >Voir l'annonce </a>
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
                    <h3><?php echo "Annonce N�".$row['idAnnonce']; ?></h3>
                    <div class="row">
                        <div class="col-md-6">
                        
                            <p style="overflow:auto;"><?php echo $row['annonceContent']."<br>"."Prix:".$row['prix']."<br>".
                            $row['dateCreation']."<br>"."Dur�e de validit�:".$row['durreeValidite']."<br>".
                            
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
<?php }?>