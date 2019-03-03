<div class="row">
	<a class="waves-effect waves-light btn right" href="<?php echo RUTA_URL."/users/insert";?>">Crear usuario</a>
</div>
<div class="row">
    <ul class="collection">
        <?php for ($i=0; $i < count($data['users']); $i++) { ?>
            <li class="collection-item avatar">
                <i class="medium material-icons grey-text">account_circle</i>
                <p><span class="teal-text"><?php echo $data['users'][$i]->user; ?></span></p>
                <p><?php echo $data['users'][$i]->email; ?> - <i><?php if($data['users'][$i]->rol){ echo "Administrador"; }else{ echo "Creador"; } ?></i></p>
                <a class="modal-trigger borrar" <?php if ($i != 0){ echo "href='#eliminar'"; } ?> name="<?php echo $data['users'][$i]->id_user; ?>">Eliminar</a>
                <span> | </span>
                <a class="editar" href="<?php echo RUTA_URL ?>/users/edit/<?php echo $data['users'][$i]->id_user; ?>">Editar</a> 
            </li>
        <?php } ?>
    </ul>
</div>

<div id="eliminar" class="modal">
    <div class="modal-content">
    	<h4>Eliminar<hr></h4>
      	<p>¿Estás seguro de eliminar éste usuario?</p>
    </div>
    <div class="modal-footer">
    	<a id="buttonDelete" class="modal-close waves-effect waves-light lighten-1 btn">Eliminar</a>
      	<a href="#" class="modal-close waves-effect waves-light grey lighten-1 btn">Cancelar</a>
    </div>
</div>

<script>
    $(document).ready(function(){
        var borrar = true;
        $('.modal').modal();
        $('.borrar').first().css({'color': 'silver'});
        $('.borrar').click(function(e){
            if (borrar){
                var id = this.name;
                $('#buttonDelete').prop({
                    href: '<?php echo RUTA_URL?>/users/delete/'+id
                });
            }
		});
         M.toast({html: 'I am a toast!'})
    }); 
</script>