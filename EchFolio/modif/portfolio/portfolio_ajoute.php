<?php
//test
include("../../connect.php");
include("../../interdit.php");

 
//Remplir La liste
$query_type = "SELECT * FROM type_conge";
$result = mysqli_query($con,$query_type);


/////////////////////////////


//Formulaire
if(isset($_POST['Valider']))
{
    $image=htmlspecialchars(trim($_POST['image']));
    $titre=htmlspecialchars(trim($_POST['titre']));
    $lien_github=htmlspecialchars(trim($_POST['lien_github']));
    $lien_site=htmlspecialchars(trim($_POST['lien_site']));
 
  //Date de demande ::
  
  $query_dcongé = "INSERT INTO portfolio(image,titre,lien_github,lien_site)VALUE('$image','$titre','$lien_github','$lien_site')";

    if(mysqli_query($con,$query_dcongé)){
        echo "l'ajout est envoyé";
    }
    header("Location:portfolio_mod.php");
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
					<label for="image">image*</label><br>
					<input id='image' class="field" type="text" name="image" value="assets/img/portfolio/"><br><br>
				  </div>
				  <div>
					<label for="titre">titre*</label><br>
					<input id='titre' class="field" type="text" name="titre" ><br><br>
				  </div>
                  <label for="lien_github">lien_github*</label><br>
					<input id='lien_github' class="field" type="text" name="lien_github" ><br><br>
				  </div>
				  <div>
					<label for="lien_site">lien_site*</label><br>
					<input id='lien_site' class="field" type="text" name="lien_site" ><br><br>
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