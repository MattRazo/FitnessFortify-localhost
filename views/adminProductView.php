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
											<h2>View Product Listing</h2>
											
											<!-- display product -->
										<?php

										// Get scaled image size
										$image = new Image ($vm->product->imageFilename);
										$imageSize = $image->scaleWidth(150);

										// Add HMTL tags to the description
										$description_tags = WebText::addTags ($vm->product->description);

										// Calculate and format prices
										$list_price_f = number_format($vm->product->listPrice, 2);
										$unit_price_f = number_format(round($vm->product->listPrice * (1 - $vm->product->discountPercent / 100.0), 2), 2);
										?>

										<h1 style="text-align: center"><?php echo $vm->product->name; ?></h1>
										<div id="left_column">
											<p>
											<?php if ($image->getPath() !== null) { ?>
												<img src="<?php echo $image->getDataURI(); ?>" 
												height="<?php echo $imageSize[1]; ?>" width="<?php echo $imageSize[0]; ?>" alt="image" />
											<?php } ?>
											</p>
										</div>

										<div id="right_column">
											<p style="text-align: center";>
												List price: <?php echo '$' . $list_price_f; ?><br/>
												Discount: <?php echo $vm->product->discountPercent; ?>%<br/>
												Discounted Price: <?php echo '$' . $unit_price_f; ?>
											</p>
											
										<h2 class="no_bottom_margin text-align: center">Description</h2>
										<?php echo $description_tags; ?>
										<?php $token = csrf_token_tag(); ?>

											<!-- display buttons -->
											<form action="." method="post" id="edit_button_form">
												<input type="hidden" name="ctlr" value="admin"/>
												<?php echo $token; ?>												
												<input type="hidden" name="action" value="showEditProduct"/>
												<input type="hidden" name="productId" value="<?php echo $vm->product->id; ?>" />
												<input type="hidden" name="categoryId" value="<?php echo $vm->product->categoryId; ?>" />
												<input type="submit" value="Edit Product" />
											</form>
											<form action="." method="post" >
												<input type="hidden" name="ctlr" value="admin"/>
												<input type="hidden" name="action" value="deleteProduct"/>
												<?php echo $token; ?>
												<input type="hidden" name="productId" value="<?php echo $vm->product->id; ?>" />
												<input type="hidden" name="categoryId" value="<?php echo $vm->product->categoryId; ?>" />
												<input type="submit" value="Delete Product"/>
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
    </div>
</section>
</main>
<?php require('views/guitarShopFooter.php');