<?php if ( get_theme_mod('setting_align-contact-header') == 'header2' ) { ?>
		<div class="chaos-social-media-icons chaos-social-media-contact-header">
			<?php if( get_theme_mod('setting_facebook-socialmedia')) { ?>
				<a href="<?php echo get_theme_mod('setting_facebook-socialmedia');?>" target="_blank">
					<i class="fab fa-facebook-f"></i>
				</a>
			<?php } ?>
			<?php if( get_theme_mod('setting_twitter-socialmedia')) { ?>
				<a href="<?php echo get_theme_mod('setting_twitter-socialmedia');?>" target="_blank">
					<i class="fab fa-twitter"></i> 
				</a>
			<?php } ?>
			<?php if( get_theme_mod('setting_instagram-socialmedia')) { ?>
				<a href="<?php echo get_theme_mod('setting_instagram-socialmedia');?>" target="_blank">
					<i class="fab fa-instagram"></i>
				</a>
			<?php } ?>
			<?php if( get_theme_mod('setting_xing-socialmedia')) { ?>
				<a href="<?php echo get_theme_mod('setting_xing-socialmedia');?>" target="_blank">
					<i class="fab fa-xing"></i> 
				</a>
			<?php } ?>
		</div>
		<div class="chaos-contact-header-text">
			<?php echo get_theme_mod('setting_text-contact-header');?>
		</div>
		<div style="clear: both;"></div>
	<?php } else { ?>
		<div class="chaos-contact-header-text">
			<?php echo get_theme_mod('setting_text-contact-header');?>
		</div>
		<div class="chaos-social-media-icons chaos-social-media-contact-header">
			<?php if( get_theme_mod('setting_facebook-socialmedia')) { ?>
				<a href="<?php echo get_theme_mod('setting_facebook-socialmedia');?>" target="_blank">
					<i class="fab fa-facebook-f"></i>
				</a>
			<?php } ?>
			<?php if( get_theme_mod('setting_twitter-socialmedia')) { ?>
				<a href="<?php echo get_theme_mod('setting_twitter-socialmedia');?>" target="_blank">
					<i class="fab fa-twitter"></i> 
				</a>
			<?php } ?>
			<?php if( get_theme_mod('setting_instagram-socialmedia')) { ?>
				<a href="<?php echo get_theme_mod('setting_instagram-socialmedia');?>" target="_blank">
					<i class="fab fa-instagram"></i>
				</a>
			<?php } ?>
			<?php if( get_theme_mod('setting_xing-socialmedia')) { ?>
				<a href="<?php echo get_theme_mod('setting_xing-socialmedia');?>" target="_blank">
					<i class="fab fa-xing"></i> 
				</a>
			<?php } ?>
		</div>
		<div style="clear: both;"></div>
<?php }?>			