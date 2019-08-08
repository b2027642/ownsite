<?php
/**
 * Created by PhpStorm.
 * User: ferib
 * Date: 29/04/2018
 * Time: 18:21
 */?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php
include_once("includes/head.php");
$info = get_seo_details();
?>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <div id="fh5co-header">
            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo"><a href="index">Faz Fit<span>ness</span></a></h1>
                        <!-- START #fh5co-menu-wrap -->
                        <?php include "includes/nav.php";?>
                    </div>
                </div>
            </header>
        </div>
        <!-- end:fh5co-header -->
        <div class="fh5co-parallax" style="background-image: url(images/home-image-4.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                        <div class="fh5co-intro fh5co-table-cell animate-box">
                            <h1 class="text-center">About Me</h1>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end: fh5co-parallax -->

        <div id="fh5co-team-section">
            <div class="container">
                <div class="row about">
<!--                    <h2 style="text-align: center;">Own Transformations!</h2>-->
<!--                    <div class="col-md-12 col-md-offset-0">-->
<!--                        <div class="col-md-4 col-md-offset-0">-->
<!--                            <img class="img-responsive animate-box" src="images/6174638896_IMG_0292.JPG" alt="Faz Beni" width="100%">-->
<!--                        </div>-->
<!--                        <div class="col-md-4 col-md-offset-0">-->
<!--                            <img class="img-responsive animate-box" src="images/progress.jpg" alt="Faz Beni" width="100%">-->
<!--                        </div>-->
<!--                        <div class="col-md-4 col-md-offset-0">-->
<!--                            <img class="img-responsive animate-box" src="images/before-after.jpg" alt="Faz Beni" width="100%">-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="col-md-12 col-md-offset-0 animate-box">
                        <p><?= $info->content;?></p>
                        <blockquote>
                            <p>Just Get It DONE!!!</p>
                        </blockquote>
                        <p></p>
                    </div>
                </div>

            </div>
        </div>
        <div id="fh5co-programs-section" class="fh5co-lightgray-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="heading-section text-center animate-box">
                            <h2>My  Programs</h2>
                            <p>My programs are built for each individuals to suit their physiques and abilities</p>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                <?php include_once("includes/programs.php");?>

                </div>
            </div>
        </div>

        <div id="fh5co-programs-section" class="fh5co-lightgray-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="heading-section text-center animate-box">
                            <h2>Recent Posts</h2>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <?php include_once("includes/social/instagram.php");?>

                </div>
            </div>
        </div>


        <?php include_once("includes/footer.php");?>







