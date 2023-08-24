<?php
// include database configuration file
include 'conexion.php';

$_SESSION['sessCustomerID'] = 1;

$query = $conexion->query("SELECT * FROM usuarios WHERE id = " . $_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();

// initializ shopping cart class
include 'La-carta.php';
$cart = new Cart;

// redirect to home if cart is empty
if ($cart->total_items() <= 0) {
    header("Location: index.php");
}

// set customer ID in session
// $_SESSION['sessCustomerID'] = 1;
// // get customer details by session customer ID
// $query = $conexion->query("SELECT * FROM clientes WHERE id = " . $_SESSION['sessCustomerID']);
// $custRow = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pagos - PHP Carrito de compras</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="images/favicon-32x32.png" type="image/png"/>
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/styles.css" />

    <style>
        .container {
            padding: 20px;
        }

        .table {
            width: 65%;
            float: left;
        }

        .shipAddr {
            width: 30%;
            float: left;
            margin-left: 30px;
        }

        .footBtn {
            width: 95%;
            float: left;
        }

        .orderBtn {
            float: right;
        }
    </style>
</head>

<body>


<header class="header">
      <!-- ====== Navigation ====== -->
      <nav class="navbar">
        <div class="row container d-flex">
          <div class="logo">
            <img src="./images/logo.png" alt="" />
          </div>
          <div class="nav-list d-flex">
            <!-- <a href="index.php">Inicio</a>
            <a href="categorias.php">Tienda</a>
            <a href="VerCarta.php">Carrito</a>
            <a href="info.php">Sobre nosotros</a> -->
            <div class="close">
              <i class="bx bx-x"></i>
            </div>
            <a class="user-link"> </a>
          </div>

          <div class="icons d-flex">
            <!-- <div class="icon d-flex"><i class="bx bx-search"></i></div> -->
            <div class="icon user-icon d-flex">
              <i class="bx bx-user"><?php echo $custRow['usuario']; ?></i>
              
            <!-- </div>
            <div class="icon d-flex">
            <i class='bx bx-exit'><a href="login.php">logout</a></i>
            </div>
          </div> -->

          <!-- Hamburger -->
          <div class="hamburger">
            <i class="bx bx-menu-alt-right"></i>
          </div> 
        </div>
      </nav>

      <!-- ====== Hero Area ====== -->
      <!-- <div class="hero">
        <div class="row container d-flex">
          <div class="col">
            <span class="subtitle">Donde te sientes como en casa</span>
            <h1>Sincron<span class="i">i</span>as</h1>
            <p>COMPRAR CALIDAD CON COMODIDAD</p>

            <button class="btn">Explora más!</button>
          </div>
          <img src="./images/woman-in-cart.png" alt="" />
        </div>
      </div> -->
    </header>




    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">

                <ul class="nav nav-pills">
                    <li role="presentation"><a href="index.php">Inicio</a></li>
                    <li role="presentation"><a href="VerCarta.php">Carrito de Compras</a></li>
                    <li role="presentation" class="active"><a href="Pagos.php">Pagar</a></li>
                </ul>
            </div>

            <div class="panel-body">
                <h1>Vista previa de la Orden</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Pricio</th>
                            <th>Cantidad</th>
                            <th>Sub total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($cart->total_items() > 0) {
                            //get cart items from session
                            $cartItems = $cart->contents();
                            foreach ($cartItems as $item) {
                        ?>
                                <tr>
                                    <td><?php echo $item["nombre"]; ?></td>
                                    <td><?php echo '$' . $item["precio"] . ' COP'; ?></td>
                                    <td><?php echo $item["qty"]; ?></td>
                                    <td><?php echo '$' . $item["subtotal"] . ' COP'; ?></td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="4">
                                    <p>No hay articulos en tu carta......</p>
                                </td>
                            <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3"></td>
                            <?php if ($cart->total_items() > 0) { ?>
                                <td class="text-center"><strong>Total <?php echo '$' . $cart->total() . ' COP'; ?></strong></td>
                            <?php } ?>
                        </tr>
                    </tfoot>
                </table>
                <div class="shipAddr">
                    <h4>Detalles de envío</h4>
                    <p><?php echo $custRow['usuario']; ?></p>
                    <p><?php echo $custRow['email']; ?></p>
                    <p><?php echo $custRow['phone']; ?></p>
                    <p><?php echo $custRow['address']; ?></p>
                </div>
                <div class="footBtn">
                    <a href="categorias.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Comprando</a>
                    <a href="metodo_pago.php" class="btn btn-success orderBtn">Realizar pedido <i class="glyphicon glyphicon-menu-right"></i></a>
                </div>
            </div>
            
    </div>
</body>

</html>