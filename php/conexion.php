<?php 

    
    /*$conex = mysqli_connect("localhost" ,"root" ,"", "digital_videogames" );
    $conectar = mysqli_connect("localhost" ,"root" ,"", "digital_videogames" );
    $conect = mysqli_connect("localhost" ,"root" ,"", "digital_videogames" );*/
    
    $host = "localhost";
    $user= "root";
    $pass = "";

    //$db ="iniciosesiondb";
    $db="digital_videogames";
    $conex=mysqli_connect($host,$user,$pass,$db);
    $conectar = mysqli_connect($host,$user,$pass,$db );
    $conect = mysqli_connect($host,$user,$pass,$db );

    /*if (!$con) {
        echo"Conexion fallida";
    }*/

    

?>