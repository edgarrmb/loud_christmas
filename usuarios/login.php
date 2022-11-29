<?php

include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select = $conn->prepare("SELECT * FROM `usuarios` WHERE email = ? AND password = ?");
   $select->execute([$email, $pass]);
   $row = $select->fetch(PDO::FETCH_ASSOC);

   if($select->rowCount() > 0){

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_id'] = $row['id'];
         header('location:user_page.php');

      }else{
         $message[] = '¡Ningún usuario encontrado!';
      }
      
   }else{
      $message[] = '¡Correo o contraseña incorrectos!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Iniciar sesión</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="style.css">

</head>
<body>

<a href="../index.php" target="_blank" class="cerrar">X</a>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

   
<section class="form-container">
   
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3>Inicia sesión ahora</h3>
      <input type="email" required placeholder="Introduce tu correo electrónico" class="box" name="email">
      <input type="password" required placeholder="Ingresa tu contraseña" class="box" name="pass">
      <p>¿no tienes una cuenta? <a href="register.php">Regístrate ahora</a></p>
      <input type="submit" value="Inicia sesión ahora" class="btn" name="submit">
   </form>

</section>

</body>
</html>