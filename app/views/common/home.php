<div class="row">
	<div class="container">
		<?php foreach($data['contents'] as $content){ ?>
			<div class="col s12 m6 l3">
		      	<div class="card">
		        	<div class="card-content">
		          		<span class="card-title"><?php echo $content->titulo; ?></span>
		          		<p class="truncate"><?php echo $content->cuerpo; ?></p>
		        	</div>
			        <div class="card-action">
			          <a href="<?php echo RUTA_URL.'/v/g/'.$content->id_contenido; ?>">Ver</a>
			        </div>
		      	</div>
		    </div>
	   	<?php } ?>
	</div>
</div>