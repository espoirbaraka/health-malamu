<?php
include 'admin/class/app.php';

$requette = 'SELECT * FROM t_information WHERE CodeInformation=1';
$information = $app->fetch($requette);

$id = $_GET['id'];
$requette2 = "SELECT Titre,CodePost,Contenue,t_post.Photo,t_post.Created_on,t_post.Created_by,CodeCategorie,CodeUser,Username,Mail FROM t_post
            INNER JOIN t_user
            ON t_post.Created_by=t_user.CodeUser
            WHERE CodePost=$id";
$post = $app->fetch($requette2);

$req = "SELECT CodePost,Titre,Contenue,t_post.Photo,t_post.Created_on,Created_by,CodeCategorie,CodeUser, Username,Mail,Password,t_user.Photo as image FROM t_post inner join t_user ON t_post.Created_by=t_user.CodeUser ORDER BY CodePost DESC LIMIT 4";
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
                            <h3 style="color: white;"><?php echo $post['Titre']; ?></h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- inner-blog -->
    <section class="inner-blog b-details-p pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-wrap">
                        <div class="bsingle__post-thumb mb-30">
                            <img style="height: 400px;" src="admin/fichier/<?php echo $post['Photo']; ?>" alt="">
                        </div>
                        <div class="meta__info">
                            <ul>
                                <li><a href="#"><i class="far fa-user"></i><?php echo $post['Username']; ?></a></li>
                                <li><i class="far fa-calendar"></i><?php echo $app->dateconv($post['Created_on']); ?></li>
                            </ul>
                        </div>
                        <div class="details__content pb-50">
                            <h2><?php echo $post['Titre']; ?></h2>
                            <?php echo $post['Contenue']; ?>
                            <!-- <div class="row">
                                <div class="col-xl-6 col-md-7">
                                    <div class="post__tag">
                                        <h5>Releted Tags</h5>
                                        <ul>
                                            <li><a href="#">organic</a></li>
                                            <li><a href="#">Foods</a></li>
                                            <li><a href="#">tasty</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-5">
                                    <div class="post__share text-right">
                                        <h5>Social Share</h5>
                                        <ul>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-gg"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- <div class="posts_navigation pt-35 pb-35">
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-md-5">
                                    <div class="prev-link">
                                        <span>Prev Post</span>
                                        <h4><a href="#">Tips on Minimalist</a></h4>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-2 text-left text-md-center">
                                    <a href="blog.html" class="blog-filter"><img src="img/icon/c_d01.png" alt=""></a>
                                </div>
                                <div class="col-xl-4 col-md-5">
                                    <div class="next-link text-left text-md-right">
                                        <span>next Post</span>
                                        <h4><a href="#">Less Is More</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="related__post mt-45 mb-85">
                            <div class="post-title">
                                <h4>Autres publications</h4>
                            </div>
                            <div class="row">
                                <?php
                                foreach ($blog as $row) {
                                ?>
                                    <div class="col-md-6">
                                        <div class="related-post-wrap mb-30">
                                            <div class="post-thumb">
                                                <img style="height: 200px;" src="admin/fichier/<?php echo $row['Photo']; ?>" alt="">
                                            </div>
                                            <div class="rp__content">
                                                <h3><a href="detail_post.php?id=<?php echo $row['CodePost']; ?>"><?php echo $row['Titre']; ?></a></h3>
                                                <p><?php echo substr($row['Contenue'],0,40) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>

                                <!-- <div class="col-md-6">
                                    <div class="related-post-wrap mb-30">
                                        <div class="post-thumb">
                                            <img src="img/blog/b_details04.jpg" alt="">
                                        </div>
                                        <div class="rp__content">
                                            <h3><a href="#">Sed ut perspiciatis unde omnis iste natus.</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or
                                                incididunt ut labore et dolore.</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <!-- <div class="avatar__wrap text-center mb-45">
                            <div class="avatar-img">
                                <img src="img/blog/comment/avatar.png" alt="">
                            </div>
                            <div class="avatar__info">
                                <h5>Rosalina William</h5>
                                <div class="avatar__info-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="avatar__wrap-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequa aute irure dolor.</p>
                            </div>
                        </div>
                        <div class="comment__wrap pb-45 mb-45">
                            <div class="comment__wrap-title">
                                <h5>Comments</h5>
                            </div>
                            <div class="single__comment mb-35">
                                <div class="comments-avatar">
                                    <img src="img/blog/comment/c_01.png" alt="">
                                </div>
                                <div class="comment-text">
                                    <div class="avatar-name mb-15">
                                        <h6>ALina Kelian</h6>
                                        <span>19th May 2018</span>
                                        <a href="#" class="comment-reply"><i class="fas fa-reply"></i>Reply</a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                            <div class="single__comment children mb-35">
                                <div class="comments-avatar">
                                    <img src="img/blog/comment/c_02.png" alt="">
                                </div>
                                <div class="comment-text">
                                    <div class="avatar-name mb-15">
                                        <h6>Rlex Kelian <i class="fas fa-bookmark"></i></h6>
                                        <span>19th May 2018</span>
                                        <a href="#" class="comment-reply"><i class="fas fa-reply"></i>Reply</a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut
                                        aliquip commodo.</p>
                                </div>
                            </div>
                            <div class="single__comment">
                                <div class="comments-avatar">
                                    <img src="img/blog/comment/c_03.png" alt="">
                                </div>
                                <div class="comment-text">
                                    <div class="avatar-name mb-15">
                                        <h6>Roboto Alex</h6>
                                        <span>21th May 2018</span>
                                        <a href="#" class="comment-reply"><i class="fas fa-reply"></i>Reply</a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut
                                        aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="post-comments-form mb-50">
                            <div class="comment__wrap-title">
                                <h5>Post Comment</h5>
                            </div>
                            <div class="comment-box">
                                <form action="#" class="comment__form">
                                    <div class="comment-field text-area mb-20">
                                        <i class="fas fa-pencil-alt"></i>
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Type your comments...."></textarea>
                                    </div>
                                    <div class="comment-field mb-20">
                                        <i class="far fa-user"></i>
                                        <input type="text" placeholder="Type your name....">
                                    </div>
                                    <div class="comment-field mb-20">
                                        <i class="fas fa-envelope"></i>
                                        <input type="email" placeholder="Type your email....">
                                    </div>
                                    <div class="comment-field mb-20">
                                        <i class="fas fa-globe"></i>
                                        <input type="email" placeholder="Type your website....">
                                    </div>
                                    <button class="btn">Post Comments</button>
                                </form>
                            </div>
                        </div> -->
                    </div>
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
    <!-- inner-blog-end -->
<?php
include("includes/footer_script.php");
?>