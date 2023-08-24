<?php
$credenciales_validas = false;
session_start();
require_once 'conexion.php';

// Supongamos que has verificado las credenciales del usuario y has obtenido su ID correctamente.
if ($credenciales_validas) {
    // Obtener la ID del usuario desde la base de datos (reemplaza 'tu_tabla' y 'tu_columna_id' con los nombres correctos).
    $sql = "SELECT id FROM usuarios WHERE correo = '$correo'";
    $result = $conexion->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $id_del_usuario = $row['id'];

        // Establecer la ID del usuario autenticado en la sesión.
        $_SESSION['sessCustomerID'] = $id_del_usuario;
    } else {
        // Tratar la autenticación fallida aquí, redirigir al usuario a la página de inicio de sesión, por ejemplo.
    }
} else {
    // Tratar la autenticación fallida aquí, redirigir al usuario a la página de inicio de sesión, por ejemplo.
}

// Ahora puedes usar $_SESSION['sessCustomerID'] en tus consultas como lo estás haciendo en tu código actual.
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
            <i class='bx bx-exit'><a href="logout.php">logout</a></i>
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

  <!-- Sección para mostrar los comentarios -->
<section class="section comments">
    <div class="title">
        <span>Comentarios</span>
        <h2>Lo que dicen nuestros clientes</h2>
    </div>
    
    <!-- Contenedor de comentarios -->
    <div class="comment-container">
        <?php
        // Conexión a la base de datos (mismo código que antes)
        // Consulta para obtener los últimos 5 comentarios almacenados
        $comentariosSql = "SELECT nombre, comentario, fecha FROM comentarios ORDER BY fecha DESC LIMIT 5";
        $comentariosResult = $conexion->query($comentariosSql);
        
        if ($comentariosResult->num_rows > 0) {
            while ($row = $comentariosResult->fetch_assoc()) {
                echo '<div class="comment">';
                echo '<div class="user">';
                echo '<h4>' . $row['nombre'] . '</h4>';
                echo '</div>';
                echo '<p>' . $row['comentario'] . '</p>';
                echo '<p class="date">' . $row['fecha'] . '</p>';
                echo '</div>';
            }
        } else {
            echo 'No hay comentarios aún.';
        }
        
        // Cierra la conexión a la base de datos
        $conexion->close();
        ?>
    </div>

    <!-- Formulario de comentarios -->
    <form action="../proyecto1/funcionaliades/comentarios.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $custRow['usuario']; ?>" readonly required>
        
        <label for="comentario">Comentario:</label>
        <textarea name="comentario" rows="4" required></textarea>
        
        <button type="submit">Enviar Comentario</button>
    </form>
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
            <a href="">Niños</a>
            <!-- <a href="">Accesorios</a> -->
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

    <!-- ====== SwiperJs ====== -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
    // Función para desplazar automáticamente los comentarios hacia la derecha
    function scrollComments() {
        const commentContainer = document.querySelector('.comment-container');
        commentContainer.scrollLeft += 220; // Ajusta la cantidad de desplazamiento según el ancho de las tarjetas
    }

    // Llama a la función de desplazamiento cada cierto tiempo (por ejemplo, cada 5 segundos)
    setInterval(scrollComments, 5000); // Ajusta el tiempo según tus preferencias
</script>

    <!-- ====== Custom Script ====== -->
    <script src="./js/product.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>
