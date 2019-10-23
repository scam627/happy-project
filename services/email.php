<?php
	$email = isset($_POST["email"]) ? $_POST["email"] : " ";
	$name = isset($_POST["name"]) ? $_POST["name"] : " ";
	$message = isset($_POST["mensaje"]) ? $_POST["mensaje"] : " ";
	$telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : " ";
	$mensaje = "Contacto: ".$email."\nNombre:".$name."\nMensaje: ".$message."\nTeléfono:".$telefono."\n";
	if(mail("andresjaramilloalvarez@hotmail.com", "Contacto", $mensaje)){
		if(isset($_POST["email"])){
			$correo = "Hola $name\nMuchas gracias por escribirnos.\nNos encanta saber que estas comprometido con tener una vida más feliz y productiva.\n\nSoy Andrés Jaramillo una persona como Tu, llena de sueños, con una linda familia conformada de tres Hijos, Santiago y los Mellizos Alicia y Juan Juan, una hermosa esposa Catalina y toda una vida llena de milagros, Tipping points, historias y aprendizajes por lo que le agradezco cada segundo a Dios.\n\nPronto me comunicare contigo, para que juntos descubramos tus milagros y agradezcamos por ellos.\n\nSer Feliz y Productivo solo depende de Ti y lo mejor de todo es Gratis.\n\nUn abrazo\n\nJara";
			mail($email,"Andres Mauricio Jaramillo Alvarez",$correo);
		}
		header('Location: ../index.php?status=ok');
	}
	else
		header('Location: ../index.php?status=fail');
	
?>