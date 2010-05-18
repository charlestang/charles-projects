<?php


get_header(); ?>

<div id="pagebody">

	<div id="content" class="narrowcolumn" role="main">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
				<?php 
				
				
		    	$url='';$args=array();$attachments = array();
			    $args = array(
					'post_type' => 'attachment',
					'numberposts' => null,
					'post_status' => null,
					'post_parent' => get_the_ID()
				);
				$attachments = get_posts($args);
				if ($attachments) {
					foreach ($attachments as $attachment) {
						if (strpos($attachment->post_mime_type,'image') != -1) {
							$url = wp_get_attachment_url($attachment->ID);
							break;
						}
					}
				}
				
				
				
				
				?>
				<div class="entry">
					<a href="<?php the_permalink() ?>">
					<?php if ($url == '') { ?>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/blankpostpic.png" width="695" height="182"/>
					<?php } else { ?>
					<img src="<?php echo $url;?>" width="695" height="182"/>
					<?php }?>
					</a>
					<?php the_excerpt(); ?>
				</div>
				
				<div class="read-more-link"><a href="<?php the_permalink() ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/readmorelink.png" /></a></div>

				<div class="postmetadata">
					<span class="align-left"><?php the_tags(__('Tags:') . ' ', ' | ', ''); edit_post_link(__('Edit'), ' | ', ''); ?></span>
					<span class="align-right"><?php sharethis_button();?></span>
					<div class="clear"></div>
				</div>
			</div>

		<?php endwhile; ?>

		<?php if (function_exists('wp_pagenavi')) :?>
		<?php wp_pagenavi(); ?>
		<?php else :?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;')) ?></div>
		</div>
		<?php endif;?>

	<?php else : ?>

		<h2 class="center"><?php _e('Not Found'); ?></h2>
		<p class="center"><?php _e('Sorry, but you are looking for something that isn&#8217;t here.'); ?></p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
