<?php
/**
* Template Name: Sales Page
*
*/

get_header(); ?>

<!-- (Repeat Sections) -->
	<?php 

	if( have_rows('sales_section', $post_id ) ):
 	// loop through the rows of data
    while ( have_rows('sales_section', $post_id ) ) : the_row();
    	$img = get_sub_field('img');
    	$video = get_sub_field('video');
    	$heading = get_sub_field('heading');
    	$text = get_sub_field('text'); 
    	?>

        <section class="sales-panel grid-half">
			<div class="text-holder">
				<div class="text-card">
					<h3><?php echo $heading;?></h3>
					<hr class="gold-line">
					<p><?php echo $text; ?></p>
				</div>
			</div>
			
			<div class="video-card">
				<video playsinline="" loop="" autoplay="" muted="" poster="<?php echo $img['url']; ?>">
					<source src="<?php echo $video; ?>" type="video/mp4">
				</video>
			</div>
		</section>
<?php
    endwhile;
	endif;
	?>

<?php /////////////////////////////////////////// ?>

<?php 
	$sales_callout_quote = get_field( 'sales_quote_text', $post_id );
	$sales_callout_img = get_field( 'sales_quote_image', $post_id );
 ?>

<section class="sales-quote-callout" style="background-image: url(<?php echo $sales_callout_img['url']; ?>);"> 
	<div class="sales-section">
		<p class="sales-large-quote">
			<?php echo $sales_callout_quote; ?>
		</p>
	</div>
</section>

<?php /////////////////////////////////////////// ?>

<?php 
	$sales_special_text = get_field('sales_special_text', $post_id);
	$sales_special_header = get_field('sales_special', $post_id);
	$sales_special_banner = get_field('sales_special_banner', $post_id);
	$sales_special_img = get_field('sales_special_image', $post_id);
 ?>

 <section id="Special" class="sales-special">
 	<div class="sales-section grid-two-thirds">
 		<div>
 			<div class="sales-tag">Limited Time!</div>
 			<h2><?php echo $sales_special_header; ?></h2>
 			<?php echo $sales_special_text; ?>
 		</div>
 		<div class="special-image">
 			<img  src="<?php echo $sales_special_img['url']; ?>" alt="<?php echo $sales_special_img['alt']; ?>">
 		</div>
 	</div>
 	
 	
	<div class="special-features">
		<div class="sales-section grid-three">
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
	</div>
 </section>

<?php /////////////////////////////////////////// ?>

<?php 
	$cta_heading = get_field('sales_cta_heading');
	$cta_button_text = get_field('sales_cta_button_text');
 ?>

<section class="sales-cta">
	<h2 class="sales-h2"><?php echo $cta_heading ?></h2>
	<a href="#"><?php echo $cta_button_text; ?></a>
</section>

<?php /////////////////////////////////////////// ?>

<?php get_footer();

?>


