<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$mysqli = new mysqli("mysql.eecs.ku.edu", "charansuresh", "Pe9hae4i", "charansuresh");

if($mysqli->connect_errno){
    printf("Connect failed: %s\n", $mysql->connect_errno);
    exit();
}	

$add = "INSERT INTO Users VALUES ('" . $_POST["username"] . "')";

if ($result = $mysqli->query($add)) {
    echo "<strong>Your username has been registered successfully.</strong>";
}

else {
    echo "<strong>We're sorry, but this username has already been taken. Please go back and try again.</strong>";
}

$mysqli->close();

?>