<?php
    require 'connect.php';

    $Name = $_POST['Name'];
    $Lastname = $_POST['Lastname'];
    $Mail = $_POST['Mail'];
    $Password = $_POST['Password'];

    //Comprobar si existe registro
    $exist = "SELECT * FROM users WHERE Mail='$Mail'";
    if( mysqli_num_rows(mysqli_query($mysqli, $exist))>0){
        echo "El Usuario ingresado ya esxiste.";
    } else {
        //Creando un User nuevo
        $query = "INSERT INTO users(Name, Lastname, Mail, Password)
                VALUES('$Name', '$Lastname', '$Mail', '$Password')";

        if(mysqli_query($mysqli, $query)){
            echo true;
        }else{
            echo 'No se pudo crear un nuevo Contacto';
        }
    }

    mysqli_close($mysqli);
?>