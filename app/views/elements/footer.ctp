<h1><a href="#">coopdesarm</a></h1>
<ul class="main-nav">
	<li><a href="">MENÚ</a>
		 <ul>
	    	<li>
	    	<?php echo $this->Html->link(
					   $this->Html->tag('anchor', 'Corpdesam'),
					    array("controller"=>"pages","action"=>"corpdesam"),
					   array('escape' => false)
					   );
			 ?>
			</li>
	    	<li>
	    	<?php echo $this->Html->link(
					   $this->Html->tag('anchor', 'Ambiental'),
					    array("controller"=>"pages","action"=>"ambiental"),
					   array('escape' => false)
					   );
			 ?>
			</li>
	    	<li>
	    	<?php echo $this->Html->link(
					   $this->Html->tag('anchor', 'Juridica'),
					    array("controller"=>"pages","action"=>"juridica"),
					   array('escape' => false)
					   );
			 ?>
			</li>
			<li>
	    	<?php echo $this->Html->link(
					   $this->Html->tag('anchor', 'Planeación, urbanismo y servicios públicos'),
					    array("controller"=>"pages","action"=>"planeacion"),
					   array('escape' => false)
					   );
			 ?>
			</li>

	    	<li>
	    	<?php echo $this->Html->link(
					   $this->Html->tag('anchor', 'Mineria'),
					    array("controller"=>"pages","action"=>"mineria"),
					   array('escape' => false)
					   );
			 ?>
			 </li>
	    	<li><?php echo $this->Html->link(
					   $this->Html->tag('anchor', 'Educativa'),
					    array("controller"=>"pages","action"=>"educativa"),
					   array('escape' => false)
					   );
			 ?></li>
	    	<li><?php echo $this->Html->link(
					   $this->Html->tag('anchor', 'Perfil Profesional'),
					    array("controller"=>"pages","action"=>"perfilProfesional"),
					   array('escape' => false)
					   );
			 ?></li>
			 <li><?php echo $this->Html->link(
					   $this->Html->tag('anchor', 'Envianos tu hoja de vida'),
					    array("controller"=>"pages","action"=>"hojaDeVida"),
					   array('escape' => false)
					   );
			 ?></li>
		    <li><a href="">Portafolio de servicios</a></li>
	    </ul>
	</li>
  </li>

</ul>
