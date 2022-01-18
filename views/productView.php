<?php require('views/guitarShopHeader.php'); ?>
<main>
<section>
    <!-- display product -->
<?php

// Get scaled image size
$image = new Image ($vm->product->imageFilename);
$imageSize = $image->scaleWidth(150);

// Add HMTL tags to the description
$description_tags = WebText::addTags ($vm->product->description);

// Calculate and format price
$unit_price_f = number_format (round($vm->product->listPrice * (1 - $vm->product->discountPercent / 100.0), 2), 2);
?>
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
<h1><?php echo $vm->product->name; ?></h1>
<div id="left_column">
	<p>
	<?php if ($image->getPath() !== null) { ?>
		<img src="<?php echo $image->getPath(); ?>" 
		height="<?php echo $imageSize[1]; ?>" width="<?php echo $imageSize[0]; ?>" alt="image" />
	<?php } ?>
	</p>
</div>

<div id="right_column">
	<p>
		<b>Your Price:</b>
        <?php echo '$' . $unit_price_f; ?>
	</p>
	<form action="." method="post">
		<input type="hidden" name="ctlr" value="cart"> <input type="hidden"
			name="action" value="add"> <input type="hidden" name="product_id"
			value="<?php echo $vm->product->id; ?>"> <b>Quantity:</b>
		<input type="text" name="quantity" value="1" size="2">
		<input type="submit" value="Add to Cart">
	</form>
	<p>Shipped from <?php echo $vm->storeName; ?></p>
	<h2 class="no_bottom_margin">Description</h2>
    <?php echo $description_tags; ?>

</div>
</section>
</main>
<?php
require('views/guitarShopFooter.php');