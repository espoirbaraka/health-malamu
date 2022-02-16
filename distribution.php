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
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2" style="width: 100%;">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mt-60 mb-30">
                            <h2>Nos reseaux de distribution</h2>
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
    <section class="inner-blog pt-120 pb-120" style="padding: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>CENTRE MEDICAL</th>
                                <th>DOCTEUR URGENTISTE</th>
                                <th>ZONE DE LOCALISATION</th>
                                <th>CONTACTS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CS Murara</td>
                                <td>Baraka Bigega Espoir</td>
                                <td>goma</td>
                                <td>0977553723</td>
                            </tr>
                            <tr>
                                <td>CS Murara</td>
                                <td>Baraka Bigega Espoir</td>
                                <td>goma</td>
                                <td>0977553723</td>
                            </tr>
                            <tr>
                                <td>CS Murara</td>
                                <td>Baraka Bigega Espoir</td>
                                <td>goma</td>
                                <td>0977553723</td>
                            </tr>
                            <tr>
                                <td>CS Murara</td>
                                <td>Baraka Bigega Espoir</td>
                                <td>goma</td>
                                <td>0977553723</td>
                            </tr>
                            <tr>
                                <td>CS Murara</td>
                                <td>Baraka Bigega Espoir</td>
                                <td>goma</td>
                                <td>0977553723</td>
                            </tr>
                            <tr>
                                <td>CS Murara</td>
                                <td>Baraka Bigega Espoir</td>
                                <td>goma</td>
                                <td>0977553723</td>
                            </tr>
                            <tr>
                                <td>CS Murara</td>
                                <td>Baraka Bigega Espoir</td>
                                <td>goma</td>
                                <td>0977553723</td>
                            </tr>
                            <tr>
                                <td>CS Murara</td>
                                <td>Baraka Bigega Espoir</td>
                                <td>goma</td>
                                <td>0977553723</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php
    include("includes/footer_script.php");
    ?>