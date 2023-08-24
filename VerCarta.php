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
    <title>View Cart</title>
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

        input[type="number"] {
            width: 20%;
        }
    </style>
    <script>
        function updateCartItem(obj, id) {
            $.get("cartAction.php", {
                action: "updateCartItem",
                id: id,
                qty: obj.value
            }, function(data) {
                if (data == 'ok') {
                    location.reload();
                } else {
                    alert('Cart update failed, please try again.');
                }
            });
        }
    </script>
</head>
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
            <!-- <a href="index.php">Inicio</a> -->
            <!-- <a href="categorias.php">Tienda</a> -->
            <!-- <a href="VerCarta.php">Carrito</a> -->
            <!-- <a href="info.php">Sobre nosotros</a> -->
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
                    <li role="presentation"><a href="cat_mujer.php">Mujer</a></li>
                    <li role="presentation"><a href="cat_hombre.php">Hombre</a></li>
                    <li role="presentation"><a href="cat_niño.php">Niño</a></li>
                    <li role="presentation" class="active"><a href="VerCarta.php">Carrito de Compras</a></li>
                    <li role="presentation"><a href="Pagos.php">Pagar</a></li>
                </ul>
            </div>

            <div class="panel-body">


                <h1>Carrito de compras</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Sub total</th>
                            <th>&nbsp;</th>
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
                                    <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
                                    <td><?php echo '$' . $item["subtotal"] . ' USD'; ?></td>
                                    <td>
                                        <a href="AccionCarta.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Confirma eliminar?')"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="5">
                                    <p>No has solicitado ningún producto.....</p>
                                </td>
                            <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Volver a la tienda</a></td>
                            <td colspan="2"></td>
                            <?php if ($cart->total_items() > 0) { ?>
                                <td class="text-center"><strong>Total <?php echo '$' . $cart->total() . ' USD'; ?></strong></td>
                                <td><a href="Pagos.php" class="btn btn-success btn-block">Pagos <i class="glyphicon glyphicon-menu-right"></i></a></td>
                            <?php } ?>
                        </tr>
                    </tfoot>
                </table>

            </div>
        

    </div>
</body>

</html>