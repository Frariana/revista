<nav class="white">
	<div class="container">
		<div class="nav-wrapper">
        	<a class="blue-grey-text" href="<?php echo RUTA_URL; ?>/admin/dashboard"><?php echo $this->userSession->getSession('user'); ?></a>
        	<ul id="nav-mobile" class="right hide-on-med-and-down">
          		<li><a href="<?php echo RUTA_URL ?>/admin/logout">Salir</a></li>
          	</ul>
        </div>
    </div>
</nav>