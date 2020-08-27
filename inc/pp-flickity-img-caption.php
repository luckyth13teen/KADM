<?php
/**
 * Flickity Carousel for image with caption
 * 
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
		carousel_text_img_repeater
			- flick_img
			- flick_txt
			- flick_txt_color
		
		carousel_background
		carousel_background_color
 -->



<?php if( have_rows('carousel_text_img_repeater')):

//vars
$background_flickity	= get_field('carousel_background');
$back_color				= get_field('carousel_background_color');
if ($background_flickity):
$url_background		= $background_flickity('url');
endif;
?>
<div class="main-carousel2" style="
							<?php if( $url_background) : ?>
							background-image: url('<?php echo $url ?>');
							<?php endif; ?>
							background-repeat: no-repeat;
							background-size: cover;
							background-position: center top;
							<?php if( $back_color) :?>	
							background-color: <?php echo $back_color ?>;
							<?php endif; ?>
							">

	<?php while( have_rows('carousel_text_img_repeater') ): the_row();
	//vars
	$img_flick			= get_sub_field('flick_img');
	$text_flick			= get_sub_field('flick_txt');
	$text_color_flick 	= get_sub_field('flick_txt_color');
	?>
	<div class="carousel-cell--container">

		<div class="carousel-cell--image">
			<img src="<?php echo esc_url($img_flick['url']); ?>"> </img>
							
		</div>

		<div class="carousel-cell--textbox--groups tac" <?php if( $text_color_flick): ?>style="
													color: <?php echo $text_color_flick ?> !important;" <?php endif;?>>
				<?php echo $text_flick ?>
			
		</div>

	</div>
	<?php endwhile;?>
</div>
<?php endif;?>
