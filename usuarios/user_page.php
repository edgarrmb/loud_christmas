<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Usuario</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<h1 class="title"> <span>perfil</span> usuario </h1>

<section class="profile-container">

   <?php
      $select_profile = $conn->prepare("SELECT * FROM `usuarios` WHERE id = ?");
      $select_profile->execute([$user_id]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>

   <div class="profile">
      <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
      <h3><?= $fetch_profile['name']; ?></h3>
      <a href="user_profile_update.php" class="btn">actualización del perfil</a>
      <a href="logout.php" class="delete-btn">cerrar sesión</a>
      <div class="flex-btn">
         <a href="login.php" class="option-btn">iniciar sesión</a>
         <a href="register.php" class="option-btn">Registrarse</a>
      </div>
   </div>

</section>

</body>
</html>