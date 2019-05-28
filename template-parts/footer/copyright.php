<?php if ( get_theme_mod('setting_align-copyright') == 'copyright2' ) { ?>
		<div class="chaos-social-media-icons chaos-social-media-copyright">
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
		<div class="chaos-copyright-text">
			<?php echo get_theme_mod('setting_text-copyright');?>
			<div class="chaos-copyright-menu">
				<?php
					wp_nav_menu( array(
						'menu'   => get_theme_mod('setting_menu-copyright'),
					) );
				?>	
			</div>	
		</div>
		<div style="clear: both;"></div>
	<?php } else { ?>
		<div class="chaos-copyright-text">
			<?php echo get_theme_mod('setting_text-copyright');?>
			
			<?php if( get_theme_mod('setting_menu-copyright') ) { ?>
				<div class="chaos-copyright-menu">
					<?php
						wp_nav_menu( array(
							'menu'   => get_theme_mod('setting_menu-copyright'),
						) );
					?>	
				</div>		
			<?php } ?>
		</div>
		<div class="chaos-social-media-icons chaos-social-media-copyright">
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
		<div style="clear: both;"></div>
<?php }?>			