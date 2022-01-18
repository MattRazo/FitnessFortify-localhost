<?php require('views/guitarShopAdminHeader.php'); ?>
<main>
<body class="color-custom style-simple button-flat layout-full-width if-zoom if-border-hide no-content-padding no-shadows header-classic header-fw minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-right menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky tr-header tr-menu be-reg-20882">
  <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section mcb-section no-margin-h no-margin-v dark equal-height bg-cover" style="padding-top:10px; padding-bottom:300px; background-image:url(content/fitness2/images/fitness2-home-mainbg.jpg); background-repeat:no-repeat; background-position:center bottom">
                            <div class="section-decoration top" style="background-image:url(content/fitness2/images/fitness2-op-gradient.png);height:128px"></div>
                            <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; " class="section_wrapper mcb-section-inner">
                                <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; padding-top: 12rem;" class="wrap mcb-wrap one valign-top clearfix">
                                    <div style="display: flex; justify-content: center; align-item: center; flex-direction: column;" class="mcb-wrap-inner">
                                        <div style="padding-left: 10rem;" class="column mcb-column one-second column_column">
                                            <div style="padding-left: 10rem;" class="column_attr clearfix">
												<section style="display: flex; justify-content: center; align-items: center; flex-direction: column; ">
												<h1 style ="font-size: 1.5rem; text-align:center;" >Listing Manager - Edit Product</h1>
												<form action="." method="post" id="add_edit_product_form">
													<input type="hidden" name="ctlr" value="admin" />
													<input type="hidden" name="action" value="addEditProduct" />
													<?php echo csrf_token_tag(); ?>
													<input type="hidden" name="productId" value="<?php echo $vm->product->id; ?>">
													<label>Category:</label>
													<select name="categoryId">
													<?php foreach ($vm->categories as $category) { 
														if ($category->id == $vm->product->categoryId) {
															$selected = 'selected';
														} else {
															$selected = '';
														} ?>
														<option value="<?php echo $category->id; ?>" <?php
																  echo $selected ?>>
															<?php echo $category->name; ?>
														</option>
													<?php } ?>
													</select><br>

													<label>Name:</label>
													<input type="text" name="name"
														   value="<?php echo $vm->product->name; ?>"><br>

													<label>List Price:</label>
													<input type="text" name="price"
														   value="<?php echo $vm->product->listPrice; ?>"><br>

													<label>Discount Percent:</label>
													<input type="text" name="discountPercent"
														   value="<?php echo $vm->product->discountPercent; ?>"><br>
														   
													<label>Image File</label>
													<input type="file" name="imageFile"><br>

													<label>Description:</label>
													<textarea name="description"
														rows="10" ><?php echo $vm->product->description; ?></textarea><br>
													<br>
													<label>&nbsp;</label>
													<input type="submit" value="Submit">
												</form>
												
												<div id="formatting_directions">
													<h2 style="background-color: rgba(0, 0, 0, 0.4); border-radius: 0.5rem; margin-top: 2rem; text-align: center; padding-top: 1rem;">How to format the Description entry</h2>
													<ul>
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