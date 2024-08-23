<?php
session_start();
include 'includes/conexion.php'; // Verifica esta ruta

// Validar y escapar entradas
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Consulta para verificar el usuario
$query = "SELECT * FROM admins WHERE username='$username' AND password=MD5('$password')";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['admin'] = $username;
    header('Location: preguntas.php');
    exit();
} else {
    echo "Nombre de usuario o contraseña incorrectos. <a href='login.php'>Intentar de nuevo</a>";
}

mysqli_close($conn);
?>

