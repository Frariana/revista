<div>
    <a class="waves-effect waves-light btn right" href="<?php echo RUTA_URL."/users/insert";?>">Crear usuario</a>
</div>
<p style="margin-left: 1rem;">Usuarios creados:</p>
<ul class="collection">
    <?php for ($i=0; $i < count($data['users']); $i++) { ?>
        <li class="collection-item">
            <img src="<?php echo RUTA_URL.'/public/img/face.svg'?>" class="">
            <?php echo $data['users'][$i]->user; ?><br>
            <?php echo $data['users'][$i]->email;?><br>
            <i><?php if($data['users'][$i]->rol){ echo "Administrador"; }else{ echo "Creador"; } ?></i>
            <a class="modal-trigger borrar secondary-content" <?php if ($i != 0){ echo "href='#eliminar'"; } ?> name="<?php echo $data['users'][$i]->id_user; ?>">Eliminar</a>
            <a class="editar secondary-content" href="<?php echo RUTA_URL ?>/users/edit/<?php echo $data['users'][$i]->id_user; ?>">Editar</a>
        </li>
    <?php } ?>
</ul>

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
        <?php if (strlen($mensajeToast) > 0){
            echo "M.toast({html: '".$mensajeToast."'});";
        }else{
            echo "Sin mensaje";
        } ?>
        // M.toast({html: 'Eliminado'});
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
    });
</script>