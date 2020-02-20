<nav class="white">
	<div class="container">
		<div class="nav-wrapper">
        	<a class="blue-grey-text" href="<?php echo RUTA_URL; ?>/admin/dashboard"><?php echo $this->session->user; ?></a>
        	<a href="#" data-target="mobile-demo" class="sidenav-trigger blue-grey-text"><i class="material-icons">menu</i></a>
        	<ul id="nav-mobile" class="right hide-on-med-and-down">
          		<li><a class="blue-grey-text tooltipped" data-position="bottom" data-tooltip="Ir a Home" href="<?php echo RUTA_URL; ?>"><i class="tiny material-icons">desktop_windows</i></a></li>
          		<li><a class="blue-grey-text tooltipped" data-position="bottom" data-tooltip="Cerrar Sesión" href="<?php echo RUTA_URL ?>/admin/logout"><i class="tiny material-icons">directions_run</i></a></li>
          	</ul>
          	<ul class="sidenav" id="mobile-demo">
              <li><a href="#!"><i class="material-icons">menu</i>Menú</a></li>
              <div class="divider"></div>
            	<li><a href="<?php echo RUTA_URL."/content";?>"><i class="tiny material-icons">content_copy</i>Contenido</a></li>
          		<li><a href="<?php echo RUTA_URL."/admin/categorias"?>"><i class="tiny material-icons">list</i>Categorias</a></li>
          		<li><a href="<?php echo RUTA_URL; ?>/users"><i class="tiny material-icons">person</i>Usuarios</a></li>
          		<hr style="border: 1px solid #e0e0e0 !important;">
                <li><a href="<?php echo RUTA_URL; ?>"><i class="tiny material-icons">desktop_windows</i>Ir a Home</a></li>
          		<li><a href="<?php echo RUTA_URL ?>/admin/logout"><i class="tiny material-icons">directions_run</i>Cerrar sesión</a></li>
			</ul>
        </div>
    </div>
</nav>

<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
    });
</script>