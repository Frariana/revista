<?php
    $edit = false;
    if (isset($data['id_user'])){
        $edit = true;
    }
?>
<div class="container">
    <div class="row"><br>
        <?php if ($edit) {?>
            <form action="<?php echo RUTA_URL.'/users/edit/'.$data['id_user'] ?>" method="POST">
        <?php }else{ ?>
            <form action="<?php echo RUTA_URL."/users/insert" ?>" method="POST">
        <?php } ?>
            <div class="input-field col s6">
                <i class="material-icons prefix">email</i>
                <?php if ($edit) {?>
                    <input value="<?php echo $data['email'] ?>" id="email" name="email" type="text" required>
                <?php }else{ ?>
                    <input id="email" name="email" type="text" required>
                <?php } ?>
                <label for="email">Email</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">face</i>
                <?php if ($edit) {?>
                    <input value="<?php echo $data['user'] ?>" id="user" name="user" type="text" required>
                <?php }else{ ?>
                    <input id="user" name="user" type="text" required>
                <?php } ?>
                <label for="user">Nombre</label>
            </div>
            <div class="input-field col s6">
            <i class="material-icons prefix">vpn_key</i>
                <select id="rol" name="rol">
                    <option value="">Selecciona tipo de acceso</option>
                    <option value="0">Limitado (Sólo crea contenido)</option>
                    <option value="1">Completo</option>
                </select>
                <label for="rol">Rol</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">lock_open</i>
                <?php if ($edit) {?>
                    <input value="<?php echo $data['password'] ?>" id="password" name="password" type="text" required>
                <?php }else{ ?>
                    <input id="password" name="password" type="text" required>
                <?php } ?>
                <label for="password">Clave</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">lock_outline</i>
                <?php if ($edit) {?>
                    <input value="<?php echo $data['password'] ?>" id="password2" name="password2" type="text" required>
                <?php }else{ ?>
                    <input id="password2" name="password2" type="text" required>
                <?php } ?>
                <label for="password">Confirmar Clave</label>
            </div>
            <div class="input-field col s12">
                <?php if ($edit) {?>
                    <button type="submit" class="waves-effect waves-light btn center-align">Modificar</button>
                <?php }else{ ?>
                    <button type="submit" class="waves-effect waves-light btn center-align">Crear</button>
                <?php } ?> 
                <a href="<?php echo RUTA_URL.'/users'; ?>" class="waves-effect waves-light grey lighten-1 btn">Cancelar</a>
            </div>
        </form>
    </div>
<script>
    $(document).ready(function(){
        $('select').formSelect();
    });

    $("#password2").keyup(function(){
        var clave=$("#password").val();
        var clave2=$("#password2").val();
        if (clave!=clave2){
            var clave=$("#password").css("color","red");
            var clave2=$("#password2").css("color","red");
        }else{
            var clave=$("#password").css("color","#9e9e9e");
            var clave2=$("#password2").css("color","#9e9e9e");
        }
    });
</script>