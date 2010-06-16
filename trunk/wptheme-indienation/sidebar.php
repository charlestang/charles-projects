<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
	<div id="sidebar">
	  <h3 style="margin:0;font:bold 11px 'Times New Roman'">Follow Us</h3>
	  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/friendfeedlogo.png" alt="friendfeed" />
	  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/rssfeedlogo.png" alt="rssfeed" />
	  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitterlogo.png" alt="twitter" /><br />
	  <p style="width: 132px; overflow: hidden;"><a href="mailto:culture@indienation.com">culture@indienation.com</a></p>
		<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

			<?php endif; ?>
		</ul>
	</div>

