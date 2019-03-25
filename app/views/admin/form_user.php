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
            <div class="input-field col s12 m6">
                <i class="material-icons prefix">email</i>
                <?php if ($edit) {?>
                    <input value="<?php echo $data['email'] ?>" id="email" name="email" type="text" required>
                <?php }else{ ?>
                    <input id="email" name="email" type="text" required>
                <?php } ?>
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12 m6">
                <i class="material-icons prefix">face</i>
                <?php if ($edit) {?>
                    <input value="<?php echo $data['user'] ?>" id="user" name="user" type="text" required>
                <?php }else{ ?>
                    <input id="user" name="user" type="text" required>
                <?php } ?>
                <label for="user">Nombre</label>
            </div>
            <div class="input-field col s12 m6">
                <i class="material-icons prefix">vpn_key</i>
                <select id="rol" name="rol" required>
                    <option value="" disabled>Rol de usuario</option>
                    <option value="0" <?php if ($edit){ if ($data['rol']=='0'){ echo 'selected'; } } ?> >Creador (Sólo crea contenido)</option>
                    <option value="1" <?php if ($edit){ if ($data['rol']=='1'){ echo 'selected'; } } ?> >Administrador</option>
                </select>
                <label for="rol">Rol</label>
            </div>
            <?php if (!$edit) {?>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">lock_outline</i>
                    <input id="password" name="password" type="password" required>
                    <label for="password">Clave</label>
                </div>
            <?php } ?>
            <?php if (!$edit) {?>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">lock_outline</i>
                    <input id="password2" name="password2" type="password" required>
                    <label for="password2">Confirmar Clave</label>
                </div>
            <?php }else{ ?>
                <div class="input-field col s12 m6">
                    <a class="waves-effect waves-light  modal-trigger" href="#modal1"><i class="material-icons left">lock_outline</i>Cambiar clave</a>
                </div>
            <?php } ?>
            <div class="input-field col s12">
                <?php if ($edit) {?>
                    <button type="submit" class="waves-effect waves-light btn center-align password">Modificar</button>
                <?php }else{ ?>
                    <button type="submit" class="waves-effect waves-light btn center-align password">Crear</button>
                <?php } ?> 
                <a href="<?php echo RUTA_URL.'/users'; ?>" class="waves-effect waves-light grey lighten-1 btn">Cancelar</a>
            </div>
        </form>
    </div>
</div>
<div id="modal1" class="modal">
    <form action="<?php echo RUTA_URL."/users/cambiarClave" ?>" method="post">
        <div class="modal-content">
            <span class="grey-text uppercase">Cambiar clave</span>
            <div class="container">
                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input id="passwordActual" name="passwordActual" type="password" required>
                    <label for="passwordActual">Clave Actual</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">lock_outline</i>
                    <input id="password1" name="password1" type="password" required>
                    <label for="password1">Nueva Clave</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">lock_outline</i>
                    <input id="password2" name="password2" type="password" required>
                    <label for="password2">Confirmar Clave</label>
                </div>
            </div>
        </div>
        <?php if ($edit){ echo "<input name='idUser' type='hidden' value=".$data['id_user'].">";} ?>
        <div class="modal-footer">
            <button class="modal-close waves-effect waves-green btn" click="getIdUser()">Cambiar Clave</button>
            <a class="modal-close waves-effect waves-light grey lighten-1 btn">Cancelar</a>
        </div>
    </form>
</div>
    
<script>
    function getIdUser(){
        console.log(window.location.href);
    }
    $(document).ready(function(){
        $('select').formSelect();
        $('.modal').modal();
    });

    $(".password").change(function(){
        var clave=$("#password").val();
        var clave2=$("#password2").val();
        if (clave!=clave2){
            var clave=$("#password").css("color","red");
            var clave2=$("#password2").css("color","red");
        }else{
            var clave=$("#password").css("color","green");
            var clave2=$("#password2").css("color","green");
        }
    });
</script>