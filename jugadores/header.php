<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Jugador</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div class="container">
   <div class="content">
      <h3>¡Bienvenidos!</h3>
      <p>La empresa en sí es una empresa muy exitosa. El dolor es, por tanto, el más necesario de obtener, y odia todo menos el todo en los momentos oportunos.</p>
      <p>Tu correo electrónico : <span><?php echo $_SESSION['usermail']; ?></span></p>
      <a href="logout.php" class="logout">cerrar sesión</a>
   </div>
</div>

</body>
</html>