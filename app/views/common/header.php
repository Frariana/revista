<nav class="white">
	<div class="container">
		<div class="nav-wrapper">
            <a href="<?php echo RUTA_URL; ?>" class="brand-logo blue-grey-text"><?php echo NOMBRE_SITIO; ?></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger blue-grey-text"><i class="material-icons">menu</i></a>
            <?php if ($data['categorias']){ ?>
                <ul class="right hide-on-med-and-down">
                <?php foreach ($data['categorias'] as $categoria){?>
                    <li>
                        <a class="blue-grey-text tooltipped" data-position="bottom" data-tooltip="<?php echo $categoria->category_titulo; ?>" href="<?php echo RUTA_URL.'/v/c/'.url($categoria->category_titulo); ?>"><i class="material-icons"><?php echo $categoria->icono; ?></i></a>
                    </li>
                <?php } ?>
                </ul>
                <ul class="sidenav" id="mobile-demo">
                <?php foreach ($data['categorias'] as $categoria){?>
                    <li>
                        <a class="blue-grey-text tooltipped" href="<?php echo RUTA_URL.'/v/c/'.url($categoria->category_titulo); ?>"><i class="material-icons"><?php echo $categoria->icono; ?></i> <?php echo $categoria->category_titulo; ?></a>
                    </li>
                <?php } ?>
                </ul>
            <?php } ?>
        </div>
	</div>
</nav>
<div class="container">
    <div class="row">

<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
    });
</script>