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
			<div class="text-card">
				<h3><?php echo $heading;?></h3>
				<hr class="gold-line">
				<p><?php echo $text; ?></p>
			</div>
			<div class="video-card">
				<video playsinline controls loop="" autoplay="" poster="<?php echo $img; ?>">
					<source src="<?php echo $video; ?>" type="video/mp4">
				</video>
			</div>
		</section>
<?php
    endwhile;
	endif;
	?>