<?php
  require 'connect.php';
  session_start();

  $email = $_POST['email'];
  $password = $_POST['password'];
    
  // Consulta SQL que verifica el usuario que intenta iniciar sesion.
  $query = "SELECT Id FROM users WHERE Mail = '$email' AND Password = '$password'";
  
  $Result = mysqli_query($mysqli, $query);
  if( mysqli_num_rows(mysqli_query($mysqli, $query))>0){
    while($row = mysqli_fetch_assoc($Result)){
      $_SESSION['Id'] = $row['Id'];
    }
    echo true;
  }else{
      echo false;
  }
  exit

?>