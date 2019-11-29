<?php include "./templates/header.php";?>
<?php if(isset($_GET["status"])) { ?>
<?php if($_GET["status"] == "ok") { ?>
<section>
	<div class="justify-content-center">
		<div class="ml-lg-5 ml-3 mb-5 col-lg-5 col-11 alert alert-success alert-dismissible fade show fixed-bottom"
			role="alert">
			<strong>Gracias por contactarme!</strong> He recibido tu mensaje.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	</div>
</section>
<?php } else { ?>
<section>
	<div class="justify-content-center">
		<div class="ml-lg-5 ml-3 mb-5 col-lg-5 col-11 alert alert-danger alert-dismissible fade show fixed-bottom"
			role="alert">
			<strong>Ocurrio un problema!</strong> Tu mensaje no ha sido enviado.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	</div>
</section>
<?php } ?>
<?php } ?>
<section id="banner">
	<div class="pos-f-t">
		<!-- <div class="collapse" id="navbarToggleExternalContent">
			<div class="bg-blue p-4">
				<h5 class="text-white h4">aAndres Mauricio Jaramillo Alvarez</h5>
				<span class="text-white">Toggleable via the navbar brand.</span>
			</div>
		</div> -->
		<nav class="navbar navbar-dark bg-blue fixed-top shadow">
			<!-- <img src="./assets/images/logo_jara.png" alt=""> -->
			<!-- <button type="button" class="btn btn-light">
				<b>
					!Mis historias¡
				</b>
			</button> -->
			<ul class="mt-3">
				<a href="https://www.instagram.com/juanpagil/" style="color: black"><i
						class="fab fa-instagram fa-2x"></i></a>
			</ul>
		</nav>
	</div>
</section>
<section id="intro">
	<div class="bg-blue container-fluid">
		<div class="row mx-2" style="padding-top: 100px; padding-bottom: 50px">
			<div class="col-xl-6 mb-3 mx-3">
				<h1>Encuentra tu fórmula de la Felicidad y la Productividad</h1>
				<!-- <h4 class="mt-2">Transforma tu vida, dirige tu camino</h4> -->
				<center>
					<button data-toggle="modal" data-target="#contactame" type="button" style="border-radius: 30px"
						class="btn btn-lg btn-dark mt-2 rounded-pill">¡¡Contáctame!!</button>
				</center>
				<h5 class="mt-4" style="font-family: 'Coming Soon', cursive">Si quieres Mejorar La Felicidad o
					Productividad de Tu
					Vida o Tu Empresa</h5>
			</div>
			<!-- <div class="col-xl-5 d-none d-lg-block mb-1 mx-3 embed-responsive embed-responsive-16by9"
				style="border-radius: 20px">
				<iframe width="480" height="270" src="https://www.powtoon.com/embed/e0FPOMhoNse/"
					frameborder="0"></iframe>

			</div> -->
			<img class="col-xl-4 d-none d-lg-block rounded-circle" src="./assets/images/andres-banner-3.png"
				alt="Andrés" title="Andrés" height="400px" width="400px" />
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="contactame" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-blue">
					<h5 class="modal-title" id="exampleModalLabel">Nuevo Mensaje</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="./services/email.php">
						<div class="form-group">
							<label for="email" class="col-form-label">Correo:</label>
							<input name="email" type="email" class="form-control" id="email">
						</div>
						<div class="row">
							<div class="col-6 form-group">
								<label for="name" class="col-form-label">Nombre:</label>
								<input name="name" type="text" class="form-control" id="name" required>
							</div>
							<div class="col-6 form-group">
								<label for="telfono" class="col-form-label">Teléfono:</label>
								<input name="telefono" type="number" class="form-control" id="telefono">
							</div>
						</div>
						<label for="message" class="col-form-label">Mensaje:</label>
						<div class="form-group">
							<textarea name="mensaje" class="form-control" id="message" required></textarea>
						</div>
						<div class="d-flex justify justify-content-center">
							<button type="submit" class="btn btn-warning">Enviar</button>
							<button type="button" class="btn btn-outline-secondary ml-1"
								data-dismiss="modal">Cancelar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<section>
	<div class="container-fluid">
		<!-- <div class="row my-5 mx-6">
			<div class="col-lg-8">
				<h1>Te ayudare a crear un vida más organizada</h1>
			</div>
		</div> -->
		<div class="row mt-4 mx-6">
			<div class="col-lg-6">
				<img src="./assets/images/juangil.jpg" class="img-fluid">
			</div>
			<div class="col-lg-6">
				<h2>Tipping Points</h2>
				<p>Mi Formula de la Felicidad y La Productividad es una charla que invita a la reflexión a través de un
					recorrido por el tiempo en el que los participantes descubren sus Tipping Points
				</p>
			</div>
		</div>
	</div>
</section>
<section id="media">
	<div class="container mt-3 position-abso bg-white">
		<div class="row" id="media-deploy">
			<?php ?>
		</div>
	</div>
</section>
<section>
	<footer class="container-fluid bg-blue">
		<nav class="navbar navbar-dark bg-blue shadow justify-content-center">
			<!-- <img src="./assets/images/logo_jara.png" alt=""> -->
			<!-- <button type="button" class="btn btn-dark">
				<b>
					!Mis historias¡
				</b>
			</button> -->
			<span>Copyirght&#x00A9; Juan Pablo Gil 2019</span>
			<!-- <ul class="mt-3">
				<a href="https://www.instagram.com/andresjaramilloalvarez/" style="color: black"><i
						class="fab fa-instagram fa-2x"></i></a>
				<a href="https://www.instagram.com/andresjaramilloalvarez/" style="color: black"><i
						class="fab fa-facebook fa-2x"></i></a>
				<a href="https://www.instagram.com/andresjaramilloalvarez/" style="color: black"><i
						class="fab fa-twitter fa-2x"></i></a>
			</ul> -->
		</nav>
	</footer>
</section>
<?php include "./templates/footer.php";?>