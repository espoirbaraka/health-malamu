<body>
    <!-- header -->
    <header class="header-area">
        <div id="header-sticky" class="menu-area">
            <div class="container">
                <div class="second-menu">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.php"><img style="height: 50px; width: 100px;" src="admin/fichier/<?php echo $information['Avatar']; ?>" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-9">
                            <div class="responsive"><i class="icon dripicons-align-right"></i></div>
                            <div class="main-menu text-right text-xl-right">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-sub">
                                            <a href="index.php">Acceuil</a>
                                        </li>
                                        <li><a href="#about">Apropos </a></li>
                                        <li><a href="#features">Fonctionnalité</a></li>
                                        <!-- <li><a href="#blog">Blog</a></li> -->
                                        <li class="has-sub">
                                        <a href="#screen">Plus</a>
                                            <ul>
                                                <li><a href="#contact">Contact</a></li>
                                                <li><a href="#partenaire">Partenaire</a></li>
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="distribution.php">Reseaux de distribution</a></li>
                                            </ul>

                                        </li>
                                        <!-- <li><a href="distribution.php">Reseaux de distrubition</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 text-right d-none d-xl-block">
                            <?php //include("langue.php"); ?>
                            <div class="header-btn second-header-btn">
                                <a href="" class="btn">CONNEXION</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>