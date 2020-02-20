<div class="grey darken-2 bajo-fullscreen"><br><br>
	<div class="row">
		<div class="container">
			<?php if($data['bloque2']){ ?>
				<?php for ($i = 0; $i < count($data['bloque2']); $i++) { ?>
					<div class="col l4 s12 center">
						<a class="links-home" href="<?php echo RUTA_URL.'/v/g/'.url($data['bloque2'][$i]->content_titulo); ?>">
			                <p class="promo-caption"><h5 class="bernard"><?php echo $data['bloque2'][$i]->content_titulo ?></h5></p>
			          	</a>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
    <br>
	<div class="row">
		<div class="container">
			<div class="divider"></div><br>
			<?php if ($data['bloque3']){?>
				<?php foreach($data['bloque3'] as $content){ ?>
					<div class="col s12 m6 l4">
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
			<?php }else{ ?>
				<div class="center-align" style="height: 400px">
					<br><h5 class="grey-text center-align">Sin contenido creado aún</h5>
				</div>
			<?php } ?>
		</div>
	</div>
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
			           		<li><a style="font-size: 1.2em" href="<?php echo RUTA_URL.'/v/c/'.url($categoria->category_titulo); ?>"><i class="material-icons tiny"><?php echo $categoria->icono; ?></i><?php echo " ".$categoria->category_titulo; ?></a></li>
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
</div>

