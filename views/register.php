<?php require('views/guitarShopHeader.php'); ?>
<main>
<body class="color-custom style-simple button-flat layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-classic header-fw minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-right menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky tr-header tr-menu be-reg-20882">
  <div  id="Content">
	<div  class="content_wrapper clearfix">
		<div  class="sections_group">
			<div class="entry-content">
				<div class="section mcb-section no-margin-h no-margin-v dark equal-height bg-cover" style="padding-top:10px; padding-bottom:200px; background-image:url(content/fitness2/images/fotness2-gallery-topbg.jpg); background-repeat:no-repeat; background-position:center bottom">
					<div class="section-decoration top" style="background-image:url(content/fitness2/images/fitness2-op-gradient.png);height:128px"></div>
					<div style="height: 100vh;" class="section_wrapper mcb-section-inner">
						<div  class="wrap mcb-wrap one valign-top clearfix">
							<div  class="mcb-wrap-inner">
								<div style="height: 100%;" class="column mcb-column one-second column_column">
									<div style="height: 100%;" class="column_attr clearfix">
										<h1>Register to Join Fitness Fortify Today!</h1>
										<!--<hr class="no_line" style="margin: 0 auto 000px">-->
										<?php 
											if ($vm != null) {
												if ($vm->errorMsg != '') { ?>
												<p> <?php echo $vm->errorMsg; ?></p>
										<?php }
											}?>
										<form action="." method="post" id="add_edit_product_form">
											<input type="hidden" name="ctlr" value="admin" />
											<input type="hidden" name="action" value="register" />
											<?php echo csrf_token_tag(); ?>
											
											<label>Email:</label>
											<input type="text" name="email"><br>

											<label>First Name:</label>
											<input type="text" name="firstName"><br>

											<label>Last Name:</label>
											<input type="text" name="lastName"><br>
											
											<label>Phone Number:</label>
											<input type="text" name="phoneNumber"><br>

											<label>Password:</label>
											<input type="password" name="password"><br>

											<label>Confirm Password:</label>
											<input type="password" name="confirmPassword"><br>

											<label>&nbsp;</label>
											<input type="submit" value="Sign Up">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>  
</body>

</main>