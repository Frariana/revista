<div class="col l9">
	<br><h5><?php echo $data['categoria']; ?></h5><br>
	<?php if ($data['elementos']){ ?>
		<?php foreach ($data['elementos'] as $elemento) { ?>
			<div class="row">
				<a class="grey-text text-darken-3" href="<?php echo RUTA_URL.'/v/g/'.url($elemento->content_titulo); ?>" >
					<div class="col s1">
						<div class="white-text blue-grey ?> lighten-2 center" class='flow-text'>
							<?php echo day($elemento->fecha); ?>
						</div>
	                    <div class="white-text blue-grey lighten-1 center" style="font-size: .7em">
	                    	<?php echo moth($elemento->fecha); ?>
	                    </div>
					</div>
					<div class="col s11" style="padding: 0">
						<span><?php echo substr($elemento->content_titulo, 0, 40); ?></span> - <span>Por </span><strong><?php echo $elemento->creador; ?></strong>
					</div>
				</a>
			</div>
		<?php } ?>
	<?php }else{ ?>
		<br><h5 class="grey-text center-align">Contenido no encontrado</h5>
	<?php } ?>
</div>
