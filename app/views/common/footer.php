  <footer class="grey darken-3 page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <a href="<?php echo RUTA_URL; ?>" style="font-size: 2.5rem;" class="brand-logo center bernard">GatoPardoEstudios</a> 
          <p class="grey-text text-lighten-4">
        <a href="https://www.facebook.com/"><i style="font-size:24px" class="fa">&#xf230;</i></a>
        <a href="https://www.instagram.com/?hl=es-la"><i style="font-size:24px; margin-left: .5em;" class="fa">&#xf16d;</i></a>
        <a href="https://www.youtube.com"><i style="font-size:24px; margin-left: .5em;" class="fa">&#xf16a;</i></a>
          </p>
        </div>
        <?php if ($data['categorias']){ ?>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text bernard">Secciones</h5>
          <ul>
                <?php foreach ($data['categorias'] as $categoria){?>
                  <li><a style="font-size: 1.2em" href="<?php echo RUTA_URL.'/v/c/'.url($categoria->id); ?>"><i class="material-icons tiny"><?php echo $categoria->icono; ?></i><?php echo " ".$categoria->category_titulo; ?></a></li>
                <?php } ?>
          </ul>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
          © 2019 | Todos los derechos reservados
          <!-- <a class="grey-text text-lighten-3" href="<?php echo RUTA_URL; ?>/admin">Admin</a> -->
          <a class="grey-text text-lighten-4 right tooltipped" href="" id="up" data-position="top" data-tooltip="Ir al top">
            <i class="material-icons">keyboard_arrow_up</i>
          </a>
        </div>
    </div>
  </footer>
</body>
</html>

<script>
  $(document).ready(function(){
    $("#up").click(function(){
      $(window).animate({ scrollTop: 0 }, "slow");
    });
  });
</script>