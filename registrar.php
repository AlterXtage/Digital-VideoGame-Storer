<?php

include("conexion.php");

if (isset($_POST['register'])) {
    if (
        strlen($_POST['usuario']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['direction']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['password']) >= 1 
        ) {
            $user = trim($_POST['usuario']);
            $email = trim($_POST['email']);
            $direction= trim($_POST['direction']);
            $phone= trim($_POST['phone']);
            $password= trim($_POST['password']);
            $fecha = date("y/m/d");
            $consulta = "INSERT INTO datos(nombre, email, direccion, telefono, contraseña, fecha)
                    VALUES('$user', '$email', '$phone', '$direction', '$password')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
                ?>
                    <h3 class="success">Tu registro se a completado</h3>
                <?php
            }else{
                ?>
                    <h3 class="error">Ocurrio un error</h3>
                <?php
            }       

         }else {
            ?>
                <h3 class="error">Llena todos los campos</h3>
             <?php
        }
}
?>