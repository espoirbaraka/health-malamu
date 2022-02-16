<?php
$req = "SELECT * FROM t_question ORDER BY CodeQuestion DESC LIMIT 3";
$question = $app->fetchPrepared($req);
?>
<section class="faq-area pb-100" style="background-image: url(img/shape/header-sape6.png); background-position: right center; background-size: auto;background-repeat: no-repeat;">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-3">
                <div class="faq-img text-right">
                    <img style="top: 0px; height: 100%" src="admin/fichier/<?php echo $information['Avatar'] ?>" alt="img" class="img">
                </div>
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="section-title left-align mb-50">
                    <h2>Question fréquaments posées</h2>
                    
                </div>
                <div class="faq-wrap">
                    <div class="accordion" id="accordionExample">
                    <?php
                        foreach ($question as $row) {
                        ?>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="faq-btn" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            <?php echo $row['Question'] ?>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <?php echo $row['Reponse'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>