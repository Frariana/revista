<?php if ($data['contents']){?>
	<?php foreach($data['contents'] as $content){ ?>
		<div class="col s12 m6 l4">
	    	<div class="card">
				<div class="card-image">
					<?php if ($content->imagen){ ?>
						<img width="100%" src="data:image/jpeg;base64,<?php echo base64_encode($content->imagen);?>"/>
					<?php }else{ ?>
						<img width="100%" src="<?php echo RUTA_URL.'/public/img/icono.jpg'?>"/>
					<?php } ?>	
				</div>
				<span class="card-title" style='background: rgba(3, 3, 3, .3)'>
					<strong>
						<?php if ($content->icono){
							echo "<i class='material-icons'>".$content->icono."</i>";
						} ?>
						<?php echo $content->content_titulo; ?>
					</strong>
				</span>
				<p><?php echo $content->cuerpo; ?></p>
				<div class="card-action">
					<a href="<?php echo RUTA_URL.'/v/g/'.url($content->content_titulo); ?>">Ver</a>
				</div>
	    	</div>
	  	</div>
	<?php } ?>
<?php }else{ ?>
	<div class="center-align" style="height: 400px">
		<br><h5 class="grey-text center-align">Sin contenido creado aún</h5>
	</div>
<?php } ?>