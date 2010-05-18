<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
<div id="pagebody">
	<div id="content" class="narrowcolumn" role="main">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle"><?php _e('Search Results'); ?></h2>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class(); ?>>
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
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

		<h2 class="center"><?php _e('No posts found. Try a different search?'); ?></h2>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
