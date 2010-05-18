<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>


<div id="pagebody">
	
	<div id="content" class="narrowcolumn" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>

			<div class="entry">
				
				
				<?php 
				//Get all pictures in the media library attached to this post
		    	$args = array();$imageurls = array();$attachments = array();
			    $args = array(
					'post_type' => 'attachment',
					'numberposts' => null,
					'post_status' => null,
					'post_parent' => get_the_ID()
				);
				$attachments = get_posts($args);
				if ($attachments) {
					foreach ($attachments as $attachment) {
						if (strpos($attachment->post_mime_type,'image') !== false) {
							$imageurls[] = wp_get_attachment_url($attachment->ID);
						}
					}
				}
				//var_dump($attachments);
				?>
				
				
				<?php if (!empty($imageurls)) :?>
				<div id="gallery">
					<div id="slideshow">
					<?php foreach ($imageurls as $imageurl) {?>
						<img src="<?php echo $imageurl;?>" width="695" height="185" />
					<?php }?>
					</div>
					<div class="clear"></div>
				</div>				
				<?php endif;?>
				
				
				
				
				<?php the_content('<p class="serif">' . __('Read the rest of this entry &raquo;') . '</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

				<div class="postmetadata">
					<span class="align-left"><?php the_tags(__('Tags:') . ' ', ' | ', ''); edit_post_link(__('Edit'), ' | ', ''); ?></span>
					<span class="align-right"><?php sharethis_button();?></span>
					<div class="clear"></div>
				</div>

			</div>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

	</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
