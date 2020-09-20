<?php
    require 'connect.php';
    session_start();
    $User = $_SESSION['Id'];
    $Id = $_POST['Id'];

    //Sentencia SQL para eliminar registro
    $delete = "DELETE FROM contacts
                WHERE Id = '$Id' AND IdUsers='$User'";
    
    mysqli_query($mysqli, $delete);
    
    //Comprobar si existe registro
    $exist = "SELECT * FROM contacts WHERE Id = '$Id' AND IdUsers='$User'";

    if( mysqli_num_rows(mysqli_query($mysqli, $exist))>0){
        echo "El Contacto No pudo ser eliminado de su lista su lista";
    } else {
        echo true;
    }

    mysqli_close($mysqli);
?>