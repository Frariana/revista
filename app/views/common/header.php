<nav style="opacity:0.5;">
	<div class="container">
		<div class="nav-wrapper">
            <a style="color: #F11919" href="<?php echo RUTA_URL; ?>" class="brand-logo center"><?php echo NOMBRE_SITIO; ?></a>
            <a style="color: #F11919" href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <?php if ($data['categorias']){ ?>
                <ul class="right hide-on-med-and-down">
                <?php foreach ($data['categorias'] as $categoria){?>
                    <li>
                        <a style="color: #F11919; text-shadow: 1px 1px #FFF;" class="tooltipped" data-position="bottom" data-tooltip="<?php echo $categoria->category_titulo; ?>" href="<?php echo RUTA_URL.'/v/c/'.url($categoria->category_titulo); ?>"><i class="material-icons"><?php echo $categoria->icono; ?></i></a>
                    </li>
                <?php } ?>
                </ul>
                <ul class="sidenav" id="mobile-demo">
                <?php foreach ($data['categorias'] as $categoria){?>
                    <li>
                        <a style="color: #F11919" class= tooltipped" href="<?php echo RUTA_URL.'/v/c/'.url($categoria->category_titulo); ?>"><i class="material-icons"><?php echo $categoria->icono; ?></i> <?php echo $categoria->category_titulo; ?></a>
                    </li>
                <?php } ?>
                </ul>
            <?php } ?>
        </div>
	</div>
</nav>
<div class="">
    <div class="row">

<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
    });
</script>