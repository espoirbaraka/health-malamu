<?php
include 'admin/class/app.php';

$requette = 'SELECT * FROM t_information WHERE CodeInformation=1';
$information = $app->fetch($requette);

$req = "SELECT CodePost,Titre,Contenue,t_post.Photo,t_post.Created_on,Created_by,CodeCategorie,CodeUser, Username,Mail,Password,t_user.Photo as image FROM t_post inner join t_user ON t_post.Created_by=t_user.CodeUser WHERE CodeCategorie=3 ORDER BY CodePost DESC LIMIT 4";
$blog = $app->fetchPrepared($req);

include("includes/head.php");

include("includes/header.php");
?>

<main>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/testimonial/test-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mt-60 mb-30">
                            <h2>Blog</h2>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- inner-blog -->
    <section class="inner-blog pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php
                    foreach ($blog as $row) {
                    ?>
                        <div class="bsingle__post mb-50">
                            <div class="bsingle__post-thumb">
                                <img style="width: 100%; background-size: cover; background-position: position;" src="admin/fichier/<?php echo $row['Photo'] ?>" alt="">
                            </div>
                            <div class="bsingle__content">
                                <div class="meta-info">
                                    <ul>
                                        <li><a href="detail_post.php?id=<?php echo $row['CodePost'] ?>"><i class="far fa-user"></i>Posté par <?php echo $row['Username'] ?></a></li>
                                    </ul>
                                </div>
                                <h2><a href="detail_post.php?id=<?php echo $row['CodePost'] ?>"><?php echo $row['Titre'] ?></a></h2>
                                <p><?php echo substr($row['Contenue'],0,200) ?></p>
                                <div class="blog__btn">
                                    <a href="detail_post.php?id=<?php echo $row['CodePost'] ?>" class="btn">Lire plus</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-lg-4">
                    <aside>
                        <!-- <div class="widget mb-40">
                            <div class="widget-title text-center">
                                <h4>Search</h4>
                            </div>
                            <div class="slidebar__form">
                                <form action="#">
                                    <input type="text" placeholder="Search your keyword...">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div> -->
                        <div class="widget mb-40">
                            <div class="widget-title text-center">
                                <h4>Twitter</h4>
                            </div>
                            <ul class="widget-insta-post">
                                <li><a href="#"><img src="img/blog/aside/insta_01.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="img/blog/aside/insta_02.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="img/blog/aside/insta_03.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="img/blog/aside/insta_04.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="img/blog/aside/insta_05.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="img/blog/aside/insta_06.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="img/blog/aside/insta_07.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="img/blog/aside/insta_08.jpg" alt="img"></a></li>
                                <li><a href="#"><img src="img/blog/aside/insta_09.jpg" alt="img"></a></li>
                            </ul>
                        </div>
                        <!-- <div class="widget mb-40">
                            <div class="widget-title text-center">
                                <h4>Follow Us</h4>
                            </div>
                            <div class="widget-social text-center">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-wordpress"></i></a>
                            </div>
                        </div>
                        <div class="widget mb-40">
                            <div class="widget-title text-center">
                                <h4>Categories</h4>
                            </div>
                            <ul class="cat__list">
                                <li><a href="#">Lifestyle <span>(05)</span></a></li>
                                <li><a href="#">Travel <span>(34)</span></a></li>
                                <li><a href="#">Fashion <span>(89)</span></a></li>
                                <li><a href="#">Music <span>(92)</span></a></li>
                                <li><a href="#">Branding <span>(56)</span></a></li>
                            </ul>
                        </div> -->
                        <!-- <div class="widget mb-40">
                            <div class="widget-title text-center">
                                <h4>Feeds</h4>
                            </div>
                            <div class="widget__post">
                                
                                <form name="" id="" action="#" method="post" class="contact-form newslater">
                                    <div class="form-group">
                                        <input class="form-control" id="email2" name="email" type="email" placeholder="Votre adresse mail" value="" required="">
                                        <button type="submit" class="btn btn-custom" id="">S'abonner</button>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                        <!-- <div class="widget mb-40">
                            <div class="widget-title text-center">
                                <h4>Tags</h4>
                            </div>
                            <div class="widget__tag">
                                <ul>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Photo</a></li>
                                    <li><a href="#">Adventures</a></li>
                                    <li><a href="#">Musician</a></li>
                                    <li><a href="#">08</a></li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                    <li><a href="#">Photo</a></li>
                                    <li><a href="#">Adventures</a></li>
                                    <li><a href="#">Musician</a></li>
                                    <li><a href="#">08</a></li>
                                </ul>
                            </div>
                        </div> -->
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <?php
    include("includes/footer_script.php");
    ?>