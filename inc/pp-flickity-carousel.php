<?php
/**
 * Flickity Carousel default ACF 
 *
 * @package bayflats
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses bayflats_header_style()
 */
?>

<!-- 

variables:
	fp_testimonial_repeater
		-fp_testimonial_text
		-fp_testimonial_name

	fp_testimonial_background	

 -->

<?php 

if( have_rows('fp_testimonial_repeater')): 

//vars
$background = get_field('fp_testimonial_background');
$url		= $background['url'];
?>

<div class="main-carousel-1" style="
		background-image: url('<?php echo $url ?>');
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center top;
		background-color: #263A17;">

	<?php while( have_rows('fp_testimonial_repeater') ): the_row();

	//vars
	$quote		= get_sub_field('fp_testimonial_text');
	$quote_name	= get_sub_field('fp_testimonial_name');

	?>

	<div class="carousel-cell">
		<div class="carousel-cell--textbox tac">
		
			<div class="carousel-cell--quote">
					"<?php echo $quote ?>"
			</div>
			<div class="carousel-cell--name">
				-<?php echo $quote_name ?>
			</div>
			
		</div>
	</div>

	<?php endwhile; ?>

</div>
<?php endif; ?>

