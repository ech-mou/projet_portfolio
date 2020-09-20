<?php
//test
include("../../connect.php");
include("../../interdit.php");


//Formulaire
if(isset($_POST['Valider']))
{
    $specialiste=htmlspecialchars(trim($_POST['specialiste']));
    $anne=htmlspecialchars(trim($_POST['anne']));
    $ecole=htmlspecialchars(trim($_POST['ecole']));
 
  //Date de demande ::
  
  $query_dcongé = "INSERT INTO form(specialiste,anne,ecole)VALUE('$specialiste','$anne','$ecole')";
  mysqli_query($con,$query_dcongé).
    header("Location:formation.php");
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
					<label for="image">spécialiste*</label><br>
					<input id='image' class="field" type="text" name="specialiste"><br><br>
				  </div>
				  <div>
					<label for="titre">anné*</label><br>
					<input id='titre' class="field" type="text" name="anne" ><br><br>
				  </div>
                  <label for="lien_github">école*</label><br>
					<input id='lien_github' class="field" type="text" name="ecole" ><br><br>
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