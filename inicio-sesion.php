<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital VideoGames</title>
    <link rel="stylesheet" href="css/inicio-sesion.css">
</head>
<body>
    <div class="logo-container">
        <img src="img/logo.png" alt="Digital Video Game" class="logo">
    </div>
    <div class="formulario">
    <form action="controlador_usuario.php" method="POST">

            <h1>Inicio de Sesion</h1>
        
            <div class="username">
                <input type="text" name="Usuario" required>
                <label>Nombre de Usuario</label>
            </div>
            <div class="username">
                <input type="password" name="Clave" required>
                <label>Contraseña</label>
            </div>
            <a href="olvido-password.html" class="recordar">¿Olvidaste tu contraseña?</a>
            <!--<div class="recordar" onclick="window.location.href='olvido-password.html'">¿Olvidaste tu contraseña?
            </div>-->
            
            <div onclick="window.location.href=''">
            <input name="btningresar "type="submit" value="Iniciar">
            </div>
           
            <div class="registrarse" onclick="window.location.href='registro.php'">
                No tienes cuenta? <div>registrate!</div>
            </div>
        </form>
    </div>
<body>
<html>