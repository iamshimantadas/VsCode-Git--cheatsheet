<?php
echo "this is a date php file";

echo "<br>";


$conn = mysqli_connect("localhost","root","","dbname");
if($conn){
    echo "database connected!!";
}

//include 'password.php';

$a=10;
echo $a;

?>
