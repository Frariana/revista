<br>
<div class="col l3">
	<div class="row">
		<div class="row">
			<div style='font-size: 1.2em;'>Lo último</div><div class='divider'></div>
		</div>
		
			<?php foreach($data['contents'] as $content) {?>
			<div class="row">
				<a class="grey-text text-darken-3" href="<?php echo RUTA_URL.'/v/g/'.$content->id_contenido; ?>" >
					<div class="col s3">
						<div class="white-text blue-grey ?> lighten-2 center" class='flow-text'>02</div>
	                    <div class="white-text blue-grey lighten-1 center" style="font-size: .7em">FEB</div>
					</div>
					<div class="col s9" style="padding: 0">
						<span><?php echo substr($content->titulo, 0, 40); ?></span>
					</div>
				</a>
			</div>
			<?php } ?>
	</div>
</div>
<!-- no borrar -->
	</div>
</div>