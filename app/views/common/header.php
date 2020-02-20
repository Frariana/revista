<?php
    $cantCategorias = count($data['categorias']);
    $cantBloque1 = count($data['bloque1']);
    $activarDropbox = false;
    $limiteActivarDropbox = 2;
?>

<nav class="red darken-4 sobre-slider">
	<div class="container">
		<div class="nav-wrapper">
            <a href="<?php echo RUTA_URL; ?>" class="brand-logo center sombra-negra bernard">GatoPardoEstudios</a> 
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <?php if($data['bloque1']){ ?>
                    <?php if ($cantBloque1 > $limiteActivarDropbox) { ?>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <?php for ($i = 0; $i < $limiteActivarDropbox; $i++) { ?>
                                <li>
                                    <a class="sombra-negra" href="<?php echo RUTA_URL.'/v/g/'.url($data['bloque1'][$i]->content_titulo); ?>">
                                        <?php echo $data['bloque1'][$i]->content_titulo ?>
                                    </a>
                                </li>
                            <?php } ?>
                            <li><a class="dropdown-trigger sombra-negra" href="#!" data-target="dropdownBloque1">Más<i class="material-icons right">arrow_drop_down</i></a></li>
                        </ul>
                        <!-- dropdown -->
                        <ul id="dropdownBloque1" class="dropdown-content">
                            <?php for ($i = $limiteActivarDropbox; $i < $cantCategorias; $i++) { ?>
                                <li><a class="black-text" href="<?php echo RUTA_URL.'/v/g/'.url($data['bloque1'][$i]->content_titulo); ?>">
                                        <?php echo $data['bloque1'][$i]->content_titulo ?>
                                </a></li>
                            <?php } ?>
                        </ul>
                    <?php } else { ?>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <?php foreach ($data['bloque1'] as $bloque1){ ?>
                                <li>
                                    <a class="sombra-negra" href="<?php echo RUTA_URL.'/v/g/'.url($bloque1->id); ?>">
                                        <?php echo $bloque1->content_titulo; ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                <?php } ?>
            </ul>
            <!-- navbar derecho -->
            <?php if ($data['categorias']){ ?>
                <?php if ($cantCategorias > $limiteActivarDropbox) { ?>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <?php for ($i = 0; $i < $limiteActivarDropbox; $i++) { ?>
                            <li>
                                <a class="sombra-negra" href="<?php echo RUTA_URL.'/v/c/'.url($data['categorias'][$i]->id); ?>">
                                    <?php echo $data['categorias'][$i]->category_titulo ?>
                                </a>
                            </li>
                        <?php } ?>
                        <li><a class="dropdown-trigger sombra-negra" href="#!" data-target="dropdownCategorias">Más<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                    <!-- dropdown -->
                    <ul id="dropdownCategorias" class="dropdown-content">
                        <?php for ($i = $limiteActivarDropbox; $i < $cantCategorias; $i++) { ?>
                            <li><a class="black-text" href="<?php echo RUTA_URL.'/v/c/'.url($data['categorias'][$i]->id); ?>">
                                <?php echo $data['categorias'][$i]->category_titulo ?>
                            </a></li>
                        <?php } ?>
                    </ul>
                <?php } else { ?>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <?php foreach ($data['categorias'] as $categoria){ ?>
                            <li>
                                <a class="sombra-negra" href="<?php echo RUTA_URL.'/v/c/'.url($categoria->id); ?>">
                                    <?php echo $categoria->category_titulo; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            <?php } ?>
            <!-- version movil -->
            <ul class="sidenav" id="mobile-demo">
                <li><a href="sass.html">Juegos</a></li>
                <li><a href="badges.html">Pedagógica</a></li>
                <li><a href="collapsible.html">Multimedia</a></li>
                <div class="divider"></div>
                <?php if ($data['categorias']){ ?>
                    <?php foreach ($data['categorias'] as $categoria){ ?>
                        <li>
                            <a href="<?php echo RUTA_URL.'/v/c/'.url($categoria->id); ?>"><i class="material-icons"><?php echo $categoria->icono; ?></i> <?php echo $categoria->category_titulo; ?></a>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
	</div>
</nav>