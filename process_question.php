<?php
include 'includes/conexion.php';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$question = mysqli_real_escape_string($conn, $_POST['question']);

$query = "INSERT INTO questions (name, question, timestamp) VALUES ('$name', '$question', NOW())";

if (mysqli_query($conn, $query)) {
    echo "Pregunta enviada con éxito. <a href='index.php'>Volver</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
