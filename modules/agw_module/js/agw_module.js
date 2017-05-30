console.log('MODULE');
jQuery(document).ready(function(){
	jQuery('#block-agwblock button').on('click',function(){
		jQuery.ajax({
			'url': '//' + window.location.hostname + drupalSettings.path.baseUrl + 'api',
			'method': 'post',
			'data': {
				'val' : jQuery('#block-agwblock input').val()
			},
			'dataType': 'json'
		}).success(function(res){
			console.log(res);
			jQuery('#block-agwblock .card-blockquote').text(JSON.stringify(res));
		});
	});
});
