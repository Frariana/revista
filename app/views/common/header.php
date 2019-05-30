<nav class="grey darken-4" style="z-index: 10; position: fixed; ">
	<div class="container">
		<div class="nav-wrapper">
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <?php if ($data['categorias']){ ?>
                <ul class="right hide-on-med-and-down">
                <?php
                $i = 1;
                foreach ($data['categorias'] as $categoria){ ?>
                    <li>
                        <a href="<?php echo RUTA_URL.'/v/c/'.url($categoria->category_titulo); ?>">
                            <?php echo $categoria->category_titulo; ?>
                        </a>
                    </li>
                <?php $i++; } ?>
                </ul>
                <ul class="sidenav" id="mobile-demo">
                <?php foreach ($data['categorias'] as $categoria){?>
                    <li>
                        <a class="tooltipped" href="<?php echo RUTA_URL.'/v/c/'.url($categoria->category_titulo); ?>"><i class="material-icons"><?php echo $categoria->icono; ?></i> <?php echo $categoria->category_titulo; ?></a>
                    </li>
                <?php } ?>
                </ul>
            <?php } ?>
            <a href="<?php echo RUTA_URL; ?>" class="brand-logo center" style="z-index: 5;"><i class="material-icons large">all_inclusive</i></a> 
        </div>
	</div>
</nav>
<div class="">
    <div class="row">

<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
        $('.tooltipped').tooltip();
    });
</script>

