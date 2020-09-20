<?php
    require 'connect.php';
    session_start();
    $User = $_SESSION['Id'];

    $Id = $_POST['Id'];
    $Name = $_POST['Name'];
    $Lastname = $_POST['Lastname'];
    $Mail = $_POST['Mail'];
    $Address = $_POST['Address'];
    $Phone = $_POST['Phone'];
    $Birthday = $_POST['Birthday'];


    //Sentencia SQL para actualizar registro
    $prev = 0;
    $update = '';
    $update .= "UPDATE contacts SET ";
    if (!empty($Name)) {
        $update .= "Name = '$Name'";
        $prev += 1;
    }
    if (!empty($Lastname)) {
        if ($prev > 0) {
            $update .= ", Lastname = '$Lastname'";
        } else {
            $update .= "Lastname = '$Lastname'";
        }
        $prev += 1;
    }
    if (!empty($Mail)) {
        if ($prev > 0) {
            $update .= ", Mail = '$Mail'";
        } else {
            $update .= "Mail = '$Mail'";
        }
        $prev += 1;
    }
    if (!empty($Address)) {
        if ($prev > 0) {
            $update .= ", Address = '$Address'";
        } else {
            $update .= "Address = '$Address'";
        }
        $prev += 1;
    }
    if (!empty($Phone)) {
        if ($prev > 0) {
            $update .= ", Phone = '$Phone'";
        } else {
            $update .= "Phone = '$Phone'";
        }
        $prev += 1;
    }
    if (!empty($Birthday)) {
        if ($prev > 0) {
            $update .= ", Birthday = '$Birthday'";
        } else {
            $update .= "Birthday = '$Birthday'";
        }
        $prev += 1;
    }    
    $update .= " WHERE Id = '$Id' AND IdUsers='$User'";
    
    mysqli_query($mysqli, $update);
    
    //Comprobar si existe registro

    $exist = "";
    $exist .= "SELECT * FROM contacts ";    
    $exist .= "WHERE Id = '$Id' AND IdUsers='$User' ";
    if (!empty($Name)) {
        $exist .= "AND Name = '$Name'";
    }
    if (!empty($Lastname)) {
        $exist .= "AND Lastname = '$Lastname'";
    }
    if (!empty($Mail)) {
        $exist .= "AND Mail = '$Mail'";
    }
    if (!empty($Address)) {
        $exist .= "AND Address = '$Address'";
    }
    if (!empty($Phone)) {
        $exist .= "AND Phone = '$Phone'";
    }
    if (!empty($Birthday)) {
        $exist .= "AND Birthday = '$Birthday'";
    }
    
    $Result = mysqli_query($mysqli, $exist);

    if( mysqli_num_rows(mysqli_query($mysqli, $exist))>0){
        echo true;
    } else {
        echo "El Contacto No pudo ser actualizado de su lista su lista";
    }

    mysqli_close($mysqli);
?>