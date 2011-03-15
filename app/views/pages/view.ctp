	<script type="text/javascript">  
		$(function(){
			$.fn.supersized.options = {  
				startwidth: 1024,  
				startheight: 768,
				vertical_center: 1,
				slideshow: 1,
				navigation: 1,
				thumbnail_navigation: 1,
				transition: 1, //0-None, 1-Fade, 2-slide top, 3-slide right, 4-slide bottom, 5-slide left
				pause_hover: 0,
				slide_counter: 1,
				slide_captions: 1,
				slide_interval: 10000,
				slides : [
					<?php echo $slides; ?>
				]
			};
	        $('#supersized').supersized(); 
	    });
	</script>
<div id="loading">&nbsp;</div>

<!--Slides-->
<div id="supersized"></div>

<div class="content_green">
	<h1><?php echo $page["Page"]["title"];?></h1>
	<div class="inner">
	<?php echo $page["Page"]["content"];?>
	</div>
</div>
	
