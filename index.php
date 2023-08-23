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
            <a href="info.php">Sobre nosotros</a>
            <div class="close">
              <i class="bx bx-x"></i>
            </div>
            <a class="user-link"> </a>
          </div>

          <div class="icons d-flex">
            <!-- <div class="icon d-flex"><i class="bx bx-search"></i></div> -->
            <div class="icon user-icon d-flex">
              <i class="bx bx-user"><?php echo $custRow['usuario']; ?></i>
              
            </div>
            <div class="icon d-flex">
            <i class='bx bx-exit'><a href="login.php">logout</a></i>
            </div>
          </div>

          <!-- Hamburger -->
          <div class="hamburger">
            <i class="bx bx-menu-alt-right"></i>
          </div> 
        </div>
      </nav>

      <!-- ====== Hero Area ====== -->
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
    </header>
    <!-- ====== Collection ====== -->
    <section class="section collection">
      <div class="title">
        <span>Categorias</span>
        <h2>Nuestra coleccion</h2>
      </div>
      <div class="filters d-flex">
        <a href="cat_mujer.php"><div data-filter="Mujeres">Mujer</div></a>
        <a href="cat_niño.php"><div data-filter="Niños">Niños</div></a>
        <a href="cat_hombre.php"><div data-filter="Hombres">Hombres</div></a>
        <!-- <div data-filter="Accesorios">Accesorios</div> -->
      </div>
      <!--Ropa para bebe-->
      <div class="products container">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper" id="products">
            <div class="swiper-slide">
               <div class="product">
                <div class="top d-flex">
                  <img src="./images/niño.png" alt="" />
                  <div class="icon d-flex">
                    <i class="bx bxs-heart"></i>
                  </div>
                </div>
                <div class="bottom">
                  <h4>Ropa para Bebe </h4>
                  <div class="d-flex">
                    <!-- <div class="price">Ver mas</div> -->
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
      <!--Ropa para Mujer-->
      <div class="products container">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper" id="products">
            <div class="swiper-slide">
               <div class="product">
                <div class="top d-flex">
                  <img src="./images/Mujer0.png" alt="" />
                  <div class="icon d-flex">
                    <i class="bx bxs-heart"></i>
                  </div>
                </div>
                <div class="bottom">
                  <h4>Ropa para Mujer </h4>
                  <div class="d-flex">
                    <!-- <div class="price">Ver mas</div> -->
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
      <!--Ropa para Hombre-->
      <div class="products container">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper" id="products">
            <div class="swiper-slide">
               <div class="product">
                <div class="top d-flex">
                  <img src="./images/Ropa_de_hombre-transformed.png" alt="" />
                  <div class="icon d-flex">
                    <i class="bx bxs-heart"></i>
                  </div>
                </div>
                <div class="bottom">
                  <h4>Ropa para Hombre </h4>
                  <div class="d-flex">
                    <!-- <div class="price"> <a href="categorias.html">Ver mas</a></div> -->
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
    </section>

    <!-- ====== New Arrival ====== -->
    <!-- <section class="section new-arrival">
      <div class="title">
        <span>NUEVA LLEGADA</span>
        <h2>Ultima Coleccion</h2>
      </div>

      <div class="row container">
        <div class="col col-1">
          <img src="./images/poster-1.png" alt="" />
          <h3>
            Tendencias 2023 <br />
            Falda elegante para mujer
          </h3>
        </div>
        <div class="col col-2">
          <img src="./images/poster-2.png" alt="" />
          <h3>
            Tendencias 2023 <br />
            Falda elegante para mujer
          </h3>
        </div>
        <div class="col col-3">
          <img src="./images/poster-3.png" alt="" />
          <h3>
            Tendencias 2023 <br />
            Camisa elegante de mujer <br />
            <span>Descubrir más:</span>
          </h3>
        </div>
      </div>
    </section> -->

    <!-- ====== Categories ====== -->
    <!-- <section class="section categories">
      <div class="title">
        <span>CATALOGO</span>
        <h2>2023 última colección</h2>
      </div>

      <div class="products container">
        <div class="product">
          <div class="top d-flex">
            <img src="./images/Mujer1.png" alt="" />
            <div class="icon d-flex">
              <i class="bx bxs-heart"></i>
            </div>
          </div>
          <div class="bottom">
            <div class="d-flex">
              <h4>Vestido de mujer blanco con lazo al frente</h4>
              <a href="" class="btn cart-btn">Agregar al carrito</a>
            </div>
            <div class="d-flex">
              <div class="price">Ver mas</div>
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

      <div class="button d-flex">
        <a class="btn loadmore">Cargar más</a>
      </div>
    </section> -->

    <!-- ====== Statistics ====== -->
    <section class="section statistics">
      <div class="title">
        <span>Cualidades</span>
        <h2>Nuestras Cualidades</h2>
      </div>

      <div class="row container">
        <div class="col">
          <div class="icon">
            <i class="bx bxs-check-square"></i>
          </div>
          <h3>Facil de ordenar</h3>
          <p>Lorem Ispum is a placeholder text commomly used as a free text.</p>
        </div>
        <div class="col">
          <div class="icon">
            <i class="bx bxs-user"></i>
          </div>
          <h3>Entrega a tiempo</h3>
          <p>Lorem Ispum is a placeholder text commomly used as a free text.</p>
        </div>
        <div class="col">
          <div class="icon">
            <i class="bx bxs-dollar-circle"></i>
          </div>
          <h3>Garantía de devolución</h3>
          <p>Lorem Ispum is a placeholder text commomly used as a free text.</p>
        </div>
        <div class="col">
          <div class="icon">
            <i class="bx bxs-user"></i>
          </div>
          <h3>Servicio al cliente 24/7</h3>
          <p>Lorem Ispum is a placeholder text commomly used as a free text.</p>
        </div>
      </div>
    </section>

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
            <!-- <a href="">Niños</a>
            <a href="">Accesorios</a> -->
          </div>
          <div>
            <h4>Mi Cuenta</h4>
            <a href="">Mi Perfil</a>
            <!-- <a href="">Desconectarse</a>
            <a href="">Historial de ordenes</a>
            <a href="">Rastreo de orden</a> -->
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

    <!-- ====== Login and Signup Form ====== -->
    <div class="user-form">
      <div class="close-form d-flex"><i class="bx bx-x"></i></div>
      <div class="form-wrapper container">
        <div class="user login">
          <div class="img-box">
            <img src="./images/login.svg" alt="" />
          </div>
          <div class="form-box">
            <div class="top">
              <p>
                No eres miembro?
                <span data-id="#ff0066">Registrate aqui</span>
              </p>
            </div>
            <form action="">
              <div class="form-control">
                <h2>Hola de nuevo!</h2>
                <p>Bienvenido de nuevo se te ha extrañado.</p>
                <input type="text" placeholder="Ingresa tu usuario" />
                <div>
                  <input type="password" placeholder="Contraseña" />
                  <div class="icon form-icon">
                    <!-- <img src="./images/eye.svg" alt="" /> -->
                  </div>
                </div>
                <span>Recuperar contraseña</span>
                <input type="Submit" value="Login" />
              </div>
            </form>
          </div>
        </div>

        <!-- Register -->
        <div class="user signup">
          <div class="form-box">
            <div class="top">
              <p>
                Ya eres miembro?
                <span data-id="#1a1aff">Entra aqui</span>
              </p>
            </div>
            <form action="">
              <div class="form-control">
                <h2>Bienvenido a Sincronias!</h2>
                <p>Es bueno tenerte..</p>
                <input type="email" placeholder="Ingresa un correo" />
                <div>
                  <input type="password" placeholder="Contraseña" />
                  <div class="icon form-icon">
                    <img src="./images/eye.svg" alt="" />
                  </div>
                </div>
                <div>
                  <input type="password" placeholder="Confirmar Contraseña" />
                  <div class="icon form-icon">
                    <img src="./images/eye.svg" alt="" />
                  </div>
                </div>
                <input type="Submit" value="Registrarse" />
              </div>
            </form>
          </div>
          <div class="img-box">
            <img src="./images/trial.svg" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- ====== SwiperJs ====== -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- ====== Custom Script ====== -->
    <script src="./js/product.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>
