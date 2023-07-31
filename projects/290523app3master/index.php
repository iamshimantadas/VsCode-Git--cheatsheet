<?php

include 'date.php';
include 'password.php';

echo "<br>";

echo "hello world";

$name="microcodes";
echo $name.".in";

  if (empty($_POST["comment"])) {  
    $comment = "";  
  } else {  
    $comment = test_input($_POST["comment"]);  
  }  
  if (empty($_POST["gender"])) {  
    $genderErr = "Gender is required";  
  } else {  
    $gender = test_input($_POST["gender"]);  
  }  
}  
function test_input($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  


?>
