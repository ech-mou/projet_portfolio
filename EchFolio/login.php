<?php
include("connect.php");

session_start();
if(isset($_POST['submit'])){

    //Récupérer POST ::
    $name=htmlspecialchars(strtolower(trim($_POST['cin'])));
    $password=($_POST['password']);

    //Réquête
    $query = "SELECT id FROM login WHERE name='$name' && password='$password'";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
    $_SESSION['name']=$name;
      header('location:home.php');

    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    <title>LoginIn</title>
</head>
<body>
    

	<div class="container">
		
		<div class="login-content">
			<form action="" method="POST">
				<img src="assets/img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>name</h5>
           		   		<input type="text" class="input" name="cin" require>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password"require>
            	   </div>
            	</div>
                <a href="#">Forgot Password?</a>
                <button class="btn" type=submit name="submit">LoginIn</button>
            	
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>