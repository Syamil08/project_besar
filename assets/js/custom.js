$(document).ready(function(){

	$('.news-wrap .news-item').hide();

	$('.news-wrap').children('.news-item:lt(6)').show();

	$('.load-more').click(function(){
		$('.news-wrap').children('.news-item:hidden:lt(3)').show();		
	});

	$("#editor").editor({
        uiLibrary: 'bootstrap4'
    });
});