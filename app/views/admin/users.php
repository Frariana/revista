<div class="row">
	<a class="waves-effect waves-light btn right" href="<?php echo RUTA_URL."/users/insert";?>">Crear usuario</a>
</div>
<div class="row">
    <ul class="collection">
        <?php foreach($data['users'] as $user): ?>
            <li class="collection-item avatar">
                <img style="margin-top: 2em" src="http://www.adsitsolutions.com/images/icons/grey/home-user-icon.png" alt="user" class="circle">
                <p><span class="teal-text"><?php echo $user->user; ?></span> - <?php echo $user->email; ?></p>
                <p><i><?php if($user->rol){ echo "Administrador"; }else{ echo "Creador"; } ?></i></p>
                <p class="links">
                    <a class="editar" href="<?php echo RUTA_URL ?>/users/edit/<?php echo $user->id_user; ?>">Editar</a><span> |</span>
                    <a class="eliminar" href="<?php echo RUTA_URL ?>/users/edit/<?php echo $user->id_user; ?>">Eliminar</a>
                </p>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<script>
    $(document).ready(function(){
        $(".links").first().children().css({'color': 'silver'});
        $(".links").first().children().click(function(e){
            e.preventDefault();
        });
    }); 
</script>