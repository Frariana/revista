<div class="grey darken-3 grey-text text-lighten-4" style="padding-bottom: 2em">
	<div class="row">
		<div class="container">
			<br><div class="row flow-text bernard">Recientes</div>
			<?php foreach($data['contents'] as $content) {?>
				<?php if (!strstr($_SERVER['REQUEST_URI'], url($content->content_titulo))){?>
					<div class="col l3 m4 6">
						<a href="<?php echo RUTA_URL.'/v/g/'.url($content->content_titulo); ?>">
							<?php if ($content->imagen){ ?>
								<div class="card">
									<div class="card-image" style="background-image: url(data:image/jpeg;base64,<?php echo base64_encode($content->imagen);?>); background-size: cover; background-position: center;">
										<span class="card-title sombra-negra">
											<strong class="flow-text">
												<?php echo $content->content_titulo; ?>
											</strong>
										</span>
									</div>
								</div>
							<?php }else{ ?>
								<div class="card blue-grey darken-1">
									<div class="card-content white-text">
										<span class="card-title flow-text">
											<?php echo $content->content_titulo; ?>
										</span>
					          			<p><?php echo $content->cuerpo; ?></p>
					        		</div>
					        	</div>
							<?php } ?>
						</a>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
</div>