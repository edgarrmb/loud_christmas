<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
    
   $email = mysqli_real_escape_string($conn, $_POST['usermail']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   $select = " SELECT * FROM jugadores WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'El usuario ya existe';
   }else{
      if($pass != $cpass){
         $error[] = '¡contraseña no coincide!';
      }else{
         $insert = "INSERT INTO jugadores(email, password) VALUES('$email','$pass')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registrarse</title>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="../usuarios/css/style2.css">
</head>
<body>
    
<div class="form-container">
   <a href="login_form.php" class="close2">✖️</a>

   <form action="" method="post">
      <h3 class="title">Regístrate ahora</h3>
      <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
      <input type="email" name="usermail" placeholder="Introduce tu correo electrónico" class="box" required>
      <input type="password" name="password" placeholder="Ingresa tu contraseña" class="box" required>
      <input type="password" name="cpassword" placeholder="Confirmar la contraseña" class="box" required>
      <input type="submit" value="Regístrate ahora" class="form-btn" name="submit">
      <p>¿Ya tienes una cuenta? <a href="login_form.php">¡Inicia sesión ahora!</a></p>
   </form>

</div>

</body>
</html>