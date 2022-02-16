<?php
$req = "SELECT CodePost,Titre,Contenue,t_post.Photo,t_post.Created_on,Created_by,CodeCategorie,CodeUser, Username,Mail,Password,t_user.Photo as image FROM t_post inner join t_user ON t_post.Created_by=t_user.CodeUser WHERE CodeCategorie=3 ORDER BY CodePost DESC LIMIT 3";
$blog = $app->fetchPrepared($req);
?>
<section id="blog" class="blog-area p-relative pt-70" style="background-image: url(img/shape/header-sape8.png); background-position: right center; background-size: auto;background-repeat: no-repeat;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-10">
                <div class="section-title text-center mb-50">
                    <h2>Nos dernières publications</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($blog as $row) {
            ?>
                <div class="col-lg-4 col-md-12">
                    <div class="single-post mb-30">
                        <div class="blog-thumb">
                            <a href="detail_post.php?id=<?php echo $row['CodePost']; ?>"><img style="width: auto; height: 200px;" src="admin/fichier/<?php echo $row['Photo'] ?>" alt="img"></a>
                        </div>
                        <div class="blog-content">
                            <div class="b-meta mb-40">
                                <ul>
                                    <li><a href="detail_post.php?id=<?php echo $row['CodePost']; ?>"><?php echo $app->dateconv($row['Created_on']); ?></a></li>
                                </ul>
                            </div>
                            <h4><a href="detail_post.php?id=<?php echo $row['CodePost']; ?>"><?php echo $row['Titre'] ?></a></h4>
                            <p><?php echo $app->substring($row['Contenue'],80) ?></p>
                            
                            <div class="admin">
                                <ul>
                                    <li><img style="width: 40px; height: 40px;" src="<?php echo (!empty($row['image'])) ? 'admin/fichier/'.$row['image'] : 'admin/fichier/user.png'; ?>" alt="test"></li>
                                    <li>
                                        <h6><?php echo $row['Username'] ?></h6> Auther
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            } ?>

        </div>
    </div>
</section>