<?php
    require 'connect.php';
    session_start();
    $User = $_SESSION['Id'];

    $Name = $_POST['Name'];
    $Lastname = $_POST['Lastname'];
    $Mail = $_POST['Mail'];
    $Address = $_POST['Address'];
    $Phone = $_POST['Phone'];
    $Birthday = $_POST['Birthday'];

    //Comprobar si existe registro
    $exist = "SELECT * FROM contacts WHERE Name='$Name' AND Lastname='$Lastname' AND IdUsers='$User'";
    if( mysqli_num_rows(mysqli_query($mysqli, $exist))>0){
        echo "El Contacto ingresado ya esxiste en su lista";
    } else {
        //Creando un Contacto nuevo
        $query = "INSERT INTO contacts(Name, Lastname, Mail, Address, Phone, Birthday, IdUsers)
                VALUES('$Name', '$Lastname', '$Mail', '$Address', '$Phone', '$Birthday', '$User')";

        if(mysqli_query($mysqli, $query)){
            echo true;
        }else{
            echo 'No se pudo crear un nuevo Contacto';
        }
    }

    mysqli_close($mysqli);
?>