<?php
/**
 * Created by PhpStorm.
 * User: ferib
 * Date: 28/04/2018
 * Time: 22:56
 */
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php include_once("includes/head.php")?>
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
        <div class="fh5co-hero">
            <div class="fh5co-overlay"></div>
            <div class="fh5co-cover" data-stellar-background-ratio="0.5" ">

                <video id="vidbg" playsinline="" autoplay="" muted="" loop="">
                    <source src="images/wind_turbine.mp4" type="video/mp4"></source>
                </video>
                <div class="desc animate-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h2>Fitness &amp; Health <br>is a <b>Mentality</b></h2
                                <span><a class="btn btn-primary" href="#">Start Your Journey</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:fh5co-hero -->
<!--        --><?php //include "includes/class_schedule.php"?>
        <div class="fh5co-parallax" style="background-image: url(images/home-image-3.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                        <div class="fh5co-intro fh5co-table-cell animate-box">
                            <h1 class="text-center">Commit To Be Fit</h1>
                            <p>You have one life what are you waiting for</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end: fh5co-parallax -->
        <div id="fh5co-programs-section">
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
<!--            --><?php //include "includes/trainers.php";?>
        <div class="fh5co-parallax" style="background-image: url(images/home-image-2.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 fh5co-table">
                        <div class="fh5co-intro fh5co-table-cell box-area">
                            <div class="animate-box">
<!--                                <h1>Fitness Classes this summer</h1>-->
<!--                                <p>Pay now and get 25% Discount</p>-->
<!--                                <a href="#" class="btn btn-primary">Become A Member</a>-->
                                <?php  $get_offer = $dbh->query("SELECT * FROM posts WHERE category_id = 19");
                                $get_offer->execute();
                                $get_offer_data = $get_offer->fetch(pdo::FETCH_OBJ);
                                echo  "<h1>{$get_offer_data->title}</h1>";
                                echo  "<p>{$get_offer_data->content}</p>";
                                echo "<a  href=\"mailto:fazbenipt@gmail.com?subject={$get_offer_data->title}\" class=\"btn btn-primary\">Become A Member</a>
"

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end: fh5co-parallax -->


        <!-- pricing section -->
        <?php// include "includes/pricing.php";?>

   <!--  blog section -->

    <?php
//    include_once("includes/blog.php");
    ?>


        <?php include_once("includes/footer.php");?>



