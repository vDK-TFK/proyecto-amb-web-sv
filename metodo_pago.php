<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title >Formulario de Pagos</title>
</head>
<body>
    <h1 style="position: relative; left: 40%; ">Formulario de Pagos</h1>
    <div style="position:absolute; width: 500px; left: 680px">

    <script src="https://www.paypal.com/sdk/js?client-id=AWomThAFLGHDdh6jGA5p-YwwociTlZs9MbmEIvJdjvzsV3nL5GCLDFTY8EyQI7yBS0LYn-qC6dV4jofs=USD"></script>

<!-- Configura un elemento de contenedor para el botón -->
<div id="paypal-button-container"></div>

<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // Aquí puedes personalizar la orden que se enviará a PayPal
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '', // Precio del freelancer seleccionado
            currency_code: 'USD'
          },
          description: '' // Descripción del freelancer seleccionado
        }]
      });
    },
    onApprove: function(data, actions) {
      // Aquí puedes manejar el evento de aprobación del pago
      return actions.order.capture().then(function(details) {
        // Aquí puedes mostrar un mensaje de éxito o redirigir al usuario a una página de confirmación
        alert('Pago completado con éxito. ID de transacción: ' + details.id);
      });
    },
    onError: function(err) {
      // Aquí puedes manejar los errores que ocurran durante el proceso de pago
      console.log(err);
      alert('Ha ocurrido un error durante el proceso de pago. Por favor, inténtalo de nuevo.');
    }
  }).render('#paypal-button-container');
</script>
    </div>
   
</body>
</html>
