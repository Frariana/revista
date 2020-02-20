<div class="grey darken-2 grey-text text-lighten-4" style="padding-bottom: 2em">
	<div class="container">
		<br><h5><?php echo $data['categoria']; ?></h5><br>
		<?php if ($data['contents']){ ?>
			<?php foreach ($data['contents'] as $content) { ?>
				<div class="col s12 m6">
					<a href="<?php echo RUTA_URL.'/v/g/'.url($content->content_titulo); ?>">
					<?php if ($content->imagen){ ?>
						<div class="card">
							<div class="card-image">
								<img width="100%" src="data:image/jpeg;base64,<?php echo base64_encode($content->imagen);?>"/>
								<span class="card-title sombra-negra">
									<strong class="flow-text">
										<?php if ($content->icono){
											echo "<i class='material-icons'>".$content->icono."</i>";
										} ?>
										<?php echo $content->content_titulo; ?>
									</strong>
								</span>
							</div>
						</div>
					<?php }else{ ?>
						<div class="card blue-grey darken-1">
	        				<div class="card-content white-text">
	        					<span class="card-title flow-text">
									<?php if ($content->icono){
										echo "<i class='material-icons'>".$content->icono."</i>";
									} ?>
									<?php echo $content->content_titulo; ?>
	        					</span>
			          			<p><?php echo $content->cuerpo; ?></p>
			        		</div>
			        	</div>
					<?php } ?>
		    	</a>
				</div>
			<?php } ?>
		<?php }else{ ?>
			<br><h5 class="grey-text center-align">Contenido no encontrado</h5>
		<?php } ?>
	</div>
</div>
