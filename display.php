<?php
include 'connect.php';?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crut</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <button class="btn btn-primary my-20" ><a href="prof.php" class="text-light">Add prof</a>
    
        </button>
        <table class="table">
        <thead class="thead-dark">
    <tr>
      <th scope="col">professeurs</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">cin</th>
      <th scope="col">adresse</th>
      <th scope="col">telephone</th>
      <th scope="col">intitule</th>
      <th scope="col">nom_depart</th>
      <th scope="col">email</th>
      <th scope="col">date_recrutement</th>
    </tr>
  </thead>
  <tbody>


  <?php
$sql="Select* from `crud`";
$result=mysqli_query($con,$sql);
if($result){
    
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['nom'];
        $lastname=$row['prenom'];
        $cin=$row['cin'];
        $adresse=$row['adresse'];
        $email=$row['email'];
        $intitule=$row['intitule'];
        $nom_depart=$row['nom_depart'];
        $mobile=$row['telephone'];
        $date_recrutement=$row['date_recrutement'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$lastname.'</td>
        <td>'.$cin.'</td>
        <td>'.$adresse.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$intitule.'</td>
        <td>'.$nom_depart.'</td>
        <td>'.$date_recrutement.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'"
        class="text-ligth">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?
        deleteid='.$id.'" class="text-ligth">Delete</a></button>
        </td>
      </tr>';
    }
}

?>
    

    <td>

    
  </tbody>
</table>
    </div>
</body>
</html>