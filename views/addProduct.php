<?php require('views/guitarShopAdminHeader.php'); ?>
<html>
<main>
<body class="color-custom style-simple button-flat layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-classic header-fw minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-right menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky tr-header tr-menu be-reg-20882">
  <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section mcb-section no-margin-h no-margin-v dark equal-height bg-cover" style="padding-top:10px; padding-bottom:0px; background-image:url(content/fitness2/images/fitness2-home-mainbg.jpg); background-repeat:no-repeat; background-position:center bottom">
                            <div class="section-decoration top" style="background-image:url(content/fitness2/images/fitness2-op-gradient.png);height:128px"></div>
                            <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; " class="section_wrapper mcb-section-inner">
                                <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; padding-top: 12rem;" class="wrap mcb-wrap one valign-top clearfix">
                                    <div style="display: flex; justify-content: center; align-item: center; flex-direction: column;" class="mcb-wrap-inner">
                                        <div style="padding-left: 30%;" class="column mcb-column one-second column_column">
                                            <div class="column_attr clearfix">
												<section style="display: flex; justify-content: center; align-items: center; flex-direction: column; ">
												<h1 style ="font-size: 1.6rem; margin-left: -4rem; text-align:center;">Listing Manager - Add Product</h1>
												<form action="" method="POST" id="add_edit_product_form" enctype="multipart/form-data">
													<input type="hidden" name="ctlr" value="admin" />
													<input type="hidden" name="action" value="addProduct" />
													<?php echo csrf_token_tag(); ?>
													<label style="padding-left: -2rem; font-size: 1.2rem;">Category:</label>
													<select name="categoryId">
													<?php foreach ($vm->categories as $category) { 
														if ($category->id == 1) {
															$selected = 'selected';
														} else {
															$selected = '';
														} ?>
														<option style="font-size: 1.1rem;" value="<?php echo $category->id; ?>" <?php
																  echo $selected ?>>
															<?php echo $category->name; ?>
														</option>
													<?php } ?>
													</select><br>

													<label style="font-size: 1.2rem;">Name:</label>
													<input style="font-size: 1.1rem;" type="text" name="name"><br>
													
													<label style="font-size: 1.2rem;">Image File</label>
													<input style="font-size: 1.1rem;" type="file" name="profile_picture"><br>

													<label style="margin-top: 1rem; font-size: 1.2rem;">Description:</label>
													<textarea style="font-size: 1.1rem; margin-top: 1rem; background-color: rgba(0,0,0,0.7); border-radius: 0.5rem;" name="description" 
															  rows="10"></textarea><br>
													<br>
													<label>&nbsp;</label>
													<input style="margin-left: 20%;" type="submit" name="submit" value="Upload file">
												</form>
												



												
												<div style=" margin-right: 6rem; width: 400px; background-color: rgba(0,0,0,0.4); border-radius: 0.5rem; margin-top: 2rem;" id="formatting_directions">
													<h2 style="text-align: center;">How to format the Description entry</h2>
													<ul style="padding-left: 2rem;">
														<li>Use two returns to start a new paragraph.</li>
														<li>Use an asterisk to mark items in a bulleted list.</li>
														<li>Use one return between items in a bulleted list.</li>
														<li>Use standard HMTL tags for bold and italics.</li>
													</ul>
											</div>
										</div>
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
<?php require('views/guitarShopFooter.php');