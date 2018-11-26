<div class="container">
    <div class="card">
        <div class="card-content">
            <form action="<?php echo RUTA_URL; ?>/admin/login" method="post">
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
                <div class="row center">
                    <button type="submit" class="waves-effect waves-light btn blue-grey center-align">Ingresar</button>
                </div>
            </form>
        </div>  
    </div>
    <?php if (isset($data['mensaje'])){
    echo "<div><p class='center-align'>".$data['mensaje']."</p></div>";
    } ?>
</div>