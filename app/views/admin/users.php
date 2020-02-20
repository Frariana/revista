<div class="row" style="margin-top: 1em">
    <div class="container">
        <a class="waves-effect waves-light btn right" href="<?php echo RUTA_URL."/users/insert";?>">Crear usuario</a>
        <div class="row" style="margin-left: 1rem;">Usuarios creados:</div>
        <ul class="collection">
            <?php for ($i=0; $i < count($data['users']); $i++) { ?>
                <li class="collection-item grey-text text-darken-2 ">
                    <i class="material-icons">account_circle</i>
                    <a class="modal-trigger borrar secondary-content deep-orange-text text-darken-3" <?php if ($i != 0){ echo "href='#eliminar'"; } ?> name="<?php echo $data['users'][$i]->id_user; ?>">Eliminar</a>
                    <span class="secondary-content grey-text">&nbsp;|&nbsp;</span>
                    <a class="editar secondary-content orange-text text-darken-3" href="<?php echo RUTA_URL ?>/users/edit/<?php echo $data['users'][$i]->id_user; ?>">Editar</a>
                    <b><?php echo $data['users'][$i]->user; ?></b><br>
                    <?php echo $data['users'][$i]->email;?><br>
                    <i><?php if($data['users'][$i]->rol){ echo "Administrador"; }else{ echo "Creador"; } ?></i>
                </li>
            <?php } ?>
        </ul>
    </div>
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
        $('.borrar').first().css({'color': 'silver'});
        $('.borrar').click(function(e){
            var id = this.name;
            $('#buttonDelete').prop({
                href: '<?php echo RUTA_URL?>/users/delete/'+id
            });
		});
    });
</script>