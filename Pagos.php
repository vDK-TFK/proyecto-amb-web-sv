<?php
// Include the database configuration file
include 'conexion.php';

// Initialize the shopping cart class
include 'La-carta.php';
$cart = new Cart;

// Redirect to home if cart is empty
if ($cart->total_items() <= 0) {
    header("Location: index.php");
    exit;
}

if (isset($_SESSION['sessCustomerID'])) {
    $customerID = $_SESSION['sessCustomerID'];

    // Get customer details by customer ID
    $query = $conexion->query("SELECT * FROM usuarios WHERE id = $customerID");
    $custRow = $query->fetch_assoc();

    // If the customer is not found, you can handle it accordingly, for example, redirecting to the login page.
    if (!$custRow) {
        header("Location: login.php"); // Change 'login.php' to the correct login page URL.
        exit;
    }
} else {
    // If the user is not logged in, you can handle it accordingly, for example, redirecting to the login page.
    header("Location: login.php"); // Change 'login.php' to the correct login page URL.
    exit;
}
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
                                    <td><?php echo '$' . $item["precio"] . ' USD'; ?></td>
                                    <td><?php echo $item["qty"]; ?></td>
                                    <td><?php echo '$' . $item["subtotal"] . ' USD'; ?></td>
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
                                <td class="text-center"><strong>Total <?php echo '$' . $cart->total() . ' USD'; ?></strong></td>
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
                    <script src="https://www.paypal.com/sdk/js?client-id=ARJaC63k7wGWEdvdTHtT-t9yNJixpmW48t0LQscaPloZ4Yx7jKf5Y7xmPrNq7BLb86U_8-PbtMEtZz0y&currency=USD"></script>

<!-- Configura un elemento de contenedor para el botón -->
<div id="paypal-button-container"></div>

<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // Aquí puedes personalizar la orden que se enviará a PayPal
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '<?php echo $cart->total(); ?>', // Total del carrito
            currency_code: 'USD'
          },
          description: 'Compra en tu tienda en línea' // Descripción de la compra
        }]
      });
    },
    onApprove: function(data, actions) {
      // Aquí puedes manejar el evento de aprobación del pago
      return actions.order.capture().then(function(details) {
        // Aquí puedes mostrar un mensaje de éxito o redirigir al usuario a una página de confirmación
        alert('Pago completado con éxito. ID de transacción: ' + details.id);
        
        // Redirige al usuario a la página de confirmación con los detalles de la orden
        window.location.href = 'procesar_formulario.php?order_id=' + details.id + '&payment_success=true';
      });
    },
    onError: function(err) {
      // Aquí puedes manejar los errores que ocurran durante el proceso de pago
      console.log(err);
      alert('Ha ocurrido un error durante el proceso de pago. Por favor, inténtalo de nuevo.');
    }
  }).render('#paypal-button-container');
</script>

</script>
                </div>
            </div>
            
    </div>
</body>

</html>