jQuery(window).load(function (){ 
	//jQuery('.chaos-megamenu-wrapper').show();
});
jQuery(document).ready(function (){
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
	
	jQuery('.mobile-menu i').click(function() {
		if( jQuery(this).parent().hasClass('open') ) {
			jQuery(this).parent().removeClass('open');
		}
		else {
			jQuery(this).parent().addClass('open');
		}
	});
});