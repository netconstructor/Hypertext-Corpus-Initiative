<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Hyphen</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/select2.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/libs/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        

<?php include("includes/navbar.php"); ?>


        <div class="container">

            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="splash-unit row">
                <div class="span7">
                    <div class="image">
                        <a href="index.php"><img title="Hyphen" src="res/header.png"/></a>
                    </div>
                    <!-- <div class="title">
                        hyphen
                    </div> -->
                </div>
                <div class="span5">
                    <div class="abstract">
                        <p><strong>Prototype monitoring.</strong> A test user experience and client-side monitoring application for Hyphen alpha.</p>
                    </div>
                </div>
            </div>





            <div class="row">
                <div class="span12">
                    <h1>Web entities: hierarchy</h1>
                    <p class="text-info">
                        Explore the structures of web entities as a hierarchy of folders and pages
                    </p>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="span4">
                    <div class="webentities_selector_container">
                        <a style="width:100%;" id="webentities_selector"> </a>
                    </div>
                </div>
                <div class="span8">
                    <ul class="weBrowserPath breadcrumb">
                        <li><span class="divider">/</span></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="span12 weBrowser">
                </div>
            </div>
        </div>

<?php include("includes/footer.php"); ?>

<?php include("includes/codebottom.php"); ?>

        <!-- Page-specific js package -->
        <script src="js/_page_webentities_browse.js"></script>

    </body>
</html>
