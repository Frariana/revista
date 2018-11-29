<?php if ($data['contents']){?>
	<?php foreach($data['contents'] as $content){ ?>
		<div class="col s12 m6 l3">
	      	<div class="card">
	        	<div class="card-content">
	          		<span class="card-title"><?php echo $content->content_titulo; ?></span>
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