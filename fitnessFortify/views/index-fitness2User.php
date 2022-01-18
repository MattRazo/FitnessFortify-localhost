<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Be</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="content/fitness2/images/favicon.ico">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Serif:100,300,400,400italic,500,700,700italic,800,900'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Encode+Sans+Expanded:100,300,400,400italic,500,700,700italic,800,900'>

    <!-- CSS -->
    <link rel='stylesheet' href='css/global.css'>
    <link rel='stylesheet' href='content/fitness2/css/structure.css'>
    <link rel='stylesheet' href='content/fitness2/css/fitness2.css'>
    <link rel='stylesheet' href='content/fitness2/css/custom.css'>

</head>

<body class="color-custom style-simple button-flat layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-classic header-fw minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-right menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky tr-header tr-menu be-reg-20882">
    <div id="Wrapper">
        <div id="Header_wrapper">
            <header id="Header">
                <div class="header_placeholder"></div>
                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <div class="logo">
                                    <a id="logo" href="index-fitness2.php" title="BeFitness 2 - BeTheme" data-height="60" data-padding="5"><img class="logo-main scale-with-grid" src="content/fitness2/images/fitness2.png" data-retina="content/fitness2/images/fitness2-retina.png" data-height="31" alt="fitness2"><img class="logo-sticky scale-with-grid" src="content/fitness2/images/fitness2.png" data-retina="content/fitness2/images/fitness2-retina.png" data-height="31" alt="fitness2"><img class="logo-mobile scale-with-grid" src="content/fitness2/images/fitness2.png" data-retina="content/fitness2/images/fitness2-retina.png" data-height="31" alt="fitness2"><img class="logo-mobile-sticky scale-with-grid" src="content/fitness2/images/fitness2.png" data-retina="content/fitness2/images/fitness2-retina.png" data-height="31" alt="fitness2"></a>
                                </div>
                                <div class="menu_wrapper">
                                    <nav id="menu">
                                        <ul id="menu-menu" class="menu menu-main">
                                            <li class="current-menu-item">
                                                <a href=""><span>Home</span></a>
                                            </li>
                                            <li>
                                                <a href="?ctlr=admin&amp;action=gallery"><span>Gallery</span></a>
                                            </li>
                                        </ul>
                                    </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                                </div>
                            </div>
                            <div class="top_bar_right">
                                <div class="top_bar_right_wrapper">
                                    <a href="." class="button button_theme button_js action_button" ><span class="button_label">Logout</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section mcb-section no-margin-h no-margin-v dark equal-height bg-cover" style="padding-top:220px; padding-bottom:0px; background-image:url(content/fitness2/images/fitness2-home-mainbg.jpg); background-repeat:no-repeat; background-position:center bottom">
                            <div class="section-decoration top" style="background-image:url(content/fitness2/images/fitness2-op-gradient.png);height:128px"></div>
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-second column_column">
                                            <div class="column_attr clearfix">
<section>
    <h1>My Listings</h1>
    <p>To view, edit, or delete a product, select the product.</p>
    <p>To add a product, select the "Add Product" link.</p>
    <?php if (count($vm->products) == 0) { ?>
        <ul><li>There are no products for this category.</li></ul>
    <?php } else { ?>
        <h2><?php echo $vm->category->name; ?></h2>
        <ul>
            <?php foreach ($vm->products as $product) { ?>
            <li>
                <a href="?ctlr=admin&amp;action=viewProduct&amp;productId=<?php
                          echo $product->id; ?>">
                    <?php echo $product->name; ?>
                </a>
            </li>
            <?php } ?>
            <li>&nbsp;</li>
        </ul>
    <?php } ?>
</section>
                                                <hr class="no_line" style="margin: 0 auto 500px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <a id="back_to_top" class="button button_js" href=""><i class="icon-up-open-big"></i></a>
                        <div class="copyright">
                            &copy; 2018 BeFitness 2 - BeTheme. Muffin group - HTML by <a target="_blank" rel="nofollow" href="http://bit.ly/1M6lijQ">BeantownThemes</a>
                        </div>
                        <ul class="social">
                            <li class="skype">
                                <a href="#" title="Skype"><i class="icon-skype"></i></a>
                            </li>
                            <li class="facebook">
                                <a href="#" title="Facebook"><i class="icon-facebook"></i></a>
                            </li>
                            <li class="googleplus">
                                <a href="#" title="Google+"><i class="icon-gplus"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#" title="Twitter"><i class="icon-twitter"></i></a>
                            </li>
                            <li class="youtube">
                                <a href="#" title="YouTube"><i class="icon-play"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- side menu -->
    <div id="Side_slide" class="right dark" data-width="250">
        <div class="close-wrapper">
            <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
        </div>
        <div class="extras">
            <a href="http://bit.ly/1M6lijQ" class="button button_theme button_js action_button" target="_blank"><span class="button_label">Login></a>
            <div class="extras-wrapper"></div>
        </div>
        <div class="menu_wrapper"></div>
        <ul class="social">
            <li class="skype">
                <a href="#" title="Skype"><i class="icon-skype"></i></a>
            </li>
            <li class="facebook">
                <a href="#" title="Facebook"><i class="icon-facebook"></i></a>
            </li>
            <li class="googleplus">
                <a href="#" title="Google+"><i class="icon-gplus"></i></a>
            </li>
            <li class="twitter">
                <a href="#" title="Twitter"><i class="icon-twitter"></i></a>
            </li>
            <li class="youtube">
                <a href="#" title="YouTube"><i class="icon-play"></i></a>
            </li>
        </ul>
    </div>
    <div id="body_overlay"></div>

    <!-- JS -->
    <script src="js/jquery-2.1.4.min.js"></script>

    <script src="js/mfn.menu.js"></script>
    <script src="js/jquery.plugins.js"></script>
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/animations/animations.js"></script>
    <script src="js/translate3d.js"></script>
    <script src="js/scripts.js"></script>


</body>

</html>