<?php
    $hostname_conexion = "Host de la DB";
    $database_conexion = "Nombre de la DB";
    $username_conexion = "Nombre de Usuario";
    $password_conexion = "Password de la DB";
    $conexion = mysqli_connect($hostname_conexion, $username_conexion, $password_conexion); 

    if(!$conexion) {
        echo 'ERROR: No se pudo conectar a MYSQL.' . PHP_EOL;
        echo 'errno de depuración: ' . mysqli_connect_errno() . PHP_EOL;
        echo 'error de depuración: ' . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    echo 'ÉXITO: Se realizó una conexion apropiada a MYSQL!' . PHP_EOL;
    echo 'Información del host: ' . mysqli_get_host_info($conexion) . PHP_EOL;

    //mysqli_close($conexion); //PARA CERRAR LA CONEXION CON LA BASE DE DATOS.
?>