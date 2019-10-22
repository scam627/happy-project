<?php
	if(mail("stiven.cardona627@gmail.com", "Contacto", $_POST["mensaje"]))
		echo "Mensaje enviado";
	else
		echo "Uyuyuy";
?>