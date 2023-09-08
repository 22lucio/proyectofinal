<?php 

$nombre_form = $_POST ['nombre'];
$apellido_form = $_POST ['apellido'];
$correo_form = $_POST ['correo'];
$mensaje_form = $_POST ['mensaje'];

$cuerpo_mail =
"Nombre: ". $nombre_form ."\r\n".
"Apellido: ". $apellido_form ."\r\n".
"Nombre: ". $correo_form ."\r\n".
"Nombre: ". $mensaje_form;

mail("luciogtthotmail.com", "Mensaje enviado desde nuestro sitio", $cuerpo_mail); 

$conexion = mysqli_connect("localhost", "id20930642_lucio", "Lucio1995.", "id20930642_consultas"
) or exit ("No se pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$correo_form', '$mensaje_form')");

mysqli_close($conexion);

header ("Location: contacto.php?ok");

?>