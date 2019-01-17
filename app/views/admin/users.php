<div class="row">
	<a class="waves-effect waves-light btn right" href="<?php echo RUTA_URL."/users/insert";?>">Crear usuario</a>
</div>
<div class="row">
    <ul class="collection">
        <?php foreach($data['users'] as $user): ?>
            <li class="collection-item avatar">
                <i class="medium material-icons grey-text">account_circle</i>
                <p><span class="teal-text"><?php echo $user->user; ?></span></p>
                <p><?php echo $user->email; ?> - <i><?php if($user->rol){ echo "Administrador"; }else{ echo "Creador"; } ?></i></p>
                <p class="links">
                    <a class="editar" href="<?php echo RUTA_URL ?>/users/edit/<?php echo $user->id_user; ?>">Editar</a> <span> |</span>
                    <a name="<?php echo $user->id_user; ?>" class="modal-trigger botonesBorrar" href="#eliminar">Eliminar</a>
                </p>
            </li>
        <?php endforeach; ?>
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
        $(".links").first().children().css({'color': 'silver'});
        $(".botonesBorrar").first().children().click(function(e){
            e.preventDefault();
        });
        $('.modal').modal();
        $('.botonesBorrar').click(function(){
    		var id = this.name;
    		$('#buttonDelete').prop({
    			href: '<?php echo RUTA_URL?>/users/delete/'+id
    		});
		});
    }); 
</script>