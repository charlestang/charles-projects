<?php

?>

<hr />
<div id="footer">
<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
	<!--<p>
		<?php printf(__('%1$s is proudly powered by %2$s'), get_bloginfo('name'),
		'<a href="http://wordpress.org/">WordPress</a>'); ?>
		<br /><?php printf(__('%1$s and %2$s.'), '<a href="' . get_bloginfo('rss2_url') . '">' . __('Entries (RSS)') . '</a>', '<a href="' . get_bloginfo('comments_rss2_url') . '">' . __('Comments (RSS)') . '</a>'); ?>
	</p>-->
    <div class="bottom">
        <ul>
            <li class="first">
                <a href="#">Returns & Exchange</a>
            </li>
            <li>
                <a href="#">Privacy Police</a>
            </li>
            <li>
                <a href="#">Terms & Conditions of Use</a>
            </li>
            <li>
                <a href="#">My Account</a>
            </li>
            <li>
                <a href="#">Powered by Volusion</a>
            </li>
        </ul>
    </div>
    <div class="bot-logo"><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logosmall.png" alt="INDIENATION CULTURE"/></a></div>
</div>
</div>

<?php /* "Just what do you think you're doing Dave?" */ ?>

		<?php wp_footer(); ?>
</body>
</html>
