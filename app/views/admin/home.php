<div class="container">
  <div class="row" style="margin-top: 1em">
  	<p style="margin-left: 1rem;">Visitas:</p>
    <div class="col m3 s6">
      	<div class="card" style="padding: .3em .3em !important; height: 10em">
        	<div class=" center">
        		<p><i class="material-icons" style="font-size: 1.2rem; position: relative; top: 3px;">people</i><strong style="font-size: 1em"> Número de visitantes</strong></p>
          		<p><b><span style="font-size: 2rem;"><?php echo $data['numeroDeVisitantes']; ?></span></b></p>
        	</div>
      	</div>
    </div>
    <div class="col m3 s6">
      	<div class="card" style="padding: .3em .3em !important; height: 10em">
        	<div class=" center">
        		<p><i class="material-icons" style="font-size: 1.2rem; position: relative; top: 3px;">public</i><strong style="font-size: 1em"> Total de visitas</strong></p>
          		<p><b><span style="font-size: 2rem;"><?php echo $data['totalVisitas']; ?></span></b></p>
        	</div>
      	</div>
    </div>
  </div>
  <div class="row">
    <p style="margin-left: 1rem;">Último contenido:</p>
    <ul class="collection">
      <?php if($data['recientes']){ ?>
        <?php foreach ($data['recientes'] as $contenido) { ?>
          <li class='collection-item grey-text text-darken-2'><span class="grey-text secondary-content">&nbsp;<?php echo $contenido->fecha; ?></span><i class="teal-text secondary-content"><?php echo $contenido->creador; ?></i><b><?php echo $contenido->content_titulo; ?></b><br><i><?php echo $contenido->cuerpo; ?>...</i></li>
        <?php } ?>
      <?php }else{ ?>
        <li class='collection-item'><i class='material-icons left'>local_library</i>Sin contenido creado</li>
      <?php } ?>
    </ul>
  </div>
</div>