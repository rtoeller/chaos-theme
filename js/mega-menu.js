jQuery(document).ready(function (){
	// create Hight from Mega menus
	jQuery('li.mega-menu').mouseover(function() {
		jQuery('.chaos-megamenu-wrapper').each(function() {
			anz = jQuery(this).children('.chaos-submenu').children('li').size();
			var width = 100 / anz;
			jQuery(this).children('.chaos-submenu').children('li').css('width', width+'%');
		});

		var height = '';
		jQuery('.chaos-megamenu-wrapper').children('.chaos-submenu').children('li').each(function() {
			var h = jQuery(this).height();
			if( height < h ) {
				height = h;
			}
		});
		jQuery('.chaos-megamenu-wrapper').children('.chaos-submenu').children('li').height(height);
		var wrapperHeight = height + 60;
		jQuery('.chaos-megamenu-wrapper').height(wrapperHeight);
	});
	
	// open burgermenu
	jQuery('.mobile-menu i.fa-hamburger').click(function() {
		if( jQuery(this).parent().hasClass('open') ) {
			jQuery(this).parent().removeClass('open');
			jQuery('li.has-submenu').removeClass('open');
			//jQuery('.mobile-menu .chaos-mobile-menu li').removeClass('open');
		}
		else {
			jQuery(this).parent().addClass('open');
		}
	});

	// open submenu 
	jQuery('.mobile-menu .arrow').click(function(e) {
		e.preventDefault();
		if( jQuery(this).closest('li').hasClass('has-submenu') ) {
			if( jQuery(this).closest('li').hasClass('open') ) {
				jQuery(this).closest('li').removeClass('open');
				jQuery(this).closest('li').children('ul').children('li').removeClass('open');
			}
			else {
				jQuery(this).closest('li').addClass('open');
			}
		}
	});

	// Height mobile menu
	var mome = jQuery('#content').position();
	jQuery('.mobile-menu .chaos-main-menu').css('top', mome.top);
});