<div>
	<a class="waves-effect waves-light btn right" href="<?php echo RUTA_URL."/content/insert";?>">Crear contenido</a>
</div>
<div>
	<div class="col s12 input-field">
		<i class="material-icons prefix">search</i>
		<input name="buscar" id="buscar" type="text">
  		<label for="buscar">Buscar</label>
	</div>
</div>
<div class="">
	<!-- <ul class="collection" id="contenidoExistente">
		<?php if (!empty($data['contents']['contenido'])){ ?>
			<?php foreach ($data['contents']['contenido'] as $content) : ?>
				<li class="collection-item" id="collectionContent">
          			<i class="material-icons tiny teal-text"><?php echo $content->icono; ?></i>
					<span><?php echo $content->content_titulo; ?></span> -
					<i><?php echo $content->creador; ?></i> -
					<script>formatoFecha('<?php echo $content->fecha; ?>')</script>
					<a href="#eliminar" name="<?php echo $content->id_contenido; ?>" class="secondary-content modal-trigger botonesBorrar"><i class="tiny material-icons">delete</i></a>
        			<a href="<?php echo RUTA_URL.'/content/edit/'.$content->id_contenido; ?>" class="secondary-content"><i class="tiny material-icons">edit</i></a>
					<a href="<?php echo RUTA_URL.'/v/g/'.url($content->content_titulo); ?>" class="secondary-content"><i class="tiny material-icons">find_in_page</i></a>
				</li>
			<?php endforeach; ?>
		<?php }else{ ?>
			<li class="collection-item">Sin contenido creado</li>
		<?php } ?>
	</ul> -->

	<?php if (!empty($data['contents']['contenido'])){ ?>
		<?php foreach ($data['contents']['contenido'] as $content) : ?>
			<div class="col s12 m6 l4">
				<div class="card ">
					<div class="card-image">
						<img src="data:image/jpeg;base64,<?php echo base64_encode($content->imagen);?>">
						<span class="card-title" style='background: rgba(3, 3, 3, .3); text-shadow: 1px 1px #000000'><?php echo $content->content_titulo; ?></span>
					</div>
					<div class="card-action">
						<a href="<?php echo RUTA_URL.'/v/g/'.url($content->content_titulo); ?>" class="btn-floating waves-effect waves-light orange-text"><i class="tiny material-icons">find_in_page</i>Ver</a>
						<a href="<?php echo RUTA_URL.'/content/edit/'.$content->id_contenido; ?>" class="btn-floating waves-effect waves-light orange-text"><i class="tiny material-icons">edit</i>Editar</a>
						<a href="#eliminar" name="<?php echo $content->id_contenido; ?>" class="modal-trigger botonesBorrar btn-floating waves-effect waves-light btn red-text"><i class="tiny material-icons">delete</i>Eliminar</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	<?php }else{ ?>
		<li class="collection-item">Sin contenido creado</li>
	<?php } ?>
</div>
<?php if ($data['contents']['paginasAMostrar'] > 1){ ?>
	<ul class="pagination">
		<?php if ($data['contents']['paginaActual']!= 1){ ?>
			<li class="disabled"><a href="<?php echo RUTA_URL.'/content/'.($data['contents']['paginaActual'] - 1) ?>"><i class="material-icons">chevron_left</i></a></li>
		<?php } ?>
		<?php for ($i=0; $i < count($data['contents']['paginasArray']); $i++) { ?>
			<li <?php if ($data['contents']['paginaActual']==$data['contents']['paginasArray'][$i]){ echo "class='active teal'"; } ?>><a href="<?php echo RUTA_URL.'/content/'.$data['contents']['paginasArray'][$i] ?>"><?php echo $data['contents']['paginasArray'][$i] ?></a></li>	
		<?php } ?>
		<?php if ($data['contents']['fin']!= $data['contents']['paginaActual']){ ?>
			<li class="waves-effect"><a href="<?php echo RUTA_URL.'/content/'.($data['contents']['paginaActual'] + 1) ?>"><i class="material-icons">chevron_right</i></a></li>
		<?php } ?>
	</ul>
<?php } ?>
<!-- Modal Structure Delete content-->
<div id="eliminar" class="modal">
    <div class="modal-content">
    	<h4>Eliminar<hr></h4>
      	<p>¿Estás seguro de eliminar éste contenido?</p>
    </div>
    <div class="modal-footer">
    	<a id="buttonDelete" class="modal-close waves-effect waves-light lighten-1 btn">Eliminar</a>
      	<a href="#" class="modal-close waves-effect waves-light grey lighten-1 btn">Cancelar</a>
    </div>
</div>

<script>
	$(document).ready(function(){
    	$('.modal').modal();
    	$('.botonesBorrar').click(function(){
    		var id = this.name;
    		$('#buttonDelete').prop({
    			href: '<?php echo RUTA_URL?>/content/delete/'+id
    		});
		});
    	$("#buscar").keyup(function(){
			$("li#collectionContent.collection-item").each(function(index, element){
				var textLiActual = $(element).find('span').text();
				var res = textLiActual.match(new RegExp($("#buscar").val(), "i"));
				if (res == null){
					$(element).css({'display': 'none'});
				}
			});
			if ($("#buscar").val() == ""){
				$("li#collectionContent.collection-item").each(function(index, element){
					$(element).css({'display': 'block'});
				});
			}
    	});
	});
</script>