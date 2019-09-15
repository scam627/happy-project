<?php include "./templates/header.php" ?>
<section class="d-flex justify-content-center">
    <div class="container m-5 col-8 rounded shadow" style="height: 800px">
        <div class="container my-5 d-flex flex-column justify-content-center">
            <figure class="figure">
                <center>
                    <img src="./assets/emojis/theme-two/5.png" id="emoji" width="40px" height="30px"
                        class="figure-img img-fluid rounded emoji" alt="...">
                </center>
            </figure>
            <input type="range" class="input-emoji custom-range" step="1.0" min="0" max="10" id="customRange1">
        </div>
    </div>
</section>
<?php include "./templates/footer.php" ?>