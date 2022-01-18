<?php require('views/guitarShopHeader.php'); ?>
<main>
<body class="color-custom style-simple button-flat layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-classic header-fw minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-right menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky tr-header tr-menu be-reg-20882">
  <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section mcb-section no-margin-h no-margin-v dark equal-height bg-cover" style="padding-top:10px; padding-bottom:1080px; background-image:url(content/fitness2/images/fitness2-home-mainbg.jpg); background-repeat:no-repeat; background-position:center bottom">
                            <div class="section-decoration top" style="background-image:url(content/fitness2/images/fitness2-op-gradient.png);height:128px"></div>
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-second column_column">
                                            <div class="column_attr clearfix">
                                                <h1>Login to Fitness Fortify</h1>
                                                <hr class="no_line" style="margin: 0 auto 000px">
												<form action="." method="post">
                                                    <input type="hidden" name="ctlr" value="admin">
                                                    <input type="hidden" name="action" value="login">
													<?php echo csrf_token_tag(); ?>
                                                    <label>Email:</label>
                                                    <input type="text" name="username" size="25">
                                                    <label>&nbsp;Password:</label>
                                                    <input type="password" name="password" size="25">
                                                    <br><br>
                                                    <input type="submit" value="Login">
                                                    </form>
												<p>Don't have an account yet?
		                                            <a href="?ctlr=admin&amp;action=register">Sign up now.</a>
	                                                </p>	
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>	

</main>
<?php
