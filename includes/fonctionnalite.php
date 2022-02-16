<?php
$req = "SELECT * FROM t_fonctionnalite ORDER BY CodeFonctionnalite DESC LIMIT 3";
$fonctionnalite = $app->fetchPrepared($req);
?>
<section id="features" class="app-work pt-70 pb-100 p-relative" style="background-image: url(img/shape/header-sape4.png); background-position: right center; background-size: auto;background-repeat: no-repeat;">
    <div class="container">
        <div class="row align-items-center ">

            <div class="col-xl-6">
                <div class="choose-wrap">
                    <div class="section-title w-title left-align mb-15">
                        <h2>Comment ça fonctionne</h2>
                    </div>
                    <div class="app-work-content mt-20">
                        <ul>
                            <?php
                            foreach ($fonctionnalite as $row) {
                            ?>
                                <li>
                                    <div class="icon"><img style="width: 70px;" src="<?php echo (!empty($row['Avatar'])) ? 'admin/fichier/'.$row['Avatar'] : 'admin/fichier/fonctionnalite.jpg'; ?>"></div>
                                    <div class="text">
                                        <h4><?php echo $row['Titre'] ?></h4>
                                        <p><?php echo $row['Detail'] ?></p>
                                    </div>
                                </li>
                            <?php
                            }
                            ?>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <img style="right: 80px;" src="admin/fichier/<?php echo $information['Avatar']; ?>" alt="app-work-img" class="img">
            </div>
        </div>
    </div>
</section>