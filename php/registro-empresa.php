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

        <h2>Registro Empresa</h2>
        <p>Inicia tu registro</p>

        <!---Campos de los inputs para que el usuario digite--->
        <div class="input-wrapper">
            <input type="text" name="empresa" placeholder="Nombre Empresa">
        </div>

        <div class="input-wrapper">
            <input type="text" name="nit" placeholder="NIT">
        </div>

        <div class="input-wrapper">
            <input type="text" name="direccion" placeholder="Direccion">
        </div>

        <div class="input-wrapper">
            <input type="tel" name="telefono" placeholder="Telefono">
        </div>

        <div class="input-wrapper">
            <input type="email" name="correo" placeholder="Correo">
        </div>

        <input class="btn" type="submit" name="regis" value="Enviar">

        
        <a href="inicio-sesion-admin.html " class="return">Iniciar Sesion</a>
    </form>

    <?php 
        include("registrar-empresa.php")
    ?>
</body>
</html>