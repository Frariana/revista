<div class="row">
	<a class="waves-effect waves-light btn right" href="<?php echo RUTA_URL."/content/insert";?>">Crear contenido</a>
</div>
<div class="row" style="border: 1px solid #e0e0e0">
	<div class="col s12 input-field">
		<i class="material-icons prefix">search</i>
		<input name="buscar" id="buscar" type="text">
  		<label for="buscar">Buscar</label>
	</div>
</div>
<div class="row">
	<ul class="collection" id="contenidoExistente">
		<?php if (!empty($data['contents'])){ ?>
			<?php foreach ($data['contents'] as $content) : ?>
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
	</ul>
</div>
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
			console.clear();
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