<?php
// $hash is what you would store in your database
$hash = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);

// $hash would be the $hash (above) stored in your database for this user
$checked = password_verify($_POST['password'], $hash);
if ($checked) {
    echo 'password correct';
} else {
    echo 'wrong credentials';
}

$movie="fast and furious!";

?>
