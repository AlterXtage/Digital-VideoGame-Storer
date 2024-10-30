<?php

include("conexion.php");

if (isset($_POST['regis'])) {
    if (
        strlen($_POST['empresa']) >= 1 &&
        strlen($_POST['nit']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['correo']) >= 1 
        ) {
            $empress = trim($_POST['empresa']);
            $nit= trim($_POST['nit']);
            $direction= trim($_POST['direccion']);
            $phone= trim($_POST['telefono']);
            $gmail= trim($_POST['correo']);
            $fecha = date("y/m/d");
            $consulta = "INSERT INTO datos_empresa(empresa, nit, direccion, telefono, correo, fecha)
                    VALUES('$empress', '$nit', '$direction', '$phone', '$gmail', '$fecha')";
            $resultado = mysqli_query($conect, $consulta);
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