<?php

include("../../connect.php");
include("../../interdit.php");



if (isset($_GET['edit_dc'])) {
  $_SESSION['id_modif'] = $_GET['edit_dc'];
  header('location: formation_modif.php');
}

//Remplir La liste
$query_type = "SELECT * FROM form";
$result = mysqli_query($con,$query_type);

//suprimer la demande de congé
if(isset($_GET['delete_dc'])){
  $id = $_GET['delete_dc'];
  $sql = "DELETE FROM form WHERE id = $id";
  $res = mysqli_query($con,$sql);
}
if(isset($_POST['precedent']))
    header("location: ../../home.php");

if(isset($_POST['ajouter'])){
  header("location: formation_ajouter.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultat</title>
    <link rel="stylesheet" href="../../assets/css/style1.css">
</head>
<body>
<table class="table1" border=1>
<tr>
            <td class="td1" >id </td>
            <td class="td1">spécialiste</td>
            <td class="td1">anné</td>
            <td class="td1">école</td>
        </tr>
<?php



if(mysqli_num_rows($result)>0 ){


    //var_dump($row);
    while($row = mysqli_fetch_assoc($result) ) {
      ?>
      <tr>
        <td><?=$row['id'];?></td>
        <td><?=$row['specialiste'];?></td>
        <td><?=$row['anne'];?></td>
        <td><?=$row['ecole'];?></td>
        <td><a class="supp" href="formation.php?delete_dc=<?=$row['id'];?>">Suprimer</a></td>
        <td><a class="modif" href="formation.php?edit_dc=<?=$row['id'];?>">Modifier</a></td>

      </tr>
      <?php
    }
  }else{
    echo "0 result";
  }

?>



        <?php
      
            // $r=mysqli_query($con,"select * from demande_conge where id=1")
        ?>
    </table>

    <form action="" method="POST">
        <button class="btn1" type=submit name="precedent">précédent</button>
        <button class="btn2" type=submit name="ajouter">ajouter</button>
    </form>

</body>
</html>

