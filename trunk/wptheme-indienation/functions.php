<?php
//Enable automatic general feed link outputting.
automatic_feed_links();

//Add jQuery Cycle for the gallery effect.
wp_enqueue_script('jquery');
wp_register_script('jquery-cycle', get_bloginfo('stylesheet_directory').'/jquery.cycle.all.min.js');
wp_enqueue_script('jquery-cycle');

//Register Sidebar
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '<div class="widgetbottom"></div></li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2><div class="widgettop"></div>',
	));
}


add_action('admin_menu', 'indienation_add_theme_page');
function indienation_add_theme_page() {
	if ( isset( $_GET['page'] ) && $_GET['page'] == basename(__FILE__) ) {
		if (isset($_REQUEST['action']) && 'save' == $_REQUEST['action']) {
			$featureds = array();
			$featureds['1']=$_REQUEST['featured1'];
			$featureds['2']=$_REQUEST['featured2'];
			$featureds['3']=$_REQUEST['featured3'];
			update_option('indie-nation-featured-posts',$featureds);
			
			wp_redirect("themes.php?page=functions.php&saved=true");
			die;
		}
		add_action('admin_head', 'indienation_theme_page_head');
	}
	add_theme_page(__('Set Featured Posts'), __('Set Featured Posts'), 'edit_themes', basename(__FILE__), 'indienation_theme_page');
}

function indienation_theme_page_head() {
	//Here to add admin js and css code.
}

//This is the admin area of this theme
function indienation_theme_page() {
	if ( isset( $_REQUEST['saved'] ) ) echo '<div id="message" class="updated fade"><p><strong>'.__('Options saved.').'</strong></p></div>';
	$featureds = array();
	$featureds = get_option('indie-nation-featured-posts');
?>
<div class='wrap'>
	<h2>Set Featured Posts</h2>
	<form method="post" action="">
		<p>Please set three featured post. Input the post id in the blank.</p>
		<p><label for="featured1">1</label><input id="featured1" name="featured1" type="text" size="15" value="<?php echo $featureds['1'];?>"></p>
		<p><label for="featured2">2</label><input id="featured2" name="featured2" type="text" size="15" value="<?php echo $featureds['2'];?>"></p>
		<p><label for="featured3">3</label><input id="featured3" name="featured3" type="text" size="15" value="<?php echo $featureds['3'];?>"></p>
		<input type="hidden" name="action" value="save" />
		<input type="submit" name="submitform" value="Save options">
	</form>
</div>
<?php 

}

//This function used to generate the excerpt of the featured posts.
function in_excerpt($text){
	$words = explode(' ', $text, 11);
	if (count($words) > 10) {
		array_pop($words);
		$text = implode(' ', $words);
		$text = $text . '...';
	}
	return $text;
}


//This is to add the gallery effect to single pages.
function in_add_gallery_code(){
	
	if (is_single()){
	?>
	
	<script type="text/javascript">
/* <![CDATA[ */
	(function($){
		$(document).ready(function(){
			
			$('#slideshow').after('<ul id="nav">').cycle({ 
			    fx:     'fade', 
			    speed:  'fast', 
			    //timeout: 0, 
			    pager:  '#nav', 
			    height: 'auto',
			    // callback fn that creates a thumbnail to use as pager anchor 
			    pagerAnchorBuilder: function(idx, slide) { 
			        return '<li><a href="#"><img src="' + slide.src + '" width="32" height="32" /></a></li>'; 
			    } 
			});
			
		});

	})(jQuery);
/* ]]> */	
	</script>
	
	<style type="text/css">
		#nav { margin:0;width:695px;}
		#nav li { float:right;list-style:none outside none;margin-left:4px;margin-top:4px;width:32px; }
	</style>
	
	<?php
	}
}

	add_action('wp_head', 'in_add_gallery_code');





?>