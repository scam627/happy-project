<?php include "./templates/header.php";?>
<section id="banner">
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-warning p-4">
                <h5 class="text-white h4">Andres Mauricio Jaramillo Alvarez</h5>
                <span class="text-white">Toggleable via the navbar brand.</span>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-warning fixed-top">
            <button type="button" class="btn btn-light rounded-pill">
                <b>
                    !Mis historias¡
                </b>
            </button>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
</section>
<section id="intro">
    <div class="bg-light">
        <div class="container">
            <div id="scene">
                <div data-depth="1.00">
                    <img src="./assets/images/andres-person.png" />
                </div>
                <!-- <div data-depth="1.00"><img src="./pages/images/layer1.png" /></div>
						<div data-depth="0.80"><img src="./pages/images/layer2.png" /></div>
						<div data-depth="0.60"><img src="./pages/images/layer3.png" /></div>
						<div data-depth="0.40"><img src="./pages/images/layer4.png" /></div>
						<div data-depth="0.20"><img src="./pages/images/layer5.png" /></div>
						<div data-depth="0.00"><img src="./pages/images/layer6.png" /></div> -->
            </div>
        </div>
    </div>
</section>
<!-- <section>
			<div class="container">
				<div class="row mt-5" style="height: 200px;">
					<div class="col-12 col-md-6 d-flex justify-content-center">
						<img
							src="./assets/images/deck.jpg"
							class="rounded-circle img-thumbnail"
							alt="Responsive image"
							style="width: 300px; height: 300px;"
						/>
					</div>
					<div class="col-12 col-md-6 h-70 d-inline-block">
						<img
							src="./assets/images/layer1.png"
							class="rounded img-thumbnail"
							alt="Responsive image"
						/>
					</div>
				</div>
			</div>
		</section> -->
<section id="media">
    <div class="container mt-3 position-abso bg-white">
        <div class="row" id="media-deploy"></div>
    </div>
</section>
<?php include "./templates/footer.php";?>