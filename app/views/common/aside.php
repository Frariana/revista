<br>
<div class="col l3">
	<div class="row">
		<div class="row">
			<div style='font-size: 1.2em;'>Lo último</div><div class='divider'></div>
		</div>
		<?php foreach($data['contents'] as $content) {?>
			<?php if (!strstr($_SERVER['REQUEST_URI'], url($content->content_titulo))){?>
			<div class="row">
				<a class="grey-text text-darken-3" href="<?php echo RUTA_URL.'/v/g/'.url($content->content_titulo); ?>" >
					<div class="col s3">
						<div class="white-text blue-grey ?> lighten-2 center" class='flow-text'>
							<?php echo day($content->fecha); ?>
						</div>
	                    <div class="white-text blue-grey lighten-1 center" style="font-size: .7em">
	                    	<?php echo moth($content->fecha); ?>
	                    </div>
					</div>
					<div class="col s9" style="padding: 0">
						<span><?php echo substr($content->content_titulo, 0, 40); ?></span>
					</div>
				</a>
			</div>
			<?php } ?>
		<?php } ?>
	</div>
</div>