<?php
$destino = "moodeedelacruz@gmail.com";
$nombre = $_POST ["nombre"];
$correo = $_POST ["correo"];
$mensaje = $_POST ["mensaje"];
$contenido "nombre:" . $nombre . "\ncorreo:" . $correo . "\nmensaje." . $mensaje;
mail($destino, "contacto", $contenido);
echo´<script>
alert("su correo se envio correctamente");
window.history.go (-1);
</script>´;
?>

