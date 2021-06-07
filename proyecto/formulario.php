<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="form_style.css">
  <link rel="stylesheet" type="text/css" href="menu_form.css">
  <title>Formulario Registro</title>
</head>
<body>
    <nav>
        <div class="logo">
           <p>Spa-Cio</p>
        </div>
      
        <ul>
          <li><a href="index.html" >Inicio</a></li>
          <li><a href="formulario.html" class="active">Registrate!</a></li>
          <li><a href="sobre_nosotros.html">Sobre Nosotros</a></li>
          <li><a href="servicios.html">Servicios</a></li>
        </ul> 
      </nav>





    <form method="POST">
        <section class="form-register">
            <h4>REGISTRATE Y GANA UNA NOCHE TODO PAGADO </h4>
            <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
            <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
            <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
            <input class="botons" type="submit" name="registrar">
          </section>
          <?php 
        include("registrar.php");
        ?>

    </form>
  

</body>
</html>