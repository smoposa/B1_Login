<?php

require 'conexionbd.php';

$message = '';

if (!empty($_POST['nombre']) && !empty($_POST['usuario']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (nombre, usuario, email, password) VALUES (:nombre, :usuario, :email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':usuario', $_POST['usuario']);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt->bindParam(':password', $password);
    if ($stmt->execute()) {
        $message = 'Cuenta creada con éxito!!';
    } else {
        $message = 'Error, intenta más tarde';
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registrarse</title>
        <link rel="icon" type="image/x-icon" href="img/favicon.png">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css">
    </head>

    <body id="registro">
        <main>
            <div class="contenedor">
                <div class="caja">
                    <div class="caja-login">
                        <img src="img/utpl_logo_blnc2.png" alt="logo_utpl"><br><br>
                        <?php if(!empty($message)): ?>
                            <p style="color: #033166 ; font-size: 24px; font-weight: bold;"> <?= $message ?></p>
                            <?php endif; ?>
                            <h3 class="titulo-iniciar-sesion">CREAR CUENTA</h3>
                            <form action="registro.php" method="POST">
                                <input name="nombre" type="text" placeholder="Nombre" required>
                                <input name="usuario" type="text" placeholder="Usuario" required>
                                <input name="email" type="text" placeholder="Correo" required>
                                <input name="password" type="password" placeholder="Contraseña" required>
                                <input type="submit" value="Crear Cuenta">
                            </form>

                <!-- Enlaces -->
                <p >¿Ya tiene cuenta? &nbsp; <a href="login.php" class="registro-enlace">Inicia sesión</a></p><br>
                <a href="index.php" class="regresar">Regresar</a>

                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
