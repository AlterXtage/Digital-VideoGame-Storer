<?php 
    session_start();
    include("conexion.php");

    if (isset($_POST['Usuario']) && isset($_POST['Clave']) ) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['Usuario']);
    $Clave = validate($_POST['Clave']);

    if (empty($Usuario)) {
        header('Location: index.php?error= El Usuario Es Requerido');
        exit();
    }elseif (empty($Clave)) {
        header('Location: index.php?error= La Clave Es Requerida');
        exit();
    }else{

        //$Clave = md5($Clave);

        //$Sql = "SELECT * FROM usuarios WHERE Usuario = '$Usuario' AND Clave= '$Clave'";
        $Sql = "SELECT * FROM datos_admin WHERE nombre = '$Usuario' AND contraseña= '$Clave'";
        $result = mysqli_query($conectar, $Sql);

        if (mysqli_num_rows($result) === 1) {
            /*
            $row= mysqli_fetch_assoc($result);
            if ($row['Usuario'] === $Usuario && $row['Clave'] === $Clave) {
                $_SESSION['Usuario'] = $row['Usuario'];
                $_SESSION['Nombre_Completo'] = $row['Nombre_Completo'];
                $_SESSION['Id'] = $row['Id'];
                header("Location: Inicio.php");
                exit();
                */
                $row= mysqli_fetch_assoc($result);
                if ($row['nombre'] === $Usuario && $row['contraseña'] === $Clave) {
                    $_SESSION['nombre'] = $row['nombre'];
                    $_SESSION['cedula'] = $row['cedula'];
                    $_SESSION['nit'] = $row['nit'];
                    $_SESSION['correo'] = $row['correo'];
                    $_SESSION['fecha'] = $row['fecha'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: tienda.html");
            }else{
                header("Location> index.php?error=El usuario o la clave son incorrectas");
                exit();
            }

        }else{
            header("Location> index.php?error=El usuario o la clave son incorrectas");
            exit();
        }
    }
}else{
    header("Location> index.html");
    exit();
    
}
?>