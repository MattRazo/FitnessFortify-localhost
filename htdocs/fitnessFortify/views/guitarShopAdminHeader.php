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


<body class="color-custom style-simple button-flat layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-classic header-fw minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-right menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky tr-header tr-menu be-reg-20882">	
	<div id="Header_wrapper">
		<header id="Header">
			<div class="header_placeholder"></div>
			<div id="Top_bar">
				<div class="container">
					<div class="column one">
						<div style="width: 1100px;" class="top_bar_left clearfix">
							<div class="logo">
								<a id="logo" href="index-fitness2.php" title="BeFitness 2 - BeTheme" data-height="60" data-padding="5"><img class="logo-main scale-with-grid" src="content/fitness2/images/fitness2.png" data-retina="content/fitness2/images/fitness2-retina.png" data-height="31" alt="fitness2"><img class="logo-sticky scale-with-grid" src="content/fitness2/images/fitness2.png" data-retina="content/fitness2/images/fitness2-retina.png" data-height="31" alt="fitness2"><img class="logo-mobile scale-with-grid" src="content/fitness2/images/fitness2.png" data-retina="content/fitness2/images/fitness2-retina.png" data-height="31" alt="fitness2"><img class="logo-mobile-sticky scale-with-grid" src="content/fitness2/images/fitness2.png" data-retina="content/fitness2/images/fitness2-retina.png" data-height="31" alt="fitness2"></a>
							</div>
							<div class="menu_wrapper">
								<nav id="menu">
									<ul id="menu-menu" class="menu menu-main">
										<li class="current-menu-item">
											<a style="font-size: 1.4rem, padding-right: 2rem; color: #FFF;" href="?ctlr=admin&action=gallery"><span style="font-size: 1.3rem;">Home</span></a>
										</li>
										<li>
											<a style="font-size: 1.35rem; padding-left: 1rem; padding-right: 2rem" href="?ctlr=admin&amp;action=gallery"><span>Gallery</span></a>
										</li>
										<li>
											<a style="color:#FFF; font-size: 1.47rem; margin-left: -0.425rem;" href="?ctlr=admin&amp;action=addProduct">Add Product</a>
										</li>
										
										<ul style="margin-left: 3rem; padding-top: 1.55rem; display: flex; justify-content: center; align-item: center; flex-direction: row;">
											<!-- display links for all categories -->
											<?php foreach ($vm->categories as $category) { ?>
											<li style="color: #FFF; font-size: 1.4rem; margin-left: 5rem; text-decoration: none;" ></li>
													<a style="color:#FFF; font-size: 1.4rem;" href="?ctlr=admin&amp;action=listProducts&amp;categoryId=<?php echo $category->id; ?>">
														<?php echo $category->name; ?>
													</a>
												</li>
											<?php } ?>
											<li>&nbsp;</li>
										</ul>
									</ul>										
								</nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
							</div>
						</div>
						<div class="top_bar_right">
							<div class="top_bar_right_wrapper">
								<a href="?ctlr=admin&amp;action=logout" class="button button_theme button_js action_button" ><span class="button_label">Logout</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>
</body>