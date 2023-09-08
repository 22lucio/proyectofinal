<?php include ('header.php') ; ?>

<section class="contacto_contenido">
<form action="enviar_consulta.php" method="post">
<label for="nombre"> Nombre: </label>
<input type="text" name="nombre" class="contacto_input">
<label for="apellido"> Apellido: </label>
<input type="text" name="apellido" class="contacto_input">
<label for="correo"> Correo: </label>
<input type="text" name="correo" class="contacto_input">
<label for="mensaje"> Mensaje: </label>
<textarea name="Mensaje" id="" cols="30" rows="10" class="contacto_input"></textarea>
<input type="submit" name="" value="Enviar consulta" class="contacto_btn">


</form>
<?php 
if (isset ($_GET['ok'])){
    echo "<h3>Su mensaje ha sido enviado con éxito</h3>";
}
?>
</section>

<?php include ('footer.php') ; ?>
