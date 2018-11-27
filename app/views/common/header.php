<nav class="white">
	<div class="container">
		<div class="nav-wrapper">
            <a href="<?php echo RUTA_URL; ?>" class="brand-logo blue-grey-text"><i class="material-icons">burst_mode</i><?php echo NOMBRE_SITIO; ?></a>
            <?php if ($data['categorias']){ ?>
                <?php $cantidad = 0; ?>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                <?php foreach ($data['categorias'] as $categoria){?>
                    <?php if ($cantidad<3){ ?>
                        <li>
                            <a class="blue-grey-text" href="<?php echo RUTA_URL.'/v/c/'.url($categoria->category_titulo); ?>">
                                <i class="material-icons right"><?php echo $categoria->icono; ?></i>
                                <?php echo $categoria->category_titulo; ?>
                            </a>
                        </li>
                    <?php }else{ ?>
                        <li>
                            <a class="dropdown-trigger blue-grey-text" href="#!" data-target="dropdown1">Más<i class="material-icons right">arrow_drop_down</i></a>
                        </li>
                    <?php } ?>
                    <?php $cantidad++; ?>
                <?php } ?>
            <?php } ?>
        </div>
	</div>
</nav>
<div class="container">
    <div class="row">