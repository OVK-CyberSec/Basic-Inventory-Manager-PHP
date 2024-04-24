<?php

$con=new mysqli('localhost', 'root', '', 'crudopation');

if ($con) {
    echo "data insered successfully";
} else {
    die(mysqli_error($con));
}
    

?>