<br><div class="row">
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
	<ul class="collection" id="contenido">
		<?php if (!empty($data['contents'])){ ?>
			<?php foreach ($data['contents'] as $content) : ?>
				<li class="collection-item">
          			<i class="material-icons tiny teal-text"><?php echo $content->icono; ?></i>
					<?php echo $content->content_titulo; ?> -
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
		var contenido = $("#contenido").html();
    	$('.modal').modal();
    	
    	$('#buscar').focus();
    	
    	$('.botonesBorrar').click(function(){
    		var id = this.name;
    		$('#buttonDelete').prop({
    			href: '<?php echo RUTA_URL?>/content/delete/'+id
    		});
    	});

    	$("#buscar").keyup(function(){
            var busqueda = $("#buscar").val();
            var formData = {
                'busqueda': busqueda
            }
    		$.ajax({
    			method: 'POST',
    			url: '<?php echo RUTA_URL;?>/content/searchContent/',
    			data: formData,
    			dataType: "json"
    		}).done(function(data){
    			if (data.length > 0){
    				$("#contenido").html("");
			    	$(data).each(function(index, element){
                        var res = element.content_titulo.match(new RegExp(busqueda, "i"));
                        $("#contenido").append("<li class='collection-item'>" + element.content_titulo.replace(new RegExp(busqueda, "i"), res[0].bold()) + "</li>");
				    });
			    }else{
			    	$("#contenido").html("<li class='collection-item'>Sin resultados</li>");
			    }
			}).fail(function(){
    			$("#contenido").html(contenido);
    		});
    	});
	});
</script>