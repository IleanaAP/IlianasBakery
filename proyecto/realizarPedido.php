<!--CODIGO DEL CARRITO/CANASTA DE PEDIDOS. DE MOMENTO NO SE USA -->

<?php
include("acceso.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$nota = $_POST['nota'];
$horario = $_POST['horario'];
$fecha = $_POST['fecha'];

$sql = "INSERT INTO pedidos (nombre, apellido, email, direccion, nota) VALUES ('$nombre', '$apellido', '$email',
  '$direccion', '$nota')";

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pedido - Iliana's Bakery</title>
    <link rel="icon" type="image/png" href="img/logo_IlianasBakery.png" />
  </head>
  <body>
    <a href="index.html">Regresar a inicio</a>
	  <table border="1" width="80%">
		<?php
		if (mysqli_query($conn, $sql)) {
			echo "<tr><td>Pedido realizado con éxito. ¡Nos pondremos en contacto contigo!</td></tr>";
		} else {
			echo "0 results";
		}
		mysqli_close($conn);
		?>
	</table>
  </body>
</html>
