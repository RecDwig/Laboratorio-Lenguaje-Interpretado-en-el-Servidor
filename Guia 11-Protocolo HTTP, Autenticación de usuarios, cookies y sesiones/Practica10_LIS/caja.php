<?php
 //Incluir librería con las funciones auxiliares
 require_once("funciones.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <title>PHP [hidden y urls]: caja.php</title>
</head>
<body class="container">
<section>
<article>
<?php
 echo "<h1 align=\"center\">Contenido del carrito</h1>\n";
 //Recuperar los objetos pertenecientes al carrito
 $carrito = generarCarrito();
 //Mostrar el contenido
 mostrarCarrito($carrito);
?>
<p align="center">
 Pulsa <a href="./tienda.php">aquí</a> para continuar.
</p>
</article>
</section>
</body>
</html>