<div id="intern_content">
	<h1><a href="#">home</a></h1>
	<div class="mineria"></div>
	<div class="content_type_1">
	<?php echo $page["Page"]["content"]?>
		<div class="hoja-de-vida">
			<div class="mensaje">
				
			</div>
			<?php echo $form->create("Archivo",array("action"=>"ajaxAdd"));?>
			<div class="inputs">
				<?php echo $form->input("nombre_solicitante");?>
				<?php echo $form->input("apellido_solicitante");?>
				<?php echo $form->input("comentarios");?>
				<?php echo $form->input("path",array("type"=>"hidden"));?>
			</div>
			<div class="archivo">
				<div class="ext">
					
				</div>
				<div id="subir-archivo"></div>
			</div>
			<div style="clear:both"></div>
			<div class="enviar">Enviar</div>
			<?php echo $form->end();?>
		</div>
	</div>
	<div style="clear:both"></div>
</div>