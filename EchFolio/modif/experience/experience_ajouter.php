<?php
//test
include("../../connect.php");
include("../../interdit.php");


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
  
  $query_dcongé = "INSERT INTO experience_professionelle(post,anne,experience1,experience2,experience3,experience4)VALUE('$post','$anne','$experience1','$experience2','$experience3','$experience4')";
  mysqli_query($con,$query_dcongé);
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
				<h2>Ajouter </h2>
				<div>
        <form action="" method="POST">
		<div>
					<label for="image">post*</label><br>
					<input id='image' class="field" type="text" name="post" ><br><br>
				  </div>
				  <div>
					<label for="titre">anné*</label><br>
					<input id='titre' class="field" type="text" name="anne"><br><br>
				  </div>
				  <div>
				  <label for="lien_github">experience1*</label><br>
					<input id='lien_github' class="field" type="text" name="experience1"><br><br>
				  </div>
				  <div>
				  <label for="lien_github">experience2*</label><br>
					<input id='lien_github' class="field" type="text" name="experience2"><br><br>
				  </div>
				  <div>
				  <label for="lien_github">experience3*</label><br>
					<input id='lien_github' class="field" type="text" name="experience3"><br><br>
				  </div>
				  <div>
				  <label for="lien_github">experience4*</label><br>
					<input id='lien_github' class="field" type="text" name="experience4"><br><br>
				  </div>
					  
					  <div>
					   <button class="btn" type="submit" name="Valider">Valider</button><br><br>
					  </div>
					  <div>
					   <button class="btn" type="submit" name="deconnecte">déconnecté</button>
					  </div>
			</form>
			</div>
		</div>
	</div>
  
</body>

</html>