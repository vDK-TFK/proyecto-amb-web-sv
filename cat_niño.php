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
            <!-- <div class="icon d-flex"> -->
              <!-- <i class="bx bx-bell"></i> -->
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
        <a href="cat_niño.php"><div data-filter="Niños" class="active">Niños</div></a>
        <a href="cat_hombre.php"><div data-filter="Hombres">Hombre</div></a>
        <!-- <div data-filter="Accesorios">Accesorios</div> -->
      </div>

      <?php
    //get rows query
    $query = $conexion->query("SELECT * FROM pro_niño ORDER BY id DESC LIMIT 10");
    if ($query->num_rows > 0) {
        while ($row = $query->fetch_assoc()) {
    ?>
        <div class="products container">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper" id="products">
            <div class="swiper-slide">
               <div class="product">
                <div class="top d-flex">
                  <!-- <img src="./images/product-1.png" alt="" /> -->
                  <img src="data:image;base64,<?php echo base64_encode($row["imagen"]); ?>" >
                  <div class="icon d-flex">
                    <i class="bx bxs-heart"></i>
                  </div>
                </div>
                <div class="bottom">
                  <h4><?php echo $row["nombre"]; ?></h4>
                  <p style="font-size: x-large;"><?php echo $row["descripcion"]; ?></p><br><br>
                  <div class="d-flex">
                    <div class="price"><?php echo '$' . $row["precio"] . ' ₡'; ?></div><br>
                    <div class="price">
                    <a class="btn btn-success" href="AccionCarta_niño.php?action=addToCart&id=<?php echo $row["id"]; ?>">Enviar al Carrito</a>
                    </div>
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
    </div>
    <?php
        }
    } else {
    ?>
        <p>Producto(s) no existe.....</p>
    <?php
    }
    ?>

    
        <!-- <div class="pagination">
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
</body>