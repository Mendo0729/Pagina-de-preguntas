<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Deja tu Pregunta</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
</head>
<body>
    <!-- Menú de navegación -->
    <header>
        <nav>
            <ul>
                <?php if (!isset($_SESSION['admin'])): ?>
                    <li><a href="login.php">Iniciar sesión</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    
    <main>
        <h1>Deja tu Pregunta para la Conferencia</h1>
        <form action="process_question.php" method="POST">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="question">Pregunta:</label>
            <textarea id="question" name="question" required></textarea>
            
            <button type="submit">Enviar Pregunta</button>
        </form>
    </main>
</body>
</html>
