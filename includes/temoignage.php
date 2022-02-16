<?php
$req = "SELECT * FROM t_temoignage ORDER BY CodeTemoignage DESC LIMIT 5";
$temoignage = $app->fetchPrepared($req);
?>
<section id="testimonios" class="testimonial-area testimonial-p  pt-100 pb-70" style="background-image:url(img/bg/client-bg.png); background-repeat: no-repeat; background-position: right center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title center-align">
                    <h2>Que dit nos clients?</h2>
                    <p>Suivez certains temoignages des clients qui se sont vus satisfaits par nos services</p>
                </div>
            </div>
            <div class="col-lg-12">

                <div class="testimonial-active">
                    <?php
                    foreach ($temoignage as $row) {
                    ?>
                        <div class="col-xl-4">
                            <div class="single-testimonial">
                                <div class="testi-author text-left">
                                    <img class="rounded-circle" style="top: 10px; width: 80px; height: 80px;" src="admin/fichier/<?php echo $row['Photo'] ?>" alt="img">
                                    <div class="ta-info">
                                        <h6><?php echo $row['Auther'] ?></h6>
                                    </div>
                                </div>

                                <div class="qutation"><img src="img/bg/qutation.png" alt="qutation.png"></div>
                                <br>
                                <p><?php echo substr($row['Temoignage'],0,30); ?></p>

                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    


                </div>
            </div>

        </div>
    </div>
</section>