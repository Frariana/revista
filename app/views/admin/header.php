<nav class="white">
	<div class="container">
		<div class="nav-wrapper">
        	<a class="blue-grey-text" href="<?php echo RUTA_URL; ?>/admin/dashboard"><?php echo $this->session->user; ?></a>
        	<ul id="nav-mobile" class="right hide-on-med-and-down">
          		<li><a class="blue-grey-text tooltipped" data-position="bottom" data-tooltip="Ir a Home" href="<?php echo RUTA_URL; ?>"><i class="tiny material-icons">desktop_windows</i></a></li>
          		<li><a class="blue-grey-text" href="<?php echo RUTA_URL ?>/admin/logout">Salir</a></li>
          	</ul>
        </div>
    </div>
</nav>