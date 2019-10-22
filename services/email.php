<?php
	$mensaje = "Contacto: ".$_POST["email"]."\nMensaje: ".$_POST["mensaje"]."\n";

	if(mail("andresjaramilloalvarez@hotmail.com", "Contacto", $mensaje))
		header('Location: ../index.php?status=ok');
	else
		header('Location: ../error.php');
?>