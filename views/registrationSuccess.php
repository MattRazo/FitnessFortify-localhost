<?php require('views/guitarShopHeader.php'); ?>
<main>
<body class="color-custom style-simple button-flat layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-classic header-fw minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-right menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky tr-header tr-menu be-reg-20882">
  <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section mcb-section no-margin-h no-margin-v dark equal-height bg-cover" style="padding-top:10px; padding-bottom:1000px; background-image:url(content/fitness2/images/fitness2-pricing-top-bg.jpg); background-repeat:no-repeat; background-position:center top">
                            <div class="section-decoration top" style="background-image:url(content/fitness2/images/fitness2-op-gradient.png);height:128px"></div>
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-second column_column">
                                            <div class="column_attr clearfix">
                                                <h1>New Account Information</h1>
                                            <p style="line-height: 2rem; font-size: 2.5rem;">Here is the account information you entered:</p>
	                                        <p style="line-height: 2.5rem; font-size: 2rem;">First name: <?php echo $vm->newUser->firstName; ?><br>
	                                           Last name: <?php echo $vm->newUser->lastName; ?><br>
	                                           Email address: <?php echo $vm->newUser->email; ?><br>
	                                           Phone number: <?php echo $vm->newUser->phoneNumber; ?></p>
                                            <p style="background-color: #1089CF; width:120px; height: 3.4rem; border-radius: 1.5rem; padding-top: 2rem; font-size: 2.5rem;"><a style=" font-size: 2rem; padding-left: 15%; color: rgba(255,255,255,0.8);" href="?ctlr=admin&action=login" title="Log In">Login</a></p>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>


    
</section>
</main>
</main>