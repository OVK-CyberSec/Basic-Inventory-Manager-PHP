<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `crud` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['nom'];
$lastname = $row['prenom'];
$cin = $row['cin'];
$adresse = $row['adresse'];
$intitule = $row['intitule'];
$nom_depart = $row['nom_depart'];
$email = $row['email'];
$mobile = $row['telephone'];
$date_recrutement = $row['date_recrutement'];

if (isset($_POST['submit'])) {
    $name = $_POST['nom'];
    $lastname = $_POST['prenom'];
    $cin = $_POST['cin'];
    $adresse = $_POST['adresse'];
    $mobile = $_POST['telephone'];
    $intitule = $_POST['intitule'];
    $id_cours = $_POST['id_cours'];
    $email = $_POST['email'];
    $date_recrutement = $_POST['date_recrutement'];

    $sql = "update `crud` set id=$id,nom='$name',email='$email',nom_depart='$nom_depart',intitule='$intitule',prenom='$lastname',cin='$cin',adresse='$adresse',telephone='$mobile',date_recrutement='$date_recrutement' where id=$id";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header('localion:display.php');
    } else {
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
                <input type="text" class="form-control" placeholder="nom" name="nom" autocomplete="off" value=<?php echo $name;?>>
            </div>
            <div class="form-group">
                <label>prenom</label>
                <input type="text" class="form-control" placeholder="prenom" name="prenom" autocomplete="off" value=<?php echo $lastname;?>>
            </div>
            <div class="form-group">
                <label>cin</label>
                <input type="text" class="form-control" placeholder="cin" name="cin" autocomplete="off" value=<?php echo $cin;?>>
            </div>
            <div class="form-group">
                <label>adresse</label>
                <input type="text" class="form-control" placeholder="adresse" name="adresse" autocomplete="off"value=<?php echo $adresse;?>>
            </div>
            <div class="form-group">
                <label>telephone</label>
                <input type="text" class="form-control" placeholder="telephone" name="telephone" autocomplete="off"value=<?php echo $mobile;?>>
            </div>
            <div class="form-group">
                <label>email</label>
                <input type="email" class="form-control" placeholder="email" name="email" autocomplete="off"value=<?php echo $email;?>>
            </div>
            <div class="form-group">
                <label>date_recrutement</label>
                <input type="text" class="form-control" placeholder="date_recrutement" name="date_recrutement" autocomplete="off"value=<?php echo $date_recrutement;?>>
            </div>
            <div class="form-group">
                <label>nom_depart</label>
                <input type="text" class="form-control" placeholder="nom_depart" name="nom_depart" autocomplete="off"value=<?php echo $nom_depart;?>>
            </div>
            <div class="form-group">
                <label>intitule</label>
                <input type="text" class="form-control" placeholder="intitule" name="intitule" autocomplete="off"value=<?php echo $intitule;?>>
            </div>




            <button type="submit" class="btn btn-primary" name="submit">Update </button>
        </form>

        <div>


</body>

</html>