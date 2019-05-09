<div class="chaos-contact-header">
	<div class="chaos-container">
		<div class="chaos-social-media-icons chaos-social-media-align-<?php echo get_theme_mod('setting_align-socialmedia');?>">
			<?php if( get_option('setting_facebook-socialmedia')) { ?>
				<a href="<?php echo get_option('setting_facebook-socialmedia');?>" target="_blank">
					<i class="fab fa-facebook-f"></i>
				</a>
			<?php } ?>
			<?php if( get_option('setting_twitter-socialmedia')) { ?>
				<a href="<?php echo get_option('setting_twitter-socialmedia');?>" target="_blank">
					<i class="fab fa-twitter"></i> 
				</a>
			<?php } ?>
			<?php if( get_option('setting_instagram-socialmedia')) { ?>
				<a href="<?php echo get_option('setting_instagram-socialmedia');?>" target="_blank">
					<i class="fab fa-instagram"></i>
				</a>
			<?php } ?>
			<?php if( get_option('setting_xing-socialmedia')) { ?>
				<a href="<?php echo get_option('setting_xing-socialmedia');?>" target="_blank">
					<i class="fab fa-xing"></i> 
				</a>
			<?php } ?>
		</div>
	</div>
</div>