<?php include "./config_db.php";?>
<!-- Query -->
<?php
    $reponse = [];
    $result = $conn->query("SELECT token, description, title FROM videos");
    while($row = $result->fetch_array(MYSQLI_ASSOC))
        $response[] = $row;
?>
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
<!-- <section id="intro">
    <div class="bg-light">
        <div class="container">
            <div id="scene">
                <div data-depth="1.00">
                    <img src="./assets/images/andres-person.png" />
                </div>
                <div data-depth="1.00"><img src="./pages/images/layer1.png" /></div>
                <div data-depth="0.80"><img src="./pages/images/layer2.png" /></div>
                <div data-depth="0.60"><img src="./pages/images/layer3.png" /></div>
                <div data-depth="0.40"><img src="./pages/images/layer4.png" /></div>
                <div data-depth="0.20"><img src="./pages/images/layer5.png" /></div>
                <div data-depth="0.00"><img src="./pages/images/layer6.png" /></div>
            </div>
        </div>
    </div>
</section> -->
<section id="media" style="margin-top: 80px;">
    <div class="row mx-1 mt-2 d-flex justify-content-center" id="media-deploy">
        <?php foreach( $response as $arr => $values) { ?>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card bg-light mb-3">
                <div class="rounded-top embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                        src="https://www.youtube.com/embed/<?php echo $values['token']?>" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <h5><?php echo $values['title']?></h5>
                    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover"
                        data-placement="bottom" data-content="<?php echo $values['description']?>">
                        Descripción
                    </button>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<?php include "./templates/footer.php";?>