<?php
    $edit = false;
    if (array_key_exists('dataEditContent', $data)){
        $edit = true;
    }
?>
<div class="container">
    <div class="row"><br>
        <?php if ($edit) {?>
            <form action="<?php echo RUTA_URL.'/content/edit/'.$data['dataEditContent']['id_contenido'] ?>" method="POST">
        <?php }else{ ?>
            <form action="<?php echo RUTA_URL."/content/insert" ?>" method="POST">
        <?php } ?>
        <div class="input-field col s12">
            <i class="material-icons prefix">line_style</i>
            <?php if ($edit) {?>
                <input value="<?php echo $data['dataEditContent']['titulo'] ?>" id="titulo" name="titulo" type="text" required>
            <?php }else{ ?>
                <input id="titulo" name="titulo" type="text" required>
            <?php } ?>
      	     <label for="titulo">Título</label>
        </div>
        
        <div class="input-field col s4">
        	<i class="material-icons prefix">account_circle</i>
        	<?php if ($edit) {?>
                <input value="<?php echo $data['dataEditContent']['creador'] ?>" id="creador" name="creador" type="text" required>
            <?php }else{ ?>
                <input id="creador" name="creador" type="text" required value="<?php echo $this->session->user; ?>">
            <?php } ?>
        	<label for="creador">Creador</label>
        </div>
        <div class="input-field col s4">
            <i class="material-icons prefix">more</i>
            <select id="categoria" name="categoria">
            <?php if ($data['categorias']){?>
                <option value="">Sin categoría</option>
                <?php foreach ($data['categorias'] as $categoria) { ?>
                    <option value="<?php echo $categoria->titulo; ?>"><?php echo $categoria->titulo; ?></option>
                <?php } ?>
            <?php }else{ ?>
                <option value="">Sin categorías definidas aún</option>
            <?php } ?>
            </select>
            <label>Categoría</label>
        </div>
        <div class="input-field col s4">
        	<i class="material-icons prefix">verified_user</i>
        	<?php if ($edit) {?>
                <input value="<?php echo $data['dataEditContent']['icono'] ?>" id="icono" name="icono" type="text" required>
            <?php }else{ ?>
                <input id="icono" name="icono" type="text" required>
            <?php } ?>
        	<label for="icono">Icono</label>
        </div>
        <div class="input-field col s12">
            <i class="material-icons prefix">chrome_reader_mode</i>
            <?php if ($edit) {?>
                <input value="<?php echo $data['dataEditContent']['cuerpo'] ?>" id="cuerpo" name="cuerpo" type="text" required>
            <?php }else{ ?>
                <input id="cuerpo" name="cuerpo" type="text" required>
            <?php } ?>
            <label for="cuerpo">Cuerpo</label>
        </div>
        <div class="input-field col s12">
            <?php if ($edit) {?>
                <button type="submit" class="waves-effect waves-light btn center-align">Modificar</button>
            <?php }else{ ?>
                <button type="submit" class="waves-effect waves-light btn center-align">Crear</button>
            <?php } ?> 
            <a href="<?php echo RUTA_URL.'/content'; ?>" class="waves-effect waves-light grey lighten-1 btn">Cancelar</a>
        </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('select').formSelect();
    });
</script>