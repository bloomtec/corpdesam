<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __($PAGE_TITLE); ?>
		<?php echo $title; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('front');
		echo $this->Html->css('layout'); //EStilos del layout
		echo $this->Html->css('supersized');
		echo $this->Html->script("jquery.js");
		echo $this->Html->script("supersized.3.0.core.js");
		echo $this->Html->script("front.js");

		echo $scripts_for_layout;
	?>
	<script type="text/javascript">
	
	var server="/corpdesam";
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

	</script>
</head>
<body id="home">
	<div id="supersized"></div>
	<div id="container">
		<div id="header">
		  <?php echo $this->element("header");?>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>			
		</div>
		<div class="footer">
			<div class="bottom"></div>
			<div id="footer">
			   <?php echo $this->element("footer");?>
			</div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>