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
<div>
	<?php if (!empty($data['contents']['contenido'])){ ?>
		<?php foreach ($data['contents']['contenido'] as $content) : ?>
			<div class="col s12 m6 l4">
				<div class="card">
					<div class="card-image">
						<?php if ($content->imagen){ ?>
							<img src="data:image/jpeg;base64,<?php echo base64_encode($content->imagen);?>">
						<?php }else{ ?>
						<div>
							<h5 class="center-align grey-text">
								<i class="material-icons medium">broken_image</i>
								<p>Sin imagen</p>
							</h5>
						</div>
						<?php } ?>
						<span class="card-title truncate sombra-negra"><?php echo $content->content_titulo; ?></span>
					</div>
					<div class="card-action">
						<a href="<?php echo RUTA_URL.'/v/g/'.url($content->content_titulo); ?>" class="btn-floating waves-effect waves-light orange-text"><i class="tiny material-icons">find_in_page</i>Ver</a>
						<a href="<?php echo RUTA_URL.'/content/edit/'.$content->id_contenido; ?>" class="btn-floating waves-effect waves-light orange-text"><i class="tiny material-icons">edit</i>Editar</a>
						<a href="#eliminar" name="<?php echo $content->id_contenido; ?>" class="modal-trigger botonesBorrar btn-floating waves-effect waves-light btn red-text"><i class="tiny material-icons">delete</i>Eliminar</a>
						<?php if($content->slider=='on'){ echo "<label><i class='tiny material-icons'>filter</i></label>"; } ?>
					<?php if($content->bloque1=='on'){ echo "<label><i class='tiny material-icons'>filter_1</i></label>"; } ?>
					<?php if($content->bloque2=='on'){ echo "<label><i class='tiny material-icons'>filter_2</i></label>"; } ?>
					<?php if($content->bloque3=='on'){ echo "<label><i class='tiny material-icons'>filter_3</i></label>"; } ?>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	<?php }else{ ?>
		<br><br>
		<p class="center"><i class="material-icons">mood_bad</i>&nbsp;Sin contenido creado</p>
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