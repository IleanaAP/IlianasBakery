<?php
include("acceso.php");

$sql = "SELECT * FROM carrito";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pedido - Iliana's Bakery</title>
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
            <a class="btn btn-md btn-outline-secondary" href=""><i class="fas fa-shopping-basket"></i> Pedidos</a>
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

      <div class="alert alert-warning" role="alert">
    		Esta parte del sitio está en desarrollo, por lo que no funciona actualmente. Se dejó como ilustración de lo que habrá a futuro.
  	  </div>

      <div class="">
        <h2>Pedido</h2>
        <p>A continuación puedes ver un resumen de tu pedido y procede a finalizar el pedido.</p>
      </div>

      <!--Sección de visualización de pedido - CANASTA -->
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flexjustfy-content-between align-items-center mb-3">
            <span class="text-muted">Tu canasta</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between 1h-condensed">
              <div>
                <h6 class="my-0">Primer producto</h6>
                <small class="text-muted">Descripción breve</small>
              </div>
              <span class="text-muted">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between 1h-condensed">
              <div>
                <h6 class="my-0">Segundo producto</h6>
                <small class="text-muted">Descripción breve</small>
              </div>
              <span class="text-muted">$120</span>
            </li>
            <li class="list-group-item d-flex justify-content-between 1h-condensed">
              <div>
                <h6 class="my-0">Tercer producto</h6>
                <small class="text-muted">Descripción breve</small>
              </div>
              <span class="text-muted">$50</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (MXN)</span>
              <strong>$182</strong>
            </li>
          </ul>
        </div>

        <!--Formulario para datos de contacto y entrega de pedidos -->
        <div class="col-md-8 order-md-1 dc">
          <hr class="mb-4" />
          <h4>Datos de contacto</h4>
          <form class="needs-validation" novalidate>
          <!--<form class="needs-validation" action="realizarPedido.php" method="POST" novalidate>-->
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder value required />
                <div class="invalid-feedback">Ingrese un nombre correcto.</div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder value required/>
                <div class="invalid-feedback">Ingrese un apellido correcto.</div>
              </div>
            </div>
            <div class="mb-3">
              <label for="email">Correo electrónico</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com" required />
              <div class="invalid-feedback">Por favor ingrese un correo electrónico correcto.</div>
            </div>
            <div class="mb-3">
              <label for="direccion">Dirección de entrega</label>
              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="calle, número, apartamento/residencial/etc." required />
              <div class="invalid-feedback">Por favor ingrese una dirección de entrega correcta.</div>
            </div>
            <div class="mb-3">
              <label for="nota">Información extra para la entrega <span clas="text-muted">(ej: número de marcación en caseta, etc.)</span></label>
              <textarea class="form-control" id="nota" name="nota" rows="3" required></textarea>
              <div class="invalid-feedback">Ingrese alguna nota importante para la entrega.</div>
            </div>
            <div class="mb-3">
              <label for="horario">Horario de entrega</label>
              <select class="form-control" id="horario" name="horario">
                <option value="1">9:00 am - 9:59 am</option>
                <option value="2">10:00 am - 11:59 am</option>
                <option value="3">11:00 am - 12:59 pm</option>
                <option value="4">12:00 pm - 13:59 pm</option>
                <option value="5">13:00 pm - 14:59 pm</option>
                <option value="6">14:00 pm - 15:59 pm</option>
                <option value="7">15:00 pm - 16:59 pm</option>
                <option value="8">16:00 pm - 17:59 pm</option>
                <option value="9">17:00 pm - 18:59 pm</option>
                <option value="10">18:00 pm - 19:59 pm</option>
                <option value="11">19:00 pm - 20:59 pm</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="fecha">Fecha de entrega</label>
              <input type="date" class="form-control" name="fecha" id="fecha" value="2020-12-01" min="2020-12-07" required/>
              <div class="invalid-feedback">Seleccione una fecha de entrega.</div>
            </div>
            <hr class="mb-4" />
            <button class="btn btn-primary btn-lg btn-block" type="submit">Realizar pedido</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer id="footer" class="blog-footer ft-carrito">
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


    <!--Script para validar datos -->
    <script>
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          var forms = document.getElementsByClassName('needs-validation');
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
