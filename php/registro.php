<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="" method="POST">

        <h2>Hola</h2>
        <p>Inicia tu registro</p>

        <!---Campos de los inputs para que el ususario digite--->
        <div class="input-wrapper">
            <input type="text" name="usuario" placeholder="Usuario">
            <img class="input-icon"src="imge/name.svg" alt="">
        </div>

        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email">
            <img class="input-icon"src="imge/email.svg" alt="">
        </div>

        <div class="input-wrapper">
            <input type="text" name="direction" placeholder="Direccion">
            <img class="input-icon"src="imge/direction.svg" alt="">
        </div>

        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Telefono">
            <img class="input-icon"src="imge/phone.svg" alt="">
        </div>

        <div class="input-wrapper">
            <input type="password" name="password" placeholder="contraseña">
            <img class="input-icon"src="imge/password.svg" alt="">
        </div>

        <input class="btn" type="submit" name="register" value="Enviar">

        
        <a href="inicio-sesion.php " class="return">Iniciar Sesion</a>
    </form>

    <?php 
        include("registrar.php")
    ?>
</body>
</html>