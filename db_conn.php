<?php
$sname= "localhost";
$unmae= "db_user_name";
$password = "db user passs";
$db_name = "db name";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

