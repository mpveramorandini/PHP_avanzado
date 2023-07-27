<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>php_avanzado_mpv</title>
  <link rel="stylesheet" href="./public/css/estilo.css">
</head>

<body>
  
<div class="contenedor">  
<header>
<nav class="navegacion">
<ul>
  <li><a href="index.php?ruta=registro">Registro</a></li>
  <li><a href="index.php?ruta=ingreso">Ingreso</a></li>
  <li><a href="index.php?ruta=inicio">Inicio</a></li>
  <li><a href="index.php?ruta=salir">Salir</a></li>
</ul>
</nav>

<div class="marca">
</div>
</header>

<section class="contenido">
<?php
if(isset($_GET["ruta"])){
    if(
        $_GET['ruta'] == "registro" || 
        $_GET['ruta'] == "ingreso" || 
        $_GET['ruta'] == "inicio" || 
        $_GET['ruta'] == "salir"
    ){
        include "paginas/" . $_GET["ruta"]. ".php";
    } else {
        include "paginas/error404.php";
    } 
} else {
        include "paginas/registro.php";
    }

?>

</section>

</div>




</body>

</html>
