<nav class="white">
	<div class="container">
		<div class="nav-wrapper">
            <a href="<?php echo RUTA_URL; ?>" class="brand-logo blue-grey-text"><i class="material-icons">burst_mode</i><?php echo NOMBRE_SITIO; ?></a>
            <?php if ($data['categorias']){ ?>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                <?php foreach ($data['categorias'] as $categoria){?>
                    <li>
                        <a class="blue-grey-text" href="<?php echo RUTA_URL.'/v/c/'.url($categoria->titulo); ?>"><?php echo $categoria->titulo; ?></a>
                    </li>
                <?php } ?>
            <?php } ?>
        </div>
	</div>
</nav>