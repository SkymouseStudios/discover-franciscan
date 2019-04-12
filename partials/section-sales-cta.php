<?php 
	$cta_heading = the_field('sales_cta_heading');
	$cta_button = the_field('sales_cta_button_text');
 ?>

<section class="sales-cta">
	<h2><?php echo $cta_heading ?></h2>
	<a href="#"><?php echo $cta_button_text; ?></a>
</section>