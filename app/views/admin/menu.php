<div class="row">
  <div class="col s4 l2">
    <ul class="collapsible">
      <?php if(!empty($data['categorias'])){ ?>
      <li>
        <div class="collapsible-header"><i class="material-icons">filter_drama</i>Publicaciones</div>
        <div class="collection">
          <?php foreach ($data['categorias'] as $categoria) : ?>
            <a href="<?php echo RUTA_URL."/admin/content/".$categoria->id_categoria; ?>" class="collection-item"><?php echo $categoria->titulo; ?></a>
          <?php endforeach; ?>
        </div>
      </li>
      <?php } ?>
      <li>
        <div style="border-top: 1px solid #ddd" class="collapsible-header"><i class="material-icons">place</i>Diseño</div>
        <div class="collection">
          <a href="<?php echo RUTA_URL."/admin/categorias"?>" class="collection-item">Categorias</a>
          <a href="#!" class="collection-item ">Distribución</a>
        </div>
      </li>
      <li>
        <div style="border-top: 1px solid #ddd" class="collapsible-header"><i class="material-icons">whatshot</i>Configuración</div>
        <div class="collection">
          <a href="<?php echo RUTA_URL; ?>/admin/config/users" class="collection-item ">Usuarios</a>
          <a href="<?php echo RUTA_URL; ?>/admin/config/general" class="collection-item">Características</a>
        </div>
      </li>
    </ul>
  </div>
  <br>
  <div class="col s8 l8">