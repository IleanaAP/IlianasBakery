<?php
include("acceso.php");

$nombreR = $_POST['nombreRegistro'];
$apellidoR = $_POST['apellidoRegistro'];
$emailR = $_POST['emailRegistro'];

$sql = "INSERT INTO registro (nombreR, apellidoR, emailR) VALUES ('$nombreR', '$apellidoR', '$emailR')";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro exitoso - Iliana's Bakery</title>
  <link rel="icon" type="image/png" href="img/logo_IlianasBakery.png" />

  <!--Google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">

  <!--CSS stylesheets -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

  <!-- Font awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- bootstrap script -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</head>
<body>
  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <a class="btn btn-md btn-outline-secondary" href="https://www.facebook.com/ilianampp" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a>
        </div>
        <div class="col-4 text-center">
          <a href="index.html"><img class="blog-header-logo" src="img/logo_IlianasBakery.png" alt width="150" height="150"></a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="btn btn-md btn-outline-secondary" href="carrito.php"><i class="fas fa-shopping-basket"></i> Pedidos</a>
        </div>
      </div>
    </header>

    <hr>

    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 text-muted" href="index.html">Inicio</a>
        <a class="p-2 text-muted" href="index.html#productos">Productos</a>
        <a class="p-2 text-muted" href="index.html#conocenos">Conócenos</a>
        <a class="p-2 text-muted" href="index.html#contacto">Contacto</a>
      </nav>
    </div>
  </div>

  <div class="container">
    <!--
    <div class="alert alert-success" role="alert">
  		Registrado con éxito
	  </div>

    <div class="embed-responsive embed-responsive-16by9 mx-auto" style="width: 500px;">
      <iframe src="https://giphy.com/embed/UQCsGMBbStyUvdKrWK" width="444" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
	  </div>

    <a class="btn btn-primary" href="index.html" role="button">Regresar</a>
  </div>
-->

		<?php
		if (mysqli_query($conn, $sql)) {
      echo "<div class='alert alert-success' role='alert'>Regitrado con éxito</div>";
      echo "<div class='embed-responsive embed-responsive-16by9 mx-auto' style='width: 500px;'>
        <iframe src='https://giphy.com/embed/UQCsGMBbStyUvdKrWK' width='444' height='480' frameborder='0' class='giphy-embed' allowFullScreen></iframe></div>";
		} else {
			echo "Hubo un error en el registro. Intente de nuevo";
		}
		mysqli_close($conn);
		?>

    <a class="btn btn-primary" href="index.html" role="button" style="margin-bottom: 30px;">Regresar</a>


  <!-- Footer -->
  <footer id="footer" class="blog-footer">
    <br />
    <a class="footer-link" href="index.html">Inicio</a>
    <a class="footer-link" href="index.html#productos">Productos</a>
    <a class="footer-link" href="index.html#conocenos">Conócenos</a>
    <a class="footer-link" href="index.html#contacto">Contacto</a>
    <br /><br />
    <p>© Copyright 2020 Iliana's Bakery</p>
    <p>
      <a href="#">Subir</a>
    </p>
  </footer>
</body>
</html>
