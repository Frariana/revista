<?php
  $edit = false;
  if (array_key_exists('dataEditCategoria', $data)){
    $edit = true;
  }
?>
<div>
  <a href="#modalCategoria" class="waves-effect waves-light btn modal-trigger right">Nueva categoría</a>
</div>
<p style="margin-left: 1rem;">Categorías creadas:</p>
<ul class="collection with-header">
  <?php if(empty($data['categorias'])){ ?>
    <li class="collection-item">Sin categorias creadas aún</li>
  <?php }else{ ?>
    <?php foreach ($data['categorias'] as $categoria) : ?>
      <li class="collection-item">
        <div>
          <i class="tiny material-icons"><?php echo $categoria->icono; ?></i>
          <?php echo $categoria->category_titulo; ?>
          <a href="#eliminar" name="<?php echo $categoria->id_categoria; ?>" class="secondary-content modal-trigger botonesBorrar"><i class="tiny material-icons">delete</i></a>
          <a href="<?php echo RUTA_URL."/admin/editCategory/".$categoria->id_categoria; ?>" class="secondary-content"><i class="tiny material-icons">edit</i></a>
        </div>
      </li>
    <?php endforeach; ?>
  <?php } ?>
</ul>

<div id="eliminar" class="modal">
  <div class="modal-content">
    <h4>Eliminar<hr></h4>
      <p>¿Estás seguro de eliminar esta categoría?</p>
  </div>
  <div class="modal-footer">
    <a id="buttonDelete" class="modal-close waves-effect waves-light lighten-1 btn">Eliminar</a>
    <a href="#" class="modal-close waves-effect waves-light grey lighten-1 btn">Cancelar</a>
  </div>
</div>

<div id="modalCategoria" class="modal">
  <div class="modal-content">
    <p>
      <?php if($edit){ ?>
        <h4>Modificar categoría</h4>
        <form action="<?php echo RUTA_URL.'/admin/editCategory/'.$data['dataEditCategoria']['id_categoria']; ?>" method="post">
      <?php }else{ ?>
        <h4>Crear nueva categoría</h4>
        <form action="<?php echo RUTA_URL?>/admin/insertCategory" method="post">
      <?php } ?>
      <div class="row">
        <div class="col s6 input-field">
          <?php if($edit){ ?>
            <input value="<?php echo $data['dataEditCategoria']['category_titulo']; ?>" name="titulo" id="titulo" type="text" required>
          <?php }else{ ?>
            <input name="titulo" id="titulo" type="text" required>
          <?php } ?>
          <label for="titulo">Título</label>
        </div>
        <div class="col s6 input-field">
          <?php if($edit){ ?>
            <input value="<?php echo $data['dataEditCategoria']['icono']; ?>" name="icono" id="icono" type="text">
          <?php }else{ ?>
            <input name="icono" id="icono" type="text">
          <?php } ?>
          <label for="icono">Icono</label>
        </div>
      </div>
    </p>
  </div>
  <div class="modal-footer">
    <?php if($edit){ ?>
      <button type="submit" class="modal-close waves-effect waves-light lighten-1 btn">Modificar</button>
    <?php }else{ ?>
      <button type="submit" class="modal-close waves-effect waves-light lighten-1 btn">Agregar</button>
    <?php } ?>
    <?php if($edit){ ?>
      <a href="<?php echo RUTA_URL?>/admin/categorias" class="modal-close waves-effect waves-light grey lighten-1 btn">Cancelar</a>
    <?php }else{ ?>
      <a href="" class="modal-close waves-effect waves-light grey lighten-1 btn">Cancelar</a>
    <?php } ?>
    </form>
  </div>
</div>

<script>
  $(document).ready(function(){
    var redireccionar = function(){ 
      window.location = '<?php echo RUTA_URL?>/admin/categorias';
    };
    var url = window.location.href;
    if (url.indexOf('editCategory') > 0){
      $('#modalCategoria').modal({ 'preventScrolling': true, 'onCloseEnd': redireccionar });
      $('#modalCategoria').modal('open');
    }else{
      $('.modal').modal();
    }
    $('.botonesBorrar').click(function(){
      var id = this.name;
      $('#buttonDelete').prop({
        href: '<?php echo RUTA_URL?>/admin/deleteCategory/'+id
      });
    });
  });
</script>