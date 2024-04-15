<?php
$sname= "localhost";
$unmae= "mehrnaz_meni";
$password = "RtYe9ezhm3bp";
$db_name = "mehrnaz_mernaz";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

