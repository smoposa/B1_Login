<?php
    session_start();
    require 'conexionbd.php';

    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }

    $records = $conn->prepare('SELECT email FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    if (count($results) > 0) {
        $user = $results;
    } else {
        header("Location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Perfil de Usuario</title>
        <link rel="icon" type="image/x-icon" href="img/favicon.png">
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body id="perfil">
        <div id="perfil-info">
            <h1>Bienvenido</h1>
            <p><?= htmlspecialchars($user['email']); ?></p>
        </div>
        <div id="cerrar-sesion">
            <a href="logout.php"> Cerrar sesión</a>
        </div>
    </body>
</html>
