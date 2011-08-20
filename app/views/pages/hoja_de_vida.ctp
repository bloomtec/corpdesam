<div id="intern_content">
	<div class="hoja-de-vida">
			<div class="mensaje">
					
			</div>
			<?php echo $form->create("Archivo",array("action"=>"ajaxAdd"));?>
			<div class="inputs">
					<?php echo $form->input("nombre_solicitante",array("label"=>"Nombres del solicitante","required"=>"required"));?>
					<?php echo $form->input("apellido_solicitante",array("label"=>"Apellidos del solicitante","required"=>"required"));?>
					<?php echo $form->input("profesion",array("label"=>"Profesión","required"=>"required"));?>
					<?php echo $form->input("ciudad",array("label"=>"Ciudad","required"=>"required"));?>
					<?php echo $form->input("path",array("type"=>"hidden"));?>
			</div>
			<div class="archivo">
				<?php echo $form->input("comentarios",array("label"=>"Comentarios","type"=>"textArea"));?>
		
				<div class="uploader-container">
						<div id="subir-archivo"></div>
				</div>
				<div class="enviar"><?php echo $html->image("btn_enviar.PNG");?></div>
			</div>
			<div style="clear:both"></div>
				
			<?php echo $form->end();?>
			<div class="form-error"> 
				
			</div>
	</div>
</div>
<script type="text/javascript">
$.tools.validator.localize("es", {
	'*'			: 'Por favor, entre un valor correcto',
	':email'  	: 'Formato de email no valido',
	':number' 	: 'Por favor entre un valor númerico',
	':url' 		: 'Por favor entre una url correcta',
	'[max]'	 	: 'El valor maximo permitido es: $1',
	'[min]'		: 'El valor minimo permitido es: $1',
	'[required]'	: 'Este campo es requerido'
});

$("#ArchivoAjaxAddForm").validator({ lang: 'es' });
</script>