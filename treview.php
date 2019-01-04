<?php if($photograph_settings['photograph_disable_fancy_box']==0){ ?>
					<a class="popup-image" data-fancybox="post-gallery" data-title="<?php the_title_attribute(); ?>" href="<?php echo esc_url($image_attributes[0]); ?>" >
						<?php the_post_thumbnail(); ?>
						</a>
					<?php }else { ?>
						<a class="popup-image" data-fancybox="post-gallery" data-title="<?php the_title_attribute(); ?>" href="<?php echo esc_url(get_permalink()); ?>" >
						<?php the_post_thumbnail(); ?>
						</a>
					<?php } ?>

<h2 class="entry-title"> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title();?> </a> </h2> <!-- end.entry-title -->
