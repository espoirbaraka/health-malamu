<?php
include 'admin/class/app.php';

$requette = 'SELECT * FROM t_information WHERE CodeInformation=1';
$information = $app->fetch($requette);

include("includes/head.php");

include("includes/header.php");

include("includes/slide.php");

include("includes/presentation.php");

include("includes/fonctionnalite.php");

include("includes/video.php");

include("includes/question.php");

include("includes/new_letter.php");

include("includes/temoignage.php");

include("includes/blog.php");

include("includes/partenaire.php");

include("includes/contact.php");

include("includes/footer_script.php");
?>

