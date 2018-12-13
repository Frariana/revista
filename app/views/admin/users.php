<div class="row">
	<a class="waves-effect waves-light btn right" href="<?php echo RUTA_URL."/users/insert";?>">Crear usuario</a>
</div>
<div class="row">
    <ul class="collection">
        <?php foreach($data['users'] as $user): ?>
            <li class="collection-item avatar">
                <img style="margin-top: 2em" src="http://www.adsitsolutions.com/images/icons/grey/home-user-icon.png" alt="user" class="circle">
                <p><h5 class="teal-text"><?php echo $user->user; ?></h5></p>
                <p><?php echo $user->email; ?></p>
                <p><i><?php if($user->rol){ echo "Administrador"; }else{ echo "Creador"; } ?></i></p>
                <p>
                    <a href="<?php echo RUTA_URL ?>/users/edit/<?php echo $user->id_user; ?>">Editar</a> |
                    <a style="margin-top: 1.75em;">Eliminar</a>
                </p>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<script>
    $(document).ready(function(){
        $(".collection-item.avatar:first-child").attr('disabled', 'disabled');
    }); 
</script>