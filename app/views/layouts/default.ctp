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
		echo $this->Html->script("front.js");

		echo $scripts_for_layout;
	?>
	
</head>
<body id="home">
	<div id="supersized"></div>
	<div id="container">
		<div id="header">
			<ul class="links">
				<li><?php echo $html->link("CVC","http://www.cvc.gov.co");?></li>
				<li><?php echo $html->link("Ministerio de Ambiente","http://www.cvc.gov.co");?></li>
			</ul>
			<ul class="social">
				<li><?php echo $html->link($html->image("facebook.png"),"http://facebook.com",array("escape"=>false));?></li>
				<li><?php echo $html->link($html->image("twitter.png"),"http://facebook.com",array("escape"=>false));?></li>
			</ul>
		</div>
		<div id="content">
			<div id="page" class="<?php echo $page["Page"]["slug"]?>">
				<div id="logo"></div>
				<div id="contenido"  style="<?php if(!empty($page["Page"]["fondo"])){ echo "background: url(/corpdesam/img/".$page["Page"]["fondo"].");";} ?>">
					<h2 class="titulo"><?php echo strtoupper($page["Page"]["title"]);?></h2>
					<div class="wysiwyg">
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
		<div id="animado" rel="<?php echo $page["Page"]["till"]?>">
			<?php echo $html->image($page["Page"]["animacion"]);?>
		</div>
	</div>
</body>
</html>