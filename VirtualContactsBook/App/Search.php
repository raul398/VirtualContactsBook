<?php
    require 'connect.php';
    session_start();
    $User = $_SESSION['Id'];

    //Comprobar si existe registro
    $query = "SELECT * FROM contacts WHERE IdUsers = $User ORDER BY Id" ;
    if(!empty($_POST['Query'])){
        $q = $_POST['Query'];
        $query = "SELECT Id, Name, Lastname, Mail, Address, Phone, Birthday
                    FROM contacts
                    WHERE IdUsers = $User
                    AND (Name LIKE '%$q%'
                    OR Lastname LIKE '%$q%'
                    OR Mail LIKE '%$q%'
                    OR Address LIKE '%$q%'
                    OR Phone LIKE '%$q%'
                    OR Birthday LIKE '%$q%') 
                    ORDER BY Id";
    };

    $Result = mysqli_query($mysqli, $query);
    if( mysqli_num_rows(mysqli_query($mysqli, $query))>0){
        $Out = '';
        $ID = 1;
        while($row = mysqli_fetch_assoc($Result)){
            $Out .= '<tr id="'.$ID.'">
                        <th scope="row">'.$ID.'</th>
                        <td>'.$row['Name'].'</td>
                        <td>'.$row['Lastname'].'</td>
                        <td>'.$row['Mail'].'</td>
                        <td>'.$row['Address'].'</td>
                        <td>'.$row['Phone'].'</td>
                        <td>'.$row['Birthday'].'</td>
                        <td><a type="button" class="Dancing text-white Delete" id="'.$row['Id'].'" href="#" data-toggle="modal" data-target="#deleteModal">Delete</a>
                            <a type="button" class="Dancing text-white Edit" id="'.$row['Id'].'" href="#" data-toggle="modal" data-target="#editModal">Edit</a></td>
                    </tr>';
            $ID += 1;
        }

        echo json_encode($Out, JSON_UNESCAPED_UNICODE);
    }else{
        echo 'noData';
    }

    exit
?>