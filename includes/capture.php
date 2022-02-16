<?php
$req = "SELECT * FROM t_capture_apk ORDER BY CodeCapture DESC LIMIT 5";
$capture = $app->fetchPrepared($req);
?>
<section id="screen" class="screen-area services-bg services-two pt-100 pb-70" style="background-image: url(img/shape/header-sape4.png); background-position: right center; background-size: auto;background-repeat: no-repeat;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="section-title text-center pl-40 pr-40 mb-50">
                    <h2>Captures d'écrans</h2>
                    
                </div>
            </div>
        </div>
        <div class="row">

            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    foreach($capture as $row){
                        ?>
                        <div class="swiper-slide"><img src="admin/fichier/<?php echo $row['Image']; ?>" alt="<?php echo $row['Image']; ?>"></div>
                        <?php
                    }
                    ?>
                    
                    <!-- <div class="swiper-slide"><img src="img/gallery/screen-img02.png" alt="slide 1"></div>
                    <div class="swiper-slide"><img src="img/gallery/screen-img03.png" alt="slide 1"></div>
                    <div class="swiper-slide"><img src="img/gallery/screen-img04.png" alt="slide 1"></div>
                    <div class="swiper-slide"><img src="img/gallery/screen-img05.png" alt="slide 1"></div> -->

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </div>


</section>