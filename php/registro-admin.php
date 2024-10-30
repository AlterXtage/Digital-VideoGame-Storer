<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Administrador</title>
    <link rel="stylesheet" href="css/style-admin.css">
</head>
<body>
    <form action="" method="POST">

        <h2>Nuevo Administrador</h2>
        <p>Inicia tu registro</p>

        <!---Campos de los inputs para que el ususario digite--->
        <div class="input-wrapper">
            <input type="text" name="nombre" placeholder="Nombre Administrador">
        </div>

        <div class="input-wrapper">
            <input type="text" name="cedula" placeholder="Documento">
        </div>

        <div class="input-wrapper">
            <input type="text" name="nit" placeholder="NIT empresa">
        </div>

        <div class="input-wrapper">
            <input type="email" name="correo" placeholder="Correo">
        </div>

        <div class="input-wrapper">
            <input type="password" name="contraseña" placeholder="Contraseña">
        </div>

        <input class="btn" type="submit" name="registrar" value="Enviar">

        
        <a href="inicio-sesion-admin.php " class="return">Iniciar Sesion</a>
    </form>

    <?php 
        include("registrar-admin.php")
    ?>
</body>
</html>