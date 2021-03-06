<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> MBRT 2016</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- PLACE ORIGINAL FACEBOOK META TAGS -->
            <meta property="fb:admins" content="YOUR_ID_ADMIN_OF_THE_APP" />
            <meta property="fb:app_id" content="PLACE_YOUR_ID" />
            
            <meta property="og:title" content="PLACE_YOUR_TITLE" />
            <meta property="og:site_name" content="PLACE_YOUR_SITE_NAME"/>
            <meta property="og:url" content="PLACE_YOUR_OFFICIAL_URL" />
            <meta property="og:description" content="PLACE_YOUR_DESCRIPTION" />

            <!-- PLACE WHAT KIND OF APP THIS IS -->
            <meta property="og:type" content="website" />

            <!-- PLACE WHERE IS MOST PEOPLE WHO WILL SEE YOUR SITE -->
            <meta property="og:locale" content="es_MX" />

            <!-- PLACE AN IMAGE FOR_THE SHARE GRAPH -->
            <meta property="og:image" content="http://rizo-olvera.com/img/rizo_olvera_share.jpg" />
        <!-- END FB META TAGS -->

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.png in the root directory -->
        <link rel="icon" type="image/png" href="favicon.png">

        <!-- EXTERNAL FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&subset=latin-ext" rel="stylesheet">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/app.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- PLACE_HERE_YOUR_FBASYNCINIT()_FUNCTION_FOR_THE_APP -->

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="fullWrapper">
            <div id="mbrtWrapper">
                <?php
                    require("modules/left_nav.php");
                    require("modules/right_nav.php");
                    require("home.php");
                    // require("menu.php");
                ?>

            </div>
        </div>
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
