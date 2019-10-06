<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- <meta http-equiv="X-UA-Compatible" content="ie=edge" /> -->
	<title>Andres</title>
	<!-- Bootstrap styles -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	<link rel="stylesheet" href="./src/css/manage.css" />
</head>

<body id="cnt" class="bg-light">

	<div class="container">
		<section id="banner-section" class="border-down">
			<div class="row">
				<div class="col-1 m-3">
					<i class="fas fa-angry"></i>
				</div>
			</div>
		</section>
	</div>
	<div class="container">
		<section id="manage-section">
			<div class="row">
				<div class="col-5 col-md-3 px-0 border-right">
					<ul class="nav flex-column">
						<li id="videos" class="nav-item option-menu activate">
							<a class="nav-link black">Videos</a>
						</li>
						<li id="encuestas" class="nav-item option-menu">
							<a class="nav-link black">Encuestas</a>
						</li>
						<li id="analisis" class="nav-item option-menu">
							<a class="nav-link black">Análisis</a>
						</li>
						<li id="analisis" class="nav-item option-menu">
							<a class="nav-link black">Mensajes</a>
						</li>
					</ul>
				</div>
				<div id="render" class="col-7 col-md-9">
					<div id="content" class="row">
						<form class="col-12" action="./services/save_video.php" method="POST">
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<label>Título</label>
									<input type="text" class="form-control" name="title" placeholder="Título"
										required />
									<div class="valid-feedback"></div>
								</div>
								<div class="col-md-6 mb-3">
									<label>Código</label>
									<input type="text" class="form-control" name="token" placeholder="Código"
										required />
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-12 mb-3">
									<label for="validationServer02">Descripción</label>
									<textarea class="form-control" name="description">
										</textarea>
								</div>
							</div>
							<button class="btn btn-primary" type="submit">Añadir</button>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php include "./templates/footer.php"; ?>