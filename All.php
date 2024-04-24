<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['nom'];
    $lastname = $_POST['prenom'];
    $cin = $_POST['cin'];
    $adresse = $_POST['adresse'];
    $mobile = $_POST['telephone'];
    $email = $_POST['email'];
    $date_recrutement = $_POST['date_recrutement'];
    $intitule = $_POST['intitule'];

    $nom_depart = $_POST['nom_depart'];

    $sql="insert into `crud` (nom,prenom,cin,adresse,telephone,email,date_recrutement,intitule,date_recrutement)
    values('$name','$lastname','$cin','$adresse','$mobile','$email','$date_recrutement','$intitule','$nom_depart')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "data insered successfully";
    }else {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">

    <title>EMSI</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>nom</label>
                <input type="text" class="form-control" placeholder="nom" name="nom" autocomplete="off">
            </div>
            <div class="form-group">
                <label>prenom</label>
                <input type="text" class="form-control" placeholder="prenom" name="prenom" autocomplete="off">
            </div>
            <div class="form-group">
                <label>cin</label>
                <input type="text" class="form-control" placeholder="cin" name="cin" autocomplete="off">
            </div>
            <div class="form-group">
                <label>adresse</label>
                <input type="text" class="form-control" placeholder="adresse" name="adresse" autocomplete="off">
            </div>
            <div class="form-group">
                <label>telephone</label>
                <input type="text" class="form-control" placeholder="telephone" name="telephone" autocomplete="off">
            </div>
            <div class="form-group">
                <label>email</label>
                <input type="email" class="form-control" placeholder="email" name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>date_recrutement</label>
                <input type="text" class="form-control" placeholder="date_recrutement" name="date_recrutement" autocomplete="off">
            </div>
            <div class="form-group">
                <label>nom_depart</label>
                <input type="text" class="form-control" placeholder="nom_depart" name="nom_depart" autocomplete="off">
            </div>
            <div class="form-group">
                <label>intitule</label>
                <input type="text" class="form-control" placeholder="intitule" name="intitule" autocomplete="off">
            </div>



            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

        <div>


</body>

</html>