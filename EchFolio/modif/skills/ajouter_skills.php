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
  $comp=htmlspecialchars(trim($_POST['comp']));
  $pourc=htmlspecialchars(trim($_POST['pourc']));
 
  //Date de demande ::
  
  $query_dcongé = "INSERT INTO skills(competent,pourcentage)VALUE('$comp','$pourc')";
   mysqli_query($con,$query_dcongé);
    header("Location:mod_skills.php");
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
				<h2>Ajouter les compétences</h2>
				<div>
        <form action="" method="POST">
					<label for="date_debut">competence*</label><br>
					<input id='date_debut' class="field" type="text" name="comp" ><br><br>
				  </div>
				  <div>
					<label for="date_fin">pourcentage*</label><br>
					<input id='date_fin' class="field" type="text" name="pourc" ><br><br>
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