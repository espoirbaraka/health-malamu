<section id="about" class="services-area services-bg pt-25 pb-20" style="background-image: url(img/shape/header-sape2.png); background-position: right top; background-size: auto;background-repeat: no-repeat;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-20">
                <div class="section-title text-center pl-40 pr-40 mb-45">
                    <h2>PRESENTATION</h2>
                    <p><?php echo $information['Presentation'] ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $sql = 'SELECT * FROM t_post WHERE CodeCategorie=2 ORDER BY CodePost DESC LIMIT 3';
            $present = $app->fetchPrepared($sql);
            $nombre = 0;


            for ($i = 0; $i < count($present); $i++) {
                $nbre = $nombre + 1;
            ?>
                <div class="col-lg-4 col-md-12 mb-30">
                    <div class="s-single-services active text-center">
                        <div class="services-icon">
                            <img style="height: 200px;" src="admin/fichier/<?php echo $present[$i]['Photo']; ?>" />
                        </div>
                        <div class="second-services-content">
                            <h5><?php echo $present[$i]['Titre'] ?></h5>
                            <p><?php echo $app->substring($present[$i]['Contenue'], 50) ?></p>
                            <a href="#"><span><?php echo $i + 1; ?></span></a>
                        </div>
                    </div>
                </div>
            <?php
            }


            ?>


        </div>

    </div>
</section>