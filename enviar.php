<?php
$destino="andimal.s7@gmail.com"
$nombre=$_POST["nombre"];
$Correo=$_POST["Correo"];
$Numerocelular=$POST["Numerocelular"];
$Mensaje=$_POST["Mensaje"];
$contenido ="Nombre: " .$nombre . "\nCorreo" . $contenido ="Numerocelula: " . $Numerocelula . "\nMensaje:" . $Mensaje;
mail($destino,"contacto", $contenido);
header("location:index.html")

?> 