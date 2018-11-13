<nav class="white">
	<div class="container">
		<div class="nav-wrapper">
      <?php if (true){?>
        <a href="<?php echo RUTA_URL; ?>" class="brand-logo blue-grey-text"><i class="material-icons">burst_mode</i><?php echo NOMBRE_SITIO; ?></a>
        <?php if (isset($_GET['url']) != 'admin'){ ?>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a class="blue-grey-text" href="#">Inicio</a></li>
            <li><a class="blue-grey-text" href="#">Noticias</a></li>
            <li><a class="blue-grey-text" href="#">Creadores</a></li>
            <li><a class="blue-grey-text" href="#">Contacto</a></li>
          </ul>
        <?php } ?>
      <?php } ?>
    </div>
	</div>
</nav>