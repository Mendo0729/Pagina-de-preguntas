<?php
session_start();
include 'includes/conexion.php';

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

$query = "SELECT * FROM questions ORDER BY timestamp DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Preguntas Recibidas</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
</head>
<body>
    <h1>Preguntas Recibidas</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Pregunta</th>
            <th>Fecha</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['question']); ?></td>
            <td><?php echo htmlspecialchars($row['timestamp']); ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
