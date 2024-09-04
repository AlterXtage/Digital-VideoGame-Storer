<?php

include("conexion.php");

if (isset($_POST['registrar'])) {
    if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['cedula']) >= 1 &&
        strlen($_POST['nit']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['contraseña']) >= 1 
        ) {
            $name = trim($_POST['nombre']);
            $cedula= trim($_POST['cedula']);
            $nit= trim($_POST['nit']);
            $email= trim($_POST['correo']);
            $password= trim($_POST['contraseña']);
            $fecha = date("y/m/d");
            $consulta = "INSERT INTO datos_admin(nombre, cedula, nit, correo, contraseña, fecha)
                    VALUES('$name', '$cedula', '$nit', '$email', '$password', '$fecha')";
            $resultado = mysqli_query($conectar, $consulta);
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