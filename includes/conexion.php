<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conference_questions";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
