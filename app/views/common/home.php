<?php if ($data['contents']){?>
	<?php foreach($data['contents'] as $content){ ?>
		<div class="col s12 m6">
	    	<div class="card">
				<?php if ($content->imagen){ ?>
					<div class="card-image">
						<img width="100%" src="data:image/jpeg;base64,<?php echo base64_encode($content->imagen);?>"/>
						<span class="card-title" style='background: rgba(3, 3, 3, .3)'>
							<strong><i class="material-icons"><?php echo $content->icono; ?></i> <?php echo $content->content_titulo; ?></strong>
						</span>
					</div>
				<?php }else{ ?>
					<?php if ($content->icono){ ?>
						<div class="card blue-grey darken-1">
							<div class="card-content white-text">
								<span class="card-title">
									<strong><i class="material-icons"><?php echo $content->icono; ?></i> <?php echo $content->content_titulo; ?></strong>
								</span>
								<p><?php echo $content->cuerpo; ?></p>
							</div>
						</div>	
					<?php }else{ ?>
						.
					<?php } ?>
				<?php } ?>
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