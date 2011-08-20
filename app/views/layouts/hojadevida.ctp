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
		echo $this->Html->script("https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js");
		echo $this->Html->script("jquery.tools.min.js");
		echo $this->Html->script("cufon-yui.js");
		echo $this->Html->script("Myriad_Pro_400.font.js");
		echo $this->Html->script("jquery.uploadify.v2.1.4.min.js");
		echo $this->Html->script("swfobject.js");
		echo $this->Html->script("upload.js");
		echo $this->Html->script("front.js");

		echo $scripts_for_layout;
	?>
	<script type="text/javascript">
		Cufon.replace('#content');
	</script>
</head>
<body id="hojaVida">
	<div id="container">
	<div id="flash">
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="1057" height="797">
		  <param name="movie" value="<?php echo $html->url("/swf/corpdesam.swf");?>" />
		  <param name="quality" value="high" />
		  <embed src="<?php echo $html->url("/swf/corpdesam.swf");?>" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer"  wmode='opaque' type="application/x-shockwave-flash" width="1057" height="797"></embed>
		</object>
	</div>
		<div id="header">
			<ul class="social">
				<li><?php echo $html->link($html->image("facebook.png"),"http://facebook.com",array("escape"=>false));?></li>
				<li><?php echo $html->link($html->image("twitter.png"),"http://facebook.com",array("escape"=>false));?></li>
			</ul>
		</div>
		<div id="content">
			<div id="page">
				<div id="logo"></div>
				<div id="contenido">
					<h2 class="titulo ">Envianos tu hoja de vida</h2>
					<div class="forms">
						<?php echo $content_for_layout; ?>
					</div>
				</div>
			</div>
						
		</div>
		<div id="footer">
			<ul id="nav">
				<li> <?php echo $html->link("",array("controller"=>"pages","action"=>"ambiental"),array("class"=>"ambiental"));?></li>
				<li> <?php echo $html->link("",array("controller"=>"pages","action"=>"juridica"),array("class"=>"juridica"));?></li>
				<li> <?php echo $html->link("",array("controller"=>"pages","action"=>"mineria"),array("class"=>"mineria"));?></li>
				<li> <?php echo $html->link("",array("controller"=>"pages","action"=>"educativa"),array("class"=>"educativa"));?></li>
				<li> <?php echo $html->link("",array("controller"=>"pages","action"=>"perfilProfesional"),array("class"=>"perfil"));?></li>
				<li> <?php echo $html->link("",array("controller"=>"pages","action"=>"planeacion"),array("class"=>"planeacion"));?></li>
				<li> <?php echo $html->link("",array("controller"=>"pages","action"=>"home"),array("class"=>"home"));?></li>
			</ul>
		
		</div>
	</div>
	<div id="footer2">
		<ul>
			<li><?php echo $html->link($html->image("mma.jpg"),"http://www.minambiente.gov.co/",array("escape"=>false)); ?></li>
			<li><?php echo $html->link($html->image("cvc.jpg"),"http://www.cvc.gov.co",array("escape"=>false)); ?></li>
			<li><?php echo $html->link($html->image("mail.png"),"mail.corpdesam.org",array("escape"=>false)); ?></li>
			<li><?php echo $html->link($html->image("casco.png"),array("controller"=>"pages","action"=>"hojaDeVida"),array("escape"=>false,"target"=>"_blank")); ?></li>
		</ul>
	</div>
</body>
</html>