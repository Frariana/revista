<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
<!-- Include Editor style. -->
<link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
<!-- Include external JS libs. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/js/froala_editor.pkgd.min.js"></script>
<!-- Initialize the editor. -->

<?php
    $edit = false;
    if (array_key_exists('dataEditContent', $data)){
        $edit = true;
    }
?>
<div class="container">
    <div class="row"><br>
        <?php if ($edit) {?>
            <form action="<?php echo RUTA_URL.'/content/edit/'.$data['dataEditContent']['id_contenido'] ?>" method="POST" enctype="multipart/form-data">
        <?php }else{ ?>
            <form action="<?php echo RUTA_URL."/content/insert" ?>" method="POST" enctype="multipart/form-data">
        <?php } ?>
                <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <?php if ($edit) {?>
                <input value="<?php echo $data['dataEditContent']['creador'] ?>" id="creador" name="creador" type="text" required>
            <?php }else{ ?>
                <input id="creador" name="creador" type="text" required value="<?php echo $this->session->user; ?>">
            <?php } ?>
            <label for="creador">Creador</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">more</i>
            <select id="categoria" name="id_categoria">
                <?php if ($data['categorias']){?>
                    <option value="">Sin categoría</option>
                    <?php foreach ($data['categorias'] as $categoria) { ?>
                        <option <?php if($edit == true){ if($categoria->id_categoria == $data['dataEditContent']['id_categoria']){ echo "selected"; } } ?> value="<?php echo $categoria->id_categoria; ?>"><?php echo $categoria->category_titulo; ?></option>
                    <?php } ?>
                <?php }else{ ?>
                    <option value="">Sin categorías definidas aún</option>
                <?php } ?>
            </select>
            <input type="hidden" name="icono" value="">
        </div>
        <div class="input-field col s8">
            <i class="material-icons prefix">line_style</i>
            <?php if ($edit) {?>
                <input value="<?php echo $data['dataEditContent']['content_titulo'] ?>" id="titulo" name="titulo" type="text" required>
            <?php }else{ ?>
                <input id="titulo" name="titulo" type="text" required>
            <?php } ?>
      	     <label for="titulo">Título</label>
        </div>
        <div class="input-field file-field col s4">
            <div class="btn">Imagen<input type="file" name="userfile" id="userfile" value="NULL"></div>
            <div class="file-path-wrapper">
                <input type="file" class="form-control" id="image" name="image" multiple>
            </div>
        </div>
        <div class="input-field col s12">
            <i class="material-icons prefix">chrome_reader_mode</i>
            <?php if ($edit) {?>
                <textarea id="cuerpo" name="cuerpo" class="materialize-textarea" required><?php echo $data['dataEditContent']['cuerpo'] ?></textarea>
            <?php }else{ ?>
                <textarea id="cuerpo" name="cuerpo" class="materialize-textarea" required></textarea>
            <?php } ?>
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
        $('textarea').froalaEditor({ language: 'es'}).on('froalaEditor.image.beforeUpload', function (e, editor, files) {
            if (files.length) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var result = e.target.result;
                    editor.image.insert(result, null, null, editor.image.get());
                };
                reader.readAsDataURL(files[0]);
            }
            return false;
        });
    });
</script>
