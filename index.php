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
			<div class="bg-warning p-4">
				<h5 class="text-white h4">aAndres Mauricio Jaramillo Alvarez</h5>
				<span class="text-white">Toggleable via the navbar brand.</span>
			</div>
		</div> -->
		<nav class="navbar navbar-dark bg-warning fixed-top shadow">
			<img src="./assets/images/logo_jara.png" alt="">
			<!-- <button type="button" class="btn btn-light">
				<b>
					!Mis historias¡
				</b>
			</button> -->
			<ul class="mt-3">
				<a href="https://www.instagram.com/andresjaramilloalvarez/" style="color: black"><i
						class="fab fa-instagram fa-2x"></i></a>
				<a href="https://www.facebook.com/andres.j.alvarez.12" style="color: black"><i
						class="fab fa-facebook fa-2x"></i></a>
				<a href="https://www.youtube.com/channel/UCarmY6MEfYp31eTZPBcp2jg" style="color: black"><i
						class="fab fa-youtube fa-2x"></i></a>
			</ul>
		</nav>
	</div>
</section>
<section id="intro">
	<div class="bg-warning container-fluid">
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
				<div class="modal-header bg-warning">
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
				<img src="./assets/images/andres-one.png" class="img-fluid">
			</div>
			<div class="col-lg-6">
				<h2>Tipping Points</h2>
				<p>Mi Formula de la Felicidad y La Productividad es una charla que invita a la reflexión a través de un
					recorrido por el tiempo en el que los participantes descubren sus Tipping Points
				</p>
			</div>
		</div>
		<div class="row mt-4 mx-6">
			<div class="col-lg-6 d-lg-none mb-1 mx-3 embed-responsive embed-responsive-16by9"
				style="border-radius: 20px">
				<iframe width="480" height="270" src="https://www.powtoon.com/embed/f6cFluO2cNT/
" frameborder="0"></iframe>
				<!-- https://www.powtoon.com/embed/e0FPOMhoNse/ -->
				<!-- <img src="./assets/images/andres-two.png" class="img-fluid"> -->
			</div>
			<div class="col-lg-6">
				<h2></h2>
				<p>Tipping Points o Puntos de Quiebre, que no son otra cosa, que los momentos de cambio en la vida, esos
					sucesos que construyen a los seres humanos y a los que definitivamente les debemos gratitud.
				</p>
			</div>
			<div class="col-lg-6 d-none d-lg-block embed-responsive"
				style="border-radius: 20px;height: 310px;margin-top: inherit;">
				<iframe width="480" height="270" src="https://www.powtoon.com/embed/e0FPOMhoNse/"
					frameborder="0"></iframe>
				<!-- <img src="./assets/images/andres-two.png" class="img-fluid"> -->
			</div>
		</div>
		<div class="row mt-4 mx-6">
			<div class="col-lg-6">
				<img src="./assets/images/andres-four.png" class="img-fluid">
			</div>
			<div class="col-lg-6">
				<h2>Comó solucionar un problema?</h2>
				<p>Todo en esta vida es una cuestión de actitud. Ver el vaso medio lleno o medio vacío depende
					únicamente de TI. Para ser feliz siempre debes verlo medio lleno, no dejes que tus preocupaciones o
					tus pensamientos pesimistas te afecten
				</p>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container-fluid pb-4 bg-warning">
		<div class="row my-5 mx-6">
			<div class="col-lg-8">
				<h1>¿ El café te hace feliz ?</h1>
			</div>
		</div>
		<div class="row mt-4 mx-4">
			<div class="col-lg-6 mb-3">
				<img src="./assets/images/andres_cata_cafe.png" class="img-fluid">
			</div>
			<div class="col-lg-6">
				<h2>Porqué el café nos hace felices</h2>
				<br>
				<p class="text-minor">El consumo del café ayuda a prevenir los problemas emocionales ya que estimula la
					producción de
					serotonina y dopa mina consideradas como las hormonas de la felicidad. El café tiene la capacidad de
					proporcionarnos sensación de bienestar, las personas que consumimos de dos a cuatro tazas al día
					tenemos una vida más positiva porque la cafeína puede acceder a casi todos los sistemas de
					recompensa reconocidos para el cerebro, esta bebida genera placer en todo nuestro cuerpo reduce la
					incidencia de los pensamientos negativos y nos ayuda a estar más felices y contentos. Por eso
					podemos decir que el café nos hace felices
				</p>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container-fluid bg-white">
		<div class="row my-5 mx-6">
			<div class="col-12 text-center">
				<h1>Empresas que te ayudan a ser mas feliz y productivo</h1>
			</div>
		</div>
		<div class="row mt-5  mx-6">
			<div class="col-12 col-lg-4">
				<div class="card mt-2">
					<img src="./assets/images/bolicheria.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h4 class="card-title">Bolicheria</h4>
						<p class="card-text">Para ser Feliz y Productivo debes tener un equilibrio en Tu vida. No todo
							puede ser trabajo y por eso decidimos crear en el año 2010 un centro de diversiones para
							compartir con la familia y amigos.
							Aquí tendrás una experiencia inolvidable</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="card card-hp mt-2">
					<img src="./assets/images/green.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h4 class="card-title">Green</h4>
						<p class="card-text">
							Muchos estudios han demostrado que la alimentación y las emociones están directamente
							relacionados, dependiendo de como te sientas, comes de una manera u otra, y depende de lo
							que comas puedes mejorar o empeorar tu estado emocional.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="card mt-2">
					<img src="./assets/images/logo-crea.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h4 class="card-title">Crea</h4>
						<p class="card-text text-left">CREA Consultores es una Startup pereirana fundada en el año
							2018, y
							especializada en desarrollar modelos comerciales y de servicio al cliente, articulando el
							escenario digital para fortalecer las experiencias de cada marca.</p>
					</div>
				</div>
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
	<footer class="container-fluid bg-warning">
		<nav class="navbar navbar-dark bg-warning shadow justify-content-center">
			<!-- <img src="./assets/images/logo_jara.png" alt=""> -->
			<!-- <button type="button" class="btn btn-dark">
				<b>
					!Mis historias¡
				</b>
			</button> -->
			<span>Copyirght&#x00A9; Andrés Mauricio Jaramillo Alvarez 2019</span>
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