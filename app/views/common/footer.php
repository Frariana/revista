</div>
	<script src="<?php echo RUTA_URL?>/js/main.js"></script>
  	<footer class="blue-grey page-footer">
      <div class="container">
        <div class="row">
        	<div class="col l6 s12">
          	<h5 class="white-text">La revista del futuro</h5>
          	<p class="grey-text text-lighten-4">Entretenerte es nuestra misión</p>
        	</div>
          <?php if ($data['categorias']){ ?>
          	<div class="col l4 offset-l2 s12">
            	<h5 class="white-text">Secciones</h5>
        		  <ul>
                <?php foreach ($data['categorias'] as $categoria){?>
               	<li><a class="grey-text text-lighten-3" href="#!"><?php echo $categoria->titulo; ?></a></li>
                <?php } ?>
                <li><a class="grey-text text-lighten-3" href="<?php echo RUTA_URL; ?>/admin">Admin</a></li>
        		  </ul>
          	</div>
          <?php } ?>
       	</div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        	© 2018 Copyright Text
        	<a class="grey-text text-lighten-4 right" href="#!"> <i class="material-icons">keyboard_arrow_up</i>Ir arriba</a>
        </div>
      </div>
    </footer>
</body>
</html>
