<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/ie7.css">
<![endif]-->
<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/ie6.css">
<![endif]-->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="floater"></div>
<div id="page">
<div id="bg"></div>
<div id="mainmenu">
  	<ul>
  		<li><a href="#">Collections</a></li>
  		<li class="current-menu"><a href="#">Culture</a></li>
  		<li><a href="#">Designers</a></li>
  		<li><a href="#">About Us</a></li>
  		<li class="last"><a href="#">CHECKOUT</a></li>
  	</ul>
</div>
<div id="header">
	<div id="headerimg">
		<h1><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" height="36" width="158" alt="" /></a></h1>
		<div class="description"><?php bloginfo('description'); ?></div>
		<form action="<?php echo get_option('home'); ?>/" method="get">
			<div><label for="s" class="screen-reader-text">Search for:</label>
			<input type="text" id="s" name="s" value="" />
			</div>
		</form>
		<div class="clear"></div>
		<?php 
			$featureds = get_option('indie-nation-featured-posts'); 
	    	$featured1 = get_post($featureds['1']);
	    	$featured2 = get_post($featureds['2']);
	    	$featured3 = get_post($featureds['3']);
	    	//var_dump($featured1);
	    
	    	$url='';$args=array();
		    $args = array(
				'post_type' => 'attachment',
				'numberposts' => null,
				'post_status' => null,
				'post_parent' => $featured1->ID
			);
			$attachments = get_posts($args);
			if ($attachments) {
				foreach ($attachments as $attachment) {
					if (strpos($attachment->post_mime_type,'image') !== false) {
						$url = wp_get_attachment_url($attachment->ID);
						break;
					}
				}
			}
			//var_dump($attachments);
		
		?>
		<div class="feature-post"><div class="feature-pic">
			<a href="<?php echo get_permalink($featured1->ID);?>">
			<?php if($url==''){ ?>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/blankfeaturepic.png" width="288" height="138" alt=""/>
			<?php } else { ?>
			<img src="<?php echo $url;?>" alt=""/>
			<?php }?>
			</a></div>
			<div class="feature-expert"><strong><?php echo $featured1->post_title;?></strong> <?php echo $featured1->post_excerpt;?></div>
			<div class="read-more-link"><a href="<?php echo get_permalink($featured1->ID);?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/readmorelink.png" alt=""/></a></div>
		</div>
		<?php 
		
	    	$url='';$args=array();$attachments = array();
		    $args = array(
				'post_type' => 'attachment',
				'numberposts' => null,
				'post_status' => null,
				'post_parent' => $featured2->ID
			);
			$attachments = get_posts($args);
			if ($attachments) {
				foreach ($attachments as $attachment) {
					if (strpos($attachment->post_mime_type,'image') !== false) {
						$url = wp_get_attachment_url($attachment->ID);
						break;
					}
				}
			}
		
		
		?>
		<div class="feature-post"><div class="feature-pic">
			<a href="<?php echo get_permalink($featured2->ID);?>">
			<?php if($url==''){ ?>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/blankfeaturepic.png" width="288" height="138" alt=""/>
			<?php } else { ?>
			<img src="<?php echo $url;?>" alt=""/>
			<?php }?>
			</a></div>
			<div class="feature-expert"><strong><?php echo $featured2->post_title;?></strong> <?php echo $featured2->post_excerpt;?></div>
			<div class="read-more-link"><a href="<?php echo get_permalink($featured2->ID);?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/readmorelink.png" alt=""/></a></div>
		</div>
		<?php 
		
	    	$url='';$args=array();$attachments = array();
		    $args = array(
				'post_type' => 'attachment',
				'numberposts' => null,
				'post_status' => null,
				'post_parent' => $featured3->ID
			);
			$attachments = get_posts($args);
			if ($attachments) {
				foreach ($attachments as $attachment) {
					if (strpos($attachment->post_mime_type,'image') !== false) {
						$url = wp_get_attachment_url($attachment->ID);
						break;
					}
				}
			}
		
		
		?>
		<div class="feature-post"><div class="feature-pic">
			<a href="<?php echo get_permalink($featured3->ID);?>">
			<?php if($url==''){ ?>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/blankfeaturepic.png" width="288" height="138" alt=""/>
			<?php } else { ?>
			<img src="<?php echo $url;?>" alt=""/>
			<?php }?>
			</a></div>
			<div class="feature-expert"><strong><?php echo $featured3->post_title;?></strong> <?php echo $featured3->post_excerpt;?></div>
			<div class="read-more-link"><a href="<?php echo get_permalink($featured3->ID);?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/readmorelink.png" alt=""/></a></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<hr />
