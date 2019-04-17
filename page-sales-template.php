<?php
/**
* Template Name: Sales Page
*
*/

get_header(); ?>


<?php $video_header = get_field( 'video_header', $post_id ); ?>
<?php $picture_header = get_field( 'picture_header', $post_id ); ?>
<?php $sales_special_banner = get_field( 'sales_special_banner', $post_id ); ?>

<!-- Header -->
<div class="sales-hero">

	<?php if ( get_field( 'sales_special_option', $post_id) ): ?>
		<a class="sales-tag" href="#Special"><?php echo $sales_special_banner; ?></a>
	<?php endif ?>
	
	<div class="hero-items">
		<h1>Visit A Campus Like No Other</h1>
		<p>Academically Excellent • Passionately Catholic</p>
	</div>
	
	<video class="sales-header-video" playsinline="" loop="" autoplay="" muted="" poster="<?php echo $picture_header; ?>">
		<source src="<?php echo $video_header; ?>" type="video/mp4">
	</video>
</div>

<div class="">
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
</div>
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

<?php if ( get_field( 'sales_special_option', $post_id) ): ?>
		
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

 <?php endif ?>

<?php /////////////////////////////////////////// ?>

<?php 
	$cta_heading = get_field('sales_cta_heading');
	$cta_button_text = get_field('sales_cta_button_text');
	$cta_button_url = get_field('sales_cta_button_url');
 ?>

<section class="sales-cta">
	<h2 class="sales-h2"><?php echo $cta_heading ?></h2>
	<a class="sales-button" href="<?php echo $cta_button_url; ?>"><?php echo $cta_button_text; ?></a>
	<div class="sales-details">
		<h4>To Redeem Your Free Night Stay</h4>
		<p>Book your visit day for either April 24 or April 26 and then contact Bernardo Gonzalez in our Admissions Office at <a href="mailto:bgonzalez@franciscan.edu">bgonzalez@franciscan.edu</a> or <a href="tel:740-284-5237">740-284-5237</a>. He will make the hotel reservation.</p>
		<p><strong>NOTE: Offer applies only to these two dates, not applicable to any other dates.</strong></p>
	</div>
	
</section>

<?php /////////////////////////////////////////// ?>

<?php get_footer();

?>


