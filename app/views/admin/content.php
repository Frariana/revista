<p>Contenido:</p>
<div class="row" style="border: 1px solid #e0e0e0">
	<div class="col s8 input-field">
  		<input name="buscar" id="buscar" type="text">
    	<label for="buscar">Buscar</label>
  	</div>
  	<div class="col s2 input-field">
  		
  	</div>
  	<div class="col s2 input-field">
  		<a class="waves-effect waves-light btn right" href="<?php echo RUTA_URL."/content/insert";?>">Crear</a>
  	</div>
</div>
<div class="row">
	<ul class="collection">
		<?php if (!empty($data['contents'])){ ?>
			<?php foreach ($data['contents'] as $content) : ?>
				<li class="collection-item">
          <i class="material-icons tiny teal-text"><?php echo $content->icono; ?></i>
					<?php echo $content->titulo; ?>
					<a href="#eliminar" class="secondary-content modal-trigger"><i class="tiny material-icons">delete</i></a>
        			<a href="<?php echo RUTA_URL.'/content/edit/'.$content->id_contenido; ?>" class="secondary-content"><i class="tiny material-icons">edit</i></a>
				</li>
			<?php endforeach; ?>
		<?php }else{ ?>
			<li class="collection-item">Sin contenido creado</li>
		<?php } ?>
	</ul>
</div>
<!-- Modal Structure Delete content-->
<div id="eliminar" class="modal">
    <div class="modal-content">
    	<h4>Eliminar<hr></h4>
      <p>¿Estás seguro de eliminar éste contenido?</p>
    </div>
    <div class="modal-footer">
    	<a href="<?php echo RUTA_URL.'/content/delete/'.$content->id_contenido; ?>" class="modal-close waves-effect waves-light lighten-1 btn">Eliminar</a>
      <a href="#" class="modal-close waves-effect waves-light grey lighten-1 btn">Cancelar</a>
    </div>
</div>

<script>
	$(document).ready(function(){
    	$('.modal').modal();
	});
</script>