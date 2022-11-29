<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loud Christmas</title>

    <!--Animaciones-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!--Carousel-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- Font Awesome cdn   -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Css   -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Logo en la pestaña -->
    <link rel="shortcut icon" href="img/Logo_Jovencitos.png">

</head>
<body>

    <!--Header-->

    <header class="header">

        <a href="#" class="logo" data-aos="fade-right"><img src="img/Logo.png" alt=""></a>

        <!-- <nav class="navbar" data-aos="fade-down">
            
        </nav> -->

        <div class="icons" data-aos="fade-left">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-user" id="login-btn"></a>
            <!-- <a href="#" class="fas fa-shopping-cart"></a> -->
        </div>

        <form action="" class="search-form">
            <input type="search" placeholder="busca aquí..." id="input-box">
            <label for="input-box" class="fas fa-search"></label>
        </form>

        <!-- <form action="" class="login-form">
            <h3>login</h3>
            <input type="email" placeholder="email" class="box">
            <input type="password" placeholder="contraseña" class="box">
            <p>Recuperar contraseña <a href="#">click aquí</a></p>
            <p>¿No tienes cuenta? <a href="#">crar ahora</a></p>
            <input type="submit" value="Entrar" class="btn">
        </form> -->

    </header>

    <!--Home-->

    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box" style="background: url(img/Baner_01.jpg);">
                    <div class="content">
                        <h3>Loud Christmas</h3>
                        <p>Proyecto</p>
                    </div>
                </div>

                <div class="swiper-slide box" style="background: url(img/Baner_02.jpg);">
                    <div class="content">
                        <h3>¿Eres un Usuario?</h3>
                        <p>Registrate Ahora</p>
                        <div class="button">
                            <a href="usuarios/login.php" class="btn">Registrate</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box" style="background: url(img/Baner_03.jpg);">
                    <div class="content">
                        <h3>¿Eres un Jugador?</h3>
                        <p>Registrate Ahora</p>
                        <div class="button">
                            <a href="jugadores/login_form.php" class="btn">Registrate</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box" style="background: url(img/Baner_04.jpg);">
                    <div class="content">
                        <h3>Usuarios</h3>
                        <p>registros</p>
                        <div class="button">
                            <a href="#" class="btn">Ver</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box" style="background: url(img/Baner_05.jpg);">
                    <div class="content">
                        <h3>Jugadores</h3>
                        <p>registros</p>
                        <div class="button">
                            <a href="#" class="btn">Ver</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>
    
</body>

<!--swiper-->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- js  -->
<script src="js/script.js"></script>

<!--Animaciones-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        delay: 400,
        duration: 800
    });
</script>


</html>