<div id="intern_content">
	<div class="hoja-de-vida">
			<div class="mensaje">
					
			</div>
			<?php echo $form->create("Archivo",array("action"=>"ajaxAdd"));?>
			<div class="inputs">
					<?php echo $form->input("nombre_solicitante",array("label"=>"Nombres del solicitante"));?>
					<?php echo $form->input("apellido_solicitante",array("label"=>"Apellidos del solicitante"));?>
					<?php echo $form->input("comentarios",array("label"=>"Comentarios"));?>
					<?php echo $form->input("path",array("type"=>"hidden"));?>
			</div>
			<div class="archivo">
				<div class="ext">
					
				</div>
				<div class="uploader-container">
						<div id="subir-archivo"></div>
				</div>
				<div class="enviar"><?php echo $html->image("btn_enviar.png");?></div>
			</div>
			<div style="clear:both"></div>
				
			<?php echo $form->end();?>
	</div>
</div>