<div class="slider">
    <ul class="slides">
      <li>
        <img src="https://lorempixel.com/580/250/nature/1"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>

<?php if ($data['contents']){?>
	<?php foreach($data['contents'] as $content){ ?>
		<div class="col s12 m6 l4">
	    	<a href="<?php echo RUTA_URL.'/v/g/'.url($content->content_titulo); ?>">
				<?php if ($content->imagen){ ?>
					<div class="card">
						<div class="card-image">
							<img width="100%" src="data:image/jpeg;base64,<?php echo base64_encode($content->imagen);?>"/>
							<span class="card-title" style='background: rgba(3, 3, 3, .3); text-shadow: 1px 1px #000000'>
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
	<div class="center-align" style="height: 400px">
		<br><h5 class="grey-text center-align">Sin contenido creado aún</h5>
	</div>
<?php } ?>

<script>
 $(document).ready(function(){
    $('.slider').slider();
  });
     
</script>