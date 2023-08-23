<?php

session_start();
require_once 'conexion.php';

$_SESSION['sessCustomerID'] = 1;

$query = $conexion->query("SELECT * FROM usuarios WHERE id = " . $_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/favicon-32x32.png" type="image/png"/>
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/styles.css" />
    <title>Sincronias</title>
  </head>
  <body>
    <!-- ====== Header ====== -->
    <header class="header">
      <!-- ====== Navigation ====== -->
      <nav class="navbar">
        <div class="row container d-flex">
          <div class="logo">
            <img src="./images/logo.png" alt="" />
          </div>

          <div class="nav-list d-flex">
            <a href="index.php">Inicio</a>
            <a href="categorias.php">Tienda</a>
            <a href="VerCarta.php">Carrito</a>
            <a href="info.html">Sobre nosotros</a>
            <div class="close">
              <i class="bx bx-x"></i>
            </div>
            <a class="user-link">Login</a>
          </div>

          <div class="icons d-flex">
            <!-- <div class="icon d-flex"><i class="bx bx-search"></i></div> -->
            <div class="icon user-icon d-flex">
              <i class="bx bx-user"><?php echo $custRow['usuario']; ?></i>
            </div>
            <!-- <div class="icon d-flex">
              <i class="bx bx-bell"></i> -->
              <span></span>
            </div>
          </div>

          <!-- Hamburger -->
          <div class="hamburger">
            <i class="bx bx-menu-alt-right"></i>
          </div> 
        </div>
      </nav>

      <!-- ====== Sobre Nosotros ====== -->
      <div class="info">
        <div class="row container d-flex">
          <div class="col">
            <h2>Acerca de  Nosotros</span>as</h2><br></br>
            <h3 class="subtitle">Misión</h3>
            <p>Nuestra misión es transformar el sistema de cómo se ha venido realizando el comercio en nuestro país para poder ser una fuente de ingresos para muchas personas que se van a beneficiar a través de nuestra plataforma tecnológica donde podrán utilizarla para convertirse en emprendedores y generar dinero extra que les permita tener ingresos dignos para su realización personal y sus familias.</p><br></br>
            <h3 class="subtitle">Visión</h3>
            <p>Ser la manufacturera en Costa Rica más grande en la confección de prendas de dama en la parte de blusas, vestidos y shores, también en el departamento de caballeros en el area de camisas, shores y bóxer. También convertir la empresa en una fuente de empleo para más de 100 personas en el sector de Heredia y sus alrededores.</p>
            
      </div>
    </header>

    <!-- ====== Footer ====== -->
    <footer class="footer">
        <div class="row container">
          <div class="col">
            <div class="logo d-flex">
              <img src="./images/logo.png" alt="logo" />
            </div>
            <p>
              Lorem ispum is a placeholder text <br />
              commonly used as a free text.
            </p>
            <div class="icons d-flex">
              <div class="icon d-flex">
                <i class="bx bxl-facebook"></i>
              </div>
              <div class="icon d-flex"><i class="bx bxl-twitter"></i></div>
              <div class="icon d-flex"><i class="bx bxl-instagram"></i></div>
              <div class="icon d-flex"><i class="bx bxl-youtube"></i></div>
            </div>
            <p class="color">
              Copyrights 2023 <br />
              @sincronias
            </p>
          </div>
          <div class="col">
            <div>
              <h4>Producto</h4>
              <a href="">Precios</a>
              <a href="">Categorias</a>
            </div>
            <div>
              <h4>Categoria</h4>
              <a href="">Caballeros</a>
              <a href="">Damas</a>
              <a href="">Niños</a>
              <a href="">Accesorios</a>
            </div>
            <div>
              <h4>Mi Cuenta</h4>
              <a href="">Mi Perfil</a>
              <a href="">Desconectarse</a>
              <a href="">Historial de ordenes</a>
              <a href="">Rastreo de orden</a>
            </div>
            <div>
              <h4>Contactanos</h4>
              <div class="d-flex">
                <div class="icon"><i class="bx bxs-map"></i></div>
                <span>Av 2, Calle 28, Santa Jose, Costa Rica</span>
              </div>
              <div class="d-flex">
                <div class="icon"><i class="bx bxs-envelope"></i></div>
                <span>info@sincronias.com</span>
              </div>
              <div class="d-flex">
                <div class="icon"><i class="bx bxs-phone"></i></div>
                <span>+506 8978 9001</span>
              </div>
            </div>
          </div>
        </div>
      </footer>