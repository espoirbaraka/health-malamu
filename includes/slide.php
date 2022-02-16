
    <!-- header-end -->
    <!-- main-area -->
    <main>
        <!-- slider-area -->
        <?php
        $requette = 'SELECT *,MAX(CodePost) FROM t_post WHERE CodeCategorie=1';
        $slide = $app->fetch($requette);
        ?>
        <section id="parallax" class="slider-area slider-bg2 second-slider-bg d-flex fix"
            style="background-image: url(img/bg/pink-header-bg.png); background-position:right 0; background-repeat: no-repeat; background-size: 65%;">

            <div class="slider-shape ss-one layer" data-depth="0.10"><img src="img/shape/header-sape.png" alt="shape">
            </div>

            <div class="slider-shape ss-eight layer" data-depth="0.50"></div>



            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="slider-content second-slider-content left-center">
                            <ul class="small-title mb-30">
                                <li>health</li>
                                <li>malamu</li>
                            </ul>
                            <h2 data-animation="fadeInUp" data-delay=".4s"><?php echo $slide['Titre']; ?></h2>
                            <p data-animation="fadeInUp" data-delay=".6s"><?php echo $slide['Contenue']; ?></p>
                            <div class="slider-btn mt-30 mb-30">
                                <a href="detail_post.php?id=<?php echo $slide['CodePost']; ?>" class="btn ss-btn" data-animation="fadeInUp" data-delay=".8s">Plus de details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <img style="float: left; width: 600px;" src="admin/fichier/<?php echo $slide['Photo']; ?>" alt="shape" class="s-img">

                    </div>
                </div>

            </div>
        </section>