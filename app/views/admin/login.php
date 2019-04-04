<div class="container">
    <div class="card">
        
            <form action="<?php echo RUTA_URL; ?>/admin/login" method="post">
                <div class="card-content">
                <span class="card-title center-align">Login admin</span>
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="email" type="text" name="email">
                    <label for="email">Usuario</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="password" type="password" name="password">
                    <label for="password">Password</label>
                </div>
                </div>
                <div class="card-action">
                    <button type="submit" class="waves-effect waves-light btn blue-grey center-align">Ingresar</button>
                    <a href="<?php echo RUTA_URL; ?>" class="btn waves-effect waves white black-text">Volver al home</a>
                </div>
            </form>
        </div>  
    
    <?php if (isset($data['mensaje'])){
    echo "<div><p class='center-align'>".$data['mensaje']."</p></div>";
    } ?>
</div>