<?php
$req = "SELECT * FROM t_partenaire ORDER BY CodePartenaire DESC LIMIT 10";
$partenaire = $app->fetchPrepared($req);
?>
<section id="partenaire" class="testimonial-area testimonial-p  pt-100 pb-70" style="">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title center-align">
                    <h2>Nos partenaires</h2>
                </div>
            </div>
            <div class="col-lg-12">

                <div class="testimonial-active">
                    <?php
                    foreach ($partenaire as $row) {
                    ?>
                        <div class="col-xl-3">
                        <img class="" style="height: 300px;" src="admin/fichier/<?php echo $row['Avatar'] ?>" alt="img">
                        </div>
                    <?php
                    }
                    ?>



                </div>
            </div>

        </div>
    </div>
</section>