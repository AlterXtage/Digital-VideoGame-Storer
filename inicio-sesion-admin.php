<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital VideoGames</title>
    <link rel="stylesheet" href="css/inicio-sesion-admin.css">
</head>
<body>
    <div class="logo-container">
        <img src="img/logo.png" alt="Digital Video Game" class="logo">
    </div>
    <div class="formulario">
    <form action="controlador_admin.php" method="POST">
        
            <h1>Inicio de Sesion <br>Administrador</h1>

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

            <div class="registrarempresa"><a onclick="window.location.href='registro-empresa.php'">¡Registra tu Empresa!</a>
            </div>
            
            <div class="registrarempresa"><a onclick="window.location.href='registro-admin.php'">¡Registrate como Administrador!</a>
            </div>
            </div>
        </form>
    
    </div>
<body>
<html>