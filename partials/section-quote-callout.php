<?php 
	$quote_callout_quote = get_field( 'quote_callout_quote');
	$quote_callout_img = get_field( 'quote_callout_img' );
 ?>

<section class="sales-quote-callout" style="background-image: url(<?php echo $quote_callout_img; ?>);"> 
	<p class="sales-large-quote">
		<?php echo $quote_callout_quote; ?>
	</p>
</section>