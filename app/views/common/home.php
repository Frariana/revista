<?php if ($data['contents']){?>
	<?php foreach($data['contents'] as $content){ ?>
		<div class="col s12 m6">
	      	<div class="card">
						<div class="card-image">
						<?php echo '<img width="100%" src="data:image/jpeg;base64,'.base64_encode( $content->imagen ).'"/>';?>
						<span class="card-title" style='background: rgba(3, 3, 3, .3)'><strong><i class="material-icons"><?php echo $content->icono; ?></i> <?php echo $content->content_titulo; ?></strong></span>
						</div>
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


          