<?php 
	$sales_special_text = the_field('sales_special_text');
	$sales_special_header = the_field('sales_special_header');
	$sales_special_banner = the_field('sales_special_banner');
	$sales_special_img = the_field('sales_special_img');
 ?>

 <section id="Special">
 	<div class="grid-half">
 		<div>
 			<div class="sales-tag">Limited Time!</div>
 			<h2><?php echo $sales_special_header; ?></h2>
 			<p><?php echo $sales_special_text; ?></p>
 		</div>
 		<img src="<?php $sales_special_img['img']; ?>" alt="<?php $sales_special_img['alt']; ?>">
 	</div>
 	
 	
	<div class="feaures">
		<?php 
		if( have_rows('feature_repeater' ) ):
	 	// loop through the rows of data
	    while ( have_rows('feature_repeater' ) ) : the_row();
	    	$heading = get_sub_field('heading');
	    	$text = get_sub_field('text'); 
	    	?>

			<div class="single-feature">
				<h4><?php echo $heading;?></h4>
				<p><?php echo $text; ?></p>
			</div>
	<?php
	    endwhile;
		endif;
		?>
	</div>
 </section>


