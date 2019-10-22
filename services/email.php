<?php
	$mensaje = "Contacto: ".$_POST["email"]."\nMensaje: ".$_POST["mensaje"]."\n";

	if(mail("stiven.cardona627@gmail.com", "Contacto", $mensaje))
		header('Location: ../index.php?status=ok');
	else
		header('Location: ../error.php');
?>