<?php
	$mensaje = "Contacto: ".$_POST["email"]."\nMensaje: ".$_POST["mensaje"]."\n";

	if(mail("stiven.cardona627@gmail.com", "Contacto", $mensaje))
		echo "Mensaje enviado";
	else
		echo "Uyuyuy";
?>