<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="perfil.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@1,500&display=swap');
    </style>
</head>
<body>
<div class="container">

<!-- Navegación -->
<nav>
    <a href="home.php"> <img src="img/hogar.png" alt="">Home</a>
    <a href="perfil.php" class="perfil"><img src="img/perfil.png" alt="">Perfil de Usuario</a>
</nav>

<!-- Encabezado con logo, nombre del paciente y botón de cerrar sesión -->
<div class="header">
    <img src="img/R-FAST-PNG-05.png" alt="Logo">
    <button onclick="redirigir()">Cerrar Sesión</button>
</div>

<!-- Contenido principal -->
<div class="content">
    <div class="usu">
        <div class="imgperfil"></div>
        <h2 class="saludo text">¡Hola paciente!</h2>
        <p class="bienvenida text">Bienvenido al portal</p>
    </div>
    <div class="datosu">
      <div class="dato">
        <div class="texto">
            <h2>Tipo de Documento</h2>
            <p>xxxxxxxxxxxxxxxx</p>
        </div>
        <div class="imagen">
            <img src="img/documento.jpg" alt="">
        </div>
      </div>
      <div class="dato">
        <div class="texto">
            <h2>Número de Identificacion</h2>
            <p>xxxxxxxxxxxxxxxx</p>
        </div>
        <div class="imagen">
            <img src="img/numero-identificacion.jpg" alt="">
        </div>
      </div>
      <div class="dato">
        <div class="texto">
            <h2>Nombre Completo</h2>
            <p>xxxxxxxxxxxxxxxx</p>
        </div>
        <div class="imagen">
            <img src="img/nombre.jpg" alt="">
        </div>
      </div>
      <div class="dato">
        <div class="texto">
            <h2>Fecha de nacimiento</h2>
            <p>xxxxxxxxxxxxxxxx</p>
        </div>
        <div class="imagen">
           <img src="img/fecha_nac.jpg" alt=""> 
        </div>
      </div>
      <div class="dato">
        <div class="texto">
            <h2>Sexo Biologico</h2>
            <p>xxxxxxxxxxxxxxxx</p>
        </div>
        <div class="imagen">
            <img src="img/sexo.biologico.jpg" alt="">
        </div>
      </div>
      <div class="dato">
        <div class="texto">
            <h2>Direccion de Residencia</h2>
            <p>xxxxxxxxxxxxxxxx</p>
        </div>
        <div class="imagen">
            <img src="img/direccion.jpg" alt="">
        </div>
      </div>
      <div class="dato">
        <div class="texto">
            <h2>Número de Telefono</h2>
            <p>xxxxxxxxxxxxxxxx</p>
        </div>
        <div class="imagen">
            <img src="img/telefono.jpg" alt="">
        </div>
      </div>
      <div class="dato">
        <div class="texto">
            <h2>Correo Electronico</h2>
            <p>xxxxxxxxxxxxxxxx</p>
        </div>
        <div class="imagen">
            <img src="img/email.jpg" alt="">
        </div>
      </div>
    </div>
    
</div>

</div>
    <script src="perfil.js"></script>
</body>
</html>
