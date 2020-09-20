<?php
    //Conectar a la base de datos
    
    $hostname = '127.0.0.1';
    $username = 'root';
    $password = '';
    $dbname = 'virtualcontactbook_db';

    //Sintaxis de conexión de la base de datos.
    $mysqli = mysqli_connect($hostname, $username, $password, $dbname);
?>