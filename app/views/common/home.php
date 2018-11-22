<div class="row">
	<div class="container">
		<?php if ($data['contents']){?>
			<?php foreach($data['contents'] as $content){ ?>
				<div class="col s12 m6 l3">
			      	<div class="card">
			        	<div class="card-content">
			          		<span class="card-title"><?php echo $content->titulo; ?></span>
			          		<p class="truncate"><?php echo substr($content->cuerpo, 0, 50); ?></p>
			        	</div>
				        <div class="card-action">
				          <a href="<?php echo RUTA_URL.'/v/g/'.url($content->titulo); ?>">Ver</a>
				        </div>
			      	</div>
			    </div>
		   	<?php } ?>
	   	<?php }else{ ?>
	   		<div class="center-align" style="height: 400px">
				<br><h5 class="grey-text center-align">Sin contenido creado aún</h5>
			</div>
		<?php } ?>
	</div>
</div>