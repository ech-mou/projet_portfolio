<?php
//test
include("../../connect.php");
include("../../interdit.php");

$id_modif = $_SESSION['id_modif'];

$query_type1 = "SELECT * FROM experience_professionelle WHERE id = '$id_modif' ";
$result1 = mysqli_query($con,$query_type1);
$row1 = mysqli_fetch_assoc($result1);


/////////////////////////////


//Formulaire
if(isset($_POST['Valider']))
{
  $post=htmlspecialchars(trim($_POST['post']));
  $anne=htmlspecialchars(trim($_POST['anne']));
  $experience1=htmlspecialchars(trim($_POST['experience1']));
  $experience2=htmlspecialchars(trim($_POST['experience2']));
  $experience3=htmlspecialchars(trim($_POST['experience3']));
  $experience4=htmlspecialchars(trim($_POST['experience4']));
  //Date de demande ::
  
  $query_dcongé = "UPDATE experience_professionelle SET post = '$post', anne = '$anne', experience1 = '$experience1', experience2 = '$experience2', experience3 = '$experience3', experience4 = '$experience4'  WHERE id = '$id_modif' ";

    if(mysqli_query($con,$query_dcongé)){
        echo "experience est modifié";
    }
    header("Location:experience.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../assets/css/formulaire.css">
    
    <title>cp</title>
</head>
<body>
<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Ajouter les experiences</h2>
				<div>
        <form action="" method="POST">
		            <div>
					<label for="image">post*</label><br>
					<input id='image' class="field" type="text" name="post" value="<?=$row1['post'];?>" ><br><br>
				  </div>
				  <div>
					<label for="titre">anné*</label><br>
					<input id='titre' class="field" type="text" name="anne" value="<?=$row1['anne'];?>"><br><br>
				  </div>
				  <div>
				  <label for="lien_github">experience1*</label><br>
					<input id='lien_github' class="field" type="text" name="experience1" value="<?=$row1['experience1'];?>"><br><br>
				  </div>
				  <div>
				  <label for="lien_github">experience2*</label><br>
					<input id='lien_github' class="field" type="text" name="experience2" value="<?=$row1['experience2'];?>"><br><br>
				  </div>
				  <div>
				  <label for="lien_github">experience3*</label><br>
					<input id='lien_github' class="field" type="text" name="experience3" value="<?=$row1['experience3'];?>"><br><br>
				  </div>
				  <div>
				  <label for="lien_github">experience4*</label><br>
					<input id='lien_github' class="field" type="text" name="experience4" value="<?=$row1['experience4'];?>"><br><br>
				  </div>
					  
					  <div>
					   <button class="btn" type="submit" name="Valider">Valider</button><br><br>
					  </div>
					  <div>
					   <button class="btn" type="submit" name="déconnecté">déconnecté</button>
					  </div>
			</form>
			</div>
		</div>
	</div>
  
</body>

</html>