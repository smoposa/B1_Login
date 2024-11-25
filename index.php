<?php
  session_start();

  require 'conexionbd.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro UTPL</title>
        <link rel="icon" type="image/x-icon" href="img/favicon.png">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <main>
            <div class="contenedor">
                <div class="caja">
                    <div class="caja-login">
                        <img src="img/utpl_logo_blnc.png" alt="logo_utpl"><br><br>
                        <a href="login.php"><button id="btn__iniciar-sesion">Iniciar Sesión</button></a><br><br>
                        <a href="registro.php"><button id="btn__iniciar-sesion">Crear Cuenta</button></a>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>