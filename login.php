<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: /login.php');
  }

require 'conexionbd.php';  

$message = '';  

if (!empty($_POST['email']) && !empty($_POST['password'])) {

    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    if ($results && password_verify($_POST['password'], $results['password'])) {
        $_SESSION['user_id'] = $results['id'];
        header("Location: perfil.php");
        exit();
    } else {
        $message = 'Correo o contraseña incorrectos';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ingresar</title>
        <link rel="icon" type="image/x-icon" href="img/favicon.png">
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body id="login">
        <main>
            <div class="contenedor">
                <div class="caja">
                    <div class="caja-login">
                        <img src="img/utpl_logo_blnc.png" alt="logo_utpl"><br><br>
                        
                        <h3 class="titulo-iniciar-sesion">BIENVENIDOS</h3>
                        <form action="login.php" method="POST">
                            <input name="email" type="text" placeholder="Correo" required>                        
                            <input name="password" type="password" placeholder="Contraseña" required>
                            <input type="submit" value="Iniciar sesión">
                        </form>

                        <?php if (!empty($message)): ?>
                            <p style="color: red; font-size: 18px;"><?= $message ?></p>
                        <?php endif; ?>
                        
                         <p>¿No tienes cuenta? &nbsp; <a href="registro.php" class="registro-enlace">Crear cuenta</a></p><br>
                         <a href="index.php" class="regresar">Regresar</a>
                    </div>
                </div>
            </div>
        </main>
  </body>
</html>