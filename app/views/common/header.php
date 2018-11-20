<nav class="white">
	<div class="container">
		<div class="nav-wrapper">
            <?php if ($data['categorias']){ ?>
                <a href="<?php echo RUTA_URL; ?>" class="brand-logo blue-grey-text"><i class="material-icons">burst_mode</i><?php echo NOMBRE_SITIO; ?></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                <?php foreach ($data['categorias'] as $categoria){?>
                    <li><a class="blue-grey-text" href="<?php echo $categoria->id_categoria; ?>"><?php echo $categoria->titulo; ?></a></li>
                <?php } ?>
            <?php } ?>
        </div>
	</div>
</nav>