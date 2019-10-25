<?php if ( get_theme_mod('setting_align-copyright') == 'copyright2' ) { ?>
	<?php if ( get_theme_mod('setting_display_socialicons-copyright') ) { ?>
		<div class="chaos-social-media-icons chaos-social-media-copyright">
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
	<?php } ?>
	<div class="chaos-copyright-text">
		<?php 
			if ( get_theme_mod('setting_text-copyright') ) { 
				echo get_theme_mod('setting_text-copyright'); 
			}
			else { 
				echo "Copyright &copy; 2019";
			} 
		?>
		<div class="chaos-copyright-menu">
			<?php
				if ( get_theme_mod('setting_menu-copyright') ) {
					wp_nav_menu( array(
						'menu'   => get_theme_mod('setting_menu-copyright'),
					) );
				}				
			?>	
		</div>	
	</div>
	<div style="clear: both;"></div>
<?php } else { ?>
	<div class="chaos-copyright-text">
		<?php 
			if ( get_theme_mod('setting_text-copyright') ) { 
				echo get_theme_mod('setting_text-copyright'); 
			}
			else { 
				echo "Copyright &copy; 2019";
			} 
		?>
		<?php if( get_theme_mod('setting_menu-copyright') ) { ?>
			<div class="chaos-copyright-menu">
				<?php
					if ( get_theme_mod('setting_menu-copyright') ) {
						wp_nav_menu( array(
							'menu'   => get_theme_mod('setting_menu-copyright'),
						) );
					}
				?>	
			</div>		
		<?php } ?>
	</div>
	<?php if ( get_theme_mod('setting_display_socialicons-copyright') ) { ?>
		<div class="chaos-social-media-icons chaos-social-media-copyright">
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
	<?php } ?>
	<div style="clear: both;"></div>
<?php }?>			