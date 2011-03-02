var server="/corpdesam"
$(function(){
//Super size
			$.fn.supersized.options = {  
				startwidth: 640,  
				startheight: 480,
				vertical_center: 1,
				slideshow: 1,
				navigation: 1,
				thumbnail_navigation: 1,
				transition: 1, //0-None, 1-Fade, 2-slide top, 3-slide right, 4-slide bottom, 5-slide left
				pause_hover: 0,
				slide_counter: 1,
				slide_captions: 1,
				slide_interval: 3000,
				slides : [
					{image : server+'/img/background.jpg', title : 'cielo', url : 'http://www.flickr.com/photos/wumbus/4582735030/in/set-72157623876357531/'}
				]
			};
	        $('#supersized').supersized();  
	         $(".image-box img").live("click",function(){
	        	$('#supersized img').attr("src",$(this).attr("src"));
	        });
	 
});
