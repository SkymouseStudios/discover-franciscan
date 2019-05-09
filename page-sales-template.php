<?php
/**
* Template Name: Sales Page
*
*/

get_header(); ?>


<!-- ////////////////////////// -->
<!-- DEFAULT HEADER -->
<!-- ////////////////////////// -->

<?php $video_header = get_field( 'video_header', $post_id ); ?>
<?php $picture_header = get_field( 'picture_header', $post_id ); ?>
<?php $sales_special_banner = get_field( 'sales_special_banner', $post_id ); ?>

<?php $main_title = get_field( 'main_title', $post_id ); ?>
<?php $subtitle = get_field( 'subtitle', $post_id ); ?>
<?php $hero_cta_text = get_field( 'hero_cta_text', $post_id ); ?>
<?php $hero_cta_link = get_field( 'hero_cta_link', $post_id ); ?>

<div class="sales-hero">

	<?php if ( get_field( 'sales_special_option', $post_id) ) { ?>
		<a class="sales-tag" href="#Special"><?php echo $sales_special_banner; ?></a>
	<?php } ?>
	
	<div class="hero-items">
		<?php if ( $main_title ) { ?>
			<h1><?php echo $main_title; ?></h1>
		<?php } else { ?>
			<h1><?php the_title(); ?></h1>
		<? } ?>
		
		<?php if ( $subtitle ) { ?>
			<p><?php echo $subtitle; ?></p>
		<?php } ?>

		<?php if ( $hero_cta_text ) { ?>
			<p><a class="sales-button" href="<?php echo $hero_cta_link; ?>"><?php echo $hero_cta_text; ?></a></p>
		<?php } ?>
	</div>
	
	<video class="sales-header-video" playsinline="" loop="" autoplay="" muted="" poster="<?php echo $picture_header; ?>">
		<source src="<?php echo $video_header; ?>" type="video/mp4">
	</video>
</div>

<!-- ////////////////////////// -->
<!-- SALES CARD REPEATER -->
<!-- ////////////////////////// -->

<div>

	<?php 

	if( have_rows('sales_section', $post_id ) ) {
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
		<?php endwhile;
	} ?>
</div>

<!-- ////////////////////////// -->
<!-- SPECIAL CALLOUT -->
<!-- ////////////////////////// -->

<?php 
	$special_callout_heading = get_field('special_callout_heading', $post_id);
	$special_callout_content = get_field('special_callout_content', $post_id);
	$special_callout_link_name = get_field('special_callout_link_name', $post_id);
	$special_callout_link_url = get_field('special_callout_link_url', $post_id);
	$special_callout_picture = get_field('special_callout_picture', $post_id);
 ?>

<?php if ( $special_callout_heading ) { ?>
	<section class="section-panel special-callout grid-two-thirds">
		<div class="img-container">
			<img src="<?php echo $special_callout_picture['url']; ?>" alt="">
		</div>
		
		<div class="main-container">
			<h3><?php echo $special_callout_heading;  ?></h3>
			<?php echo $special_callout_content; ?>
			<a class="sales-button" href="<?php echo $special_callout_link_url; ?>"><?php echo $special_callout_link_name; ?></a>	
		</div>
	</div>
<?php } ?>

<!-- ////////////////////////// -->
<!-- THREE FEATURE SECTION -->
<!-- ////////////////////////// -->

<?php 
	$feature_section_title = get_field('feature_section_title', $post_id);
	$feature_section_subheading = get_field('feature_section_subheading', $post_id);
 ?>

<?php if ( $feature_section_title ) { ?>

	<section class="feature-section">
				<h2 class="center-text"><?php echo $feature_section_title; ?></h2>
				<p class="center-text subheading"><?php echo $feature_section_subheading; ?></p>
				
				<div class="section-panel grid-three features">
					<?php  
					if( have_rows('feature_section_features' ) ) {
				 		// loop through the rows of data
				    	while ( have_rows('feature_section_features' ) ) : the_row();
				    		$feature_name = get_sub_field('feature_name');
				    		$feature_description = get_sub_field('feature_description'); 
				    		$feature_image = get_sub_field('feature_image'); 
				    	?>

							<div class="grid-item">
								<img src="<?php echo $feature_image['url']; ?>" alt="" />
								<h4><?php echo $feature_name; ?></h4>
								<p><?php echo $feature_description; ?></p>
							</div>
						<?php endwhile; ?>
					<?php } ?>
				</div>
	</section>

<?php } ?>

<!-- ////////////////////////// -->
<!-- CALENDAR OF EVENTS  -->
<!-- ////////////////////////// -->

<?php 
	if( have_rows('date_card', $post_id ) ) {
 	// loop through the rows of data
	?>

		<div class="section-panel">
			<h2>Baron Day Calendar of Events</h2>
			<p>A more detailed schedule will be distributed upon Baron Day Check-in</p>
		
		
			<section class="grid-half calendar-section">
				
		   		<?php while ( have_rows('date_card', $post_id ) ) : the_row();
		    		$date = get_sub_field('date');
		    		$time = get_sub_field('time');
				?>

					<div class="date-card">
						<div class="date-contents">
							<h3><?php echo $date; ?></h3>
						</div>
						<hr>
						<div class="date-contents">
							<?php echo $time; ?>
						</div>
					</div>

					<?php endwhile; ?>
			</section>

		</div>
	<?php } ?>

<!-- ////////////////////////// -->
<!-- QUOTE AND PICTURE SECTION -->
<!-- ////////////////////////// -->

<?php 
	$sales_callout_quote = get_field( 'sales_quote_text', $post_id );
	$sales_callout_img = get_field( 'sales_quote_image', $post_id );
?>

<?php if ( $sales_callout_quote ) { ?>
	<section class="sales-quote-callout" style="background-image: url(<?php echo $sales_callout_img['url']; ?>);"> 
		<div class="sales-section">
			<p class="sales-large-quote">
				<?php echo $sales_callout_quote; ?>
			</p>
		</div>
	</section>
<?php } ?>

<!-- ////////////////////////// -->
<!-- SPECIAL FEATURES SECTION -->
<!-- ////////////////////////// -->
		
	<?php 
		$sales_special_text = get_field('sales_special_text', $post_id);
		$sales_special_header = get_field('sales_special', $post_id);
		$sales_special_img = get_field('sales_special_image', $post_id);
	 ?>

<?php if ( $sales_special_img ) { ?>

	 <section id="Special" class="sales-special">
	 	<div class="sales-section grid-two-thirds">
	 		<div>
	 			<h2><?php echo $sales_special_header; ?></h2>
	 			<?php echo $sales_special_text; ?>
	 		</div>
	 		<div class="special-image">
	 			<img  src="<?php echo $sales_special_img['url']; ?>" alt="">
	 		</div>
	 	</div>
	 	
		<div class="special-features">
			<div class="sales-section grid-three">
			<?php 
			if( have_rows('feature_repeater' ) ) { 
			 	// loop through the rows of data
			    while ( have_rows('feature_repeater' ) ) : the_row();
			    	$heading = get_sub_field('heading');
			    	$text = get_sub_field('text'); 
			    	?>

					<div class="single-feature">
						<h4><?php echo $heading;?></h4>
						<p><?php echo $text; ?></p>
					</div>
				<?php endwhile;
			}
			?>
			</div>
		</div>
	 </section>

<?php } ?>

<!-- ////////////////////////// -->
<!-- CALL TO ACTION SECTION -->
<!-- ////////////////////////// -->

<?php 
	$cta_heading = get_field('sales_cta_heading');
	$cta_button_text = get_field('sales_cta_button_text');
	$cta_button_url = get_field('sales_cta_button_url');
	$cta_button_text_2 = get_field('sales_cta_button_text_2');
	$cta_button_url_2 = get_field('sales_cta_button_url_2');
	$sales_cta_subheading = get_field('sales_cta_subheading');
?>

<?php if ( $cta_heading ) { ?>
	<section id="CTA" class="sales-cta">
		<h2 class="sales-h2"><?php echo $cta_heading; ?></h2>
		<h4><?php echo $sales_cta_subheading; ?></h4>
		<p><a class="sales-button" href="<?php echo $cta_button_url; ?>"><?php echo $cta_button_text; ?></a></p>
		
		<?php if ( $cta_button_text_2 ) { ?>
			<p><a class="sales-button" href="<?php echo $cta_button_url_2; ?>"><?php echo $cta_button_text_2; ?></a></p>
		<?php } ?>
			
	</section>
<?php } ?>

<!-- ////////////////////////// -->
<!-- FAQ SECTION -->
<!-- ////////////////////////// -->

<?php 
	$faq_title = get_field('faq_title');
 ?>

<?php if ( $faq_title ) { ?>
	
<?php } ?>

<section class="section-panel">
	<h2><?php echo $faq_title; ?></h2>
	<?php 
		
		if( have_rows('faqs') ): 
		
		while( have_rows('faqs') ): the_row(); 
			$question = get_sub_field('question');
			$answer = get_sub_field('answer');
			$faq_subhead = get_sub_field('faq_subhead');
		
			if ( $faq_subhead ) { ?>
				<h4><?php echo $faq_subhead; ?></h4>
			<?php } ?>
	 	<button class="accordion-title"><?php echo $question; ?></button>
		<div class="accordian-panel">
		  <p><?php echo $answer; ?></p>
		</div>

	<?php 
		endwhile;
		endif; 
	?>
</section>

<?php get_footer();

?>


