jQuery(window).load(function (){
	doResponsiveColums();
});
jQuery(window).resize(function (){
	doResponsiveColums();
});

function doResponsiveColums() {
	//jQuery('.chaos-column-responsive').parent().remove();
	
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
			console.log('else');
			jQuery(this).children('.chaos-column-responsive').each(function() {
				var html = jQuery(this).html();

				// DAS HIER FUNKTIONIERT NOCH NICHT
				jQuery(this).prev('.wp-block-columns').append(html);
			});
		}
		else if( childrens > findColNum) {
			var i = 0;
			var content = '';
			var empty = '<div class="wp-block-column"></div>';
			var gbColClass = getGutenbergColumnClass(jQuery(this).attr('class'));
			jQuery(this).children().each(function() {
				i++;
				if( i > findColNum ) {
					content = content + '<div class="wp-block-column chaos-column-responsive '+gbColClass+'">';
					jQuery(this).remove();
					content = content + jQuery(this).html() + '</div>';					

				}
			});
			var rest = childrens - findColNum;
			rest = findColNum - rest;
			console.log('rest ' + rest);
			if( rest > 0 ) {
				for( var j = 1; j < rest; j++ ) {
					empty = empty + empty;
				}
			}
			else if( rest == 0 ) {
				empty = '';
			}
			content = content;

			jQuery(this).after('<div class="wp-block-columns">'+content+empty+'</div>');
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