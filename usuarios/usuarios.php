<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style2.css">
    
    <title>Usuarios</title>
</head>
<body>

    <h1>nuestra sección de equipo</h1>

    <section class="container">
    <?php
        $link = mysql_connect("localhost", "root");
        mysql_select_db("loud_christmas", $link);
        $result = mysql_query("SELECT * from usuarios ORDER BY id", $link);
        // comienza un bucle que leera todos los registros existentes en la tabla
        while($row = mysql_fetch_array($result)){
            //$row es un array con todos los campos existentes en la tabla
            echo "<hr>";
            echo "Nombre: ".$row['name']."<br>";
            echo "Email: ".$row['email']."<br>";
            echo " ".$row['user_type']."<br>";
        } //fin del bucle de instrucciones
        mysql_free_result($result); //Liberamos los registros
        mysql_close($link); //cerramos la conexion con la base de datos
    ?>

    <?php
      $select_profile = $conn->prepare("SELECT * FROM `usuarios` WHERE id = ?");
      $select_profile->execute([$admin_id]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>

        <div class="card">
            <div class="bg-image">
                <img src="img/bg-image.jpg" alt="">
            </div>
            <div class="pic">
                <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
            </div>
            <div class="info">
                <h3><?= $fetch_profile['name']; ?></h3>
                <span><i class="fas fa-code"></i> Diseñador web </span>
                <p>Si el cliente es el cliente, el cliente podrá recibir el servicio de atención al cliente. ¡Que huya menos de las necesidades de la vida, y el que odia los tiempos, que los merezca más penas!</p>
                <div class="icons">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-github"></a>
                </div>

            </div>
        </div>
    

    </section>
    
</body>
</html>