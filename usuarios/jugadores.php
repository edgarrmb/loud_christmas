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
    
    <a href="admin_page.php" class="regresar">🔺</a>

    <h1>Jugadores</h1>

    <section class="container">
        <?php
            $link = mysql_connect("localhost", "root");
            mysql_select_db("loud_christmas", $link);
            $result = mysql_query("SELECT * from jugadores ORDER BY id", $link);
            // comienza un bucle que leera todos los registros existentes en la tabla
            while($row = mysql_fetch_array($result)){
                //$row es un array con todos los campos existentes en la tabla
        ?>

        <div class="card">
            <div class="bg-image">
                <img src="img/jugadores.jpg" alt="">
            </div>
            <div class="pic">
                <img src="img/player.png" alt="">
            </div>
            <div class="info">
                <h3><?= $row['email']; ?></h3>
                <span><i>🎮</i> jugador</span>
                <p>Si el cliente es el cliente, el cliente podrá recibir el servicio de atención al cliente. ¡Que huya menos de las necesidades de la vida, y el que odia los tiempos, que los merezca más penas!</p>
                <div class="icons">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-github"></a>

                    <?php
                    
                        $id = $row['id'];
                        $usuarios = "SELECT * FROM jugadores WHERE id = '$id'";
                    
                    ?>

                    <div onclick="toggle()" id="close"><a href="borrar2.php?id=<?php echo $row["id"];?>">✖</a></div>
                    
                </div>

            </div>
        </div>

        <?php
            } //fin del bucle de instrucciones
            mysql_free_result($result); //Liberamos los registros
            mysql_close($link); //cerramos la conexion con la base de datos
        ?>

    </section>
    
</body>
</html>