jQuery(window).load(function (){
	doResponsiveColums();
});
jQuery(window).resize(function (){
	doResponsiveColums();
});

function doResponsiveColums() {
	jQuery('.chaos-columns-responsive').each(function() {
		//jQuery('.wp-block-columns').children().before().html('hier');
		var classes = jQuery(this).attr('class');
		var hasClass = getGutenbergColumnClass(classes);
		jQuery('.empty').remove();
		var responsive = jQuery(this).html();

		jQuery(this).prev('.wp-block-columns'+hasClass).append(responsive);
		console.log(responsive);
		if( responsive != undefined ){
			jQuery(this).append(responsive);
		}
		jQuery(this).remove();

		jQuery(hasClass+'.wp-block-column').removeClass('chaos-column-responsive');
		jQuery(hasClass+'.wp-block-column').removeClass(hasClass);
	});
	
	var findColNum = 0;
	var device = [
		[640, 1],
		[768, 2],
		[1024, 3],
	]
	var deviceWidth = jQuery('body').width();
	for( var d = 0; d < device.length; d++ ){
		if( deviceWidth <= device[d][0] ) {
			findColNum = device[d][1];
			break;			
		}		
	}

	jQuery('.wp-block-columns').each(function() {
		var childrens = jQuery(this).children().size();
		
		if( findColNum == 0 ) {
			console.log('0 '+findColNum);
			jQuery(this).children('.chaos-column-responsive').each(function() {
				var html = jQuery(this).html();
				jQuery(this).parent().prev('.wp-block-columns').append('<div class="wp-block-column">'+html+'</div>');
				jQuery(this).remove();
			});		
			jQuery(this).children('.empty').each(function() {
				jQuery(this).remove();
			});

			if( jQuery('.wp-block-columns').is(':empty') ) {
				jQuery(this).remove();
			}
		}
		else if( childrens > findColNum) {
			console.log('else '+findColNum);
			var i = 0;
			var content = '';
			var empty = '<div class="wp-block-column empty"></div>';
			var gbColClass = getGutenbergColumnClass(jQuery(this).attr('class'));
			jQuery(this).children().each(function() {
				i++;
				if( i > findColNum ) {
					content = content + '<div class="wp-block-column chaos-column-responsive '+gbColClass+'">';
					jQuery(this).remove();
					content = content + jQuery(this).html() + '</div>';					
					if( i % findColNum == 0 ) {
						content = content + '</div><div class="wp-block-columns chaos-columns-responsive">';
					}
				}
			});
			var rest = childrens - findColNum;
			rest = findColNum - rest;
			if( rest > 0 ) {
				for( var j = 1; j < rest; j++ ) {
					empty = empty + empty;
				}
			}
			else if( rest == 0 ) {
				empty = '';
			}
			

			jQuery(this).after('<div class="wp-block-columns chaos-columns-responsive">'+content+empty+'</div>');
		}
	});
}

function getGutenbergColumnClass(classes) {
	var findGBClass = '';
	var classArr = classes.split(' ');
	for( var a = 0; a < classArr.length; a++ ) {
		if( classArr[a].indexOf('has') >= 0 ) {
			findGBClass = classArr[a];
		} 
	}
	return findGBClass;
}

function getGutenbergColumnNum(classes) {
	var findGBNum = 0;
	var classArr = classes.split(' ');
	for( var a = 0; a < classArr.length; a++ ) {
		if( classArr[a].indexOf('has') >= 0 ) {
			findGBNum = classArr[a];
			findGBNum = findGBNum.replace('has-', '');
			findGBNum = findGBNum.replace('-columns', '');
		} 
	}
	return findGBNum;
}