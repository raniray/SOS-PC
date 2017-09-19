<?php 	
require('connexion.php');
$db = data_base_connect();
$num = $_POST['num'];
$idUser = $_POST['id'];

$stmt = $db->prepare("UPDATE reparateur_ SET classement=:num WHERE idUser=:id");
$stmt->bindValue(':id',$idUser);
$stmt->bindValue(':num',$num);
$stmt->execute();
$select = $db->prepare("SELECT * FROM reparateur_ JOIN User_ where reparateur_.idUser=User_.idUser and User_.idUser=:id");
$select->bindValue(':id',$idUser);
$select->execute();

while($row = $select->fetch()){

?>
	<fieldset  class="rating">

    <input type="radio" id="<?php echo "Rep".$row['idUser']."5"; ?>" name="<?php echo "Rep".$row['idUser']."5"; ?>"  value="5" <?php if($row['classement']>=5){ echo "checked='true'";}?>  /><label for="<?php echo "Rep".$row['idUser']."5"; ?>" title="Excellent" onclick="evaluer(<?php echo $row['idUser']?>,'5');">5 stars</label>
  <input type="radio" id="<?php echo "Rep".$row['idUser']."4"; ?>" name="<?php echo "Rep".$row['idUser']."4"; ?>" <?php if($row['classement']>=4){ echo "checked='true'";}?> value="4"  /><label for="<?php echo "Rep".$row['idUser']."4"; ?>" title="Très bien" onclick="evaluer(<?php echo $row['idUser']?>,'4');">4 stars</label>
    <input type="radio" id="<?php echo "Rep".$row['idUser']."3"; ?>" name="<?php echo "Rep".$row['idUser']."3"; ?>"  <?php if($row['classement']>=3){ echo "checked='true'";}?> value="3" /><label for="<?php echo "Rep".$row['idUser']."3"; ?>" title="Bien" onclick="evaluer(<?php echo $row['idUser']?>,'3');">3 stars</label>
    <input type="radio" <?php if($row['classement']>=2){ echo "checked='true'";}?> id="<?php echo "Rep".$row['idUser']."2"; ?>" name="<?php echo "Rep".$row['idUser']."2"; ?>" checked="true" value="2" /><label for="<?php echo "Rep".$row['idUser']."2"; ?>" title="Un peu mauvais" onclick="evaluer(<?php echo $row['idUser']?>,'2');">2 stars</label>
    <input type="radio" <?php if($row['classement']>=1){ echo "checked='true'";}?> id="<?php echo "Rep".$row['idUser']."1"; ?>" name="<?php echo "Rep".$row['idUser']."1"; ?>" checked="true" value="1"  /><label for="<?php echo "Rep".$row['idUser']."1"; ?>" title="Mauvais" onclick="evaluer(<?php echo $row['idUser']?>,'1');">1 star</label>
  
	</fieldset>
<?php }?>
