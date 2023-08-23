<?php
session_start();
include 'conexion.php';



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
            <a href="info.php">Sobre nosotros</a>
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

      
    <!-- ====== Collection ====== -->
    <section class="section collection">
      <div class="title">
        <span>Catalogo</span>
        <h2>Nuestra coleccion</h2>
      </div>
      <div class="filters d-flex">
      <a href="cat_mujer.php"><div data-filter="Mujeres">Mujer</div></a>
        <a href="cat_niño.php"><div data-filter="Niños">Niños</div></a>
        <a href="cat_hombre.php"><div data-filter="Hombres">Hombre</div></a>
        <!-- <div data-filter="Accesorios">Accesorios</div> -->
      </div>

      <div class="hero">
        <div class="row container d-flex">
          <div class="col">
            <span class="subtitle">Donde te sientes como en casa</span>
            <h1>Sincron<span class="i">i</span>as</h1>
            <p>COMPRAR CALIDAD CON COMODIDAD</p>

            <!-- <button class="btn">Explora más!</button> -->
          </div>
          <img src="./images/woman-in-cart.png" alt="" />
        </div>
      </div>

      <!-- <div class="products container">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper" id="products">
            <div class="swiper-slide">
               <div class="product">
                <div class="top d-flex">
                  <img src="./images/product-1.png" alt="" />
                  <div class="icon d-flex">
                    <i class="bx bxs-heart"></i>
                  </div>
                </div>
                <div class="bottom">
                  <h4>Hoodie Nike Air Cabellero - Hoodie importado rojo</h4>
                  <div class="d-flex">
                    <div class="price">₡60000</div>
                    <div class="rating">
                      <i class="bx bxs-star"></i>
                      <i class="bx bxs-star"></i>
                      <i class="bx bxs-star"></i>
                      <i class="bx bxs-star"></i>
                      <i class="bx bxs-star"></i>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>
        <div class="pagination">
          <div class="custom-pagination"></div>
        </div>
      </div>
      <div class="products container">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper" id="products">
            <div class="swiper-slide">
               <div class="product">
                <div class="top d-flex">
                  <img src="./images/product-5.png" alt="" />
                  <div class="icon d-flex">
                    <i class="bx bxs-heart"></i>
                  </div>
                </div>
                <div class="bottom">
                  <h4>Camisa de hombre con estampados</h4>
                  <div class="d-flex">
                    <div class="price">₡23000</div>
                    <div class="rating">
                      <i class="bx bxs-star"></i>
                      <i class="bx bxs-star"></i>
                      <i class="bx bxs-star"></i>
                      <i class="bx bxs-star"></i>
                      <i class="bx bxs-star"></i>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div> -->
    </section>