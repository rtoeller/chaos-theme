jQuery(document).ready(function (){
	/*var anz = jQuery('.chaos-megamenu-wrapper').children('.chaos-submenu').each(function() {
		jQuery(this).children('li').size();
	var width = 100 / anz;
	jQuery('.chaos-megamenu-wrapper').children('.chaos-submenu').children('li').css('width', width+'%');
	jQuery('.chaos-megamenu-wrapper').children('.chaos-submenu li').css('width', width+'%');
		console.log(anz);
	});*/

	var anz = '';
	jQuery('.chaos-megamenu-wrapper').each(function() {
		anz = jQuery(this).children('.chaos-submenu').children('li').size();
		var width = 100 / anz;
		jQuery(this).children('.chaos-submenu').children('li').css('width', width+'%');
	});
	console.log(anz);
});