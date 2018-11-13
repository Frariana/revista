<?php
	$edit = false;
 	if (array_key_exists('dataEditCategoria', $data)){
		$edit = true;
	}
?>
<div class="row">
	<?php if($edit){ ?>
		<form action="<?php echo RUTA_URL.'/admin/editCategory/'.$data['dataEditCategoria']['id_categoria']; ?>" method="post">
	<?php }else{ ?>
		<form action="<?php echo RUTA_URL?>/admin/insertCategory" method="post">
	<?php } ?>
	<p>Crear nueva categoría:</p>
  	<div class="col s5 input-field">
  		<?php if($edit){ ?>
  			<input value="<?php echo $data['dataEditCategoria']['titulo']; ?>" name="titulo" id="titulo" type="text" required>
		<?php }else{ ?>
    		<input name="titulo" id="titulo" type="text" required>
    	<?php } ?>
    	<label for="titulo">Título</label>
  	</div>
  	<div class="col s5 input-field">
  		<?php if($edit){ ?>
    		<input value="<?php echo $data['dataEditCategoria']['icono']; ?>" name="icono" id="icono" type="text">
    	<?php }else{ ?>
    		<input name="icono" id="icono" type="text">
    	<?php } ?>
    	<label for="icono">Icono</label>
  	</div>
  	<div class="col s2">
  		<?php if($edit){ ?>
			<button type="submit" class="waves-effect waves-light btn center-align">Modificar</button>
  		<?php }else{ ?>
  			<button type="submit" class="waves-effect waves-light btn center-align">Agregar</button>
  		<?php } ?>
  	</div>
  	</form>
</div>
<div class="row">
	Categorías creadas:
	<ul class="collection with-header">
		<?php if(empty($data['categorias'])){ ?>
			<li class="collection-item">Sin categorias creadas aún</li>
		<?php }else{ ?>
			<?php foreach ($data['categorias'] as $categoria) : ?>
        		<li class="collection-item">
        			<div>
        				<i class="tiny material-icons"><?php echo $categoria->icono; ?></i>
        				<?php echo $categoria->titulo; ?>
        				<a href="<?php echo RUTA_URL."/admin/deleteCategory/".$categoria->id_categoria; ?>" class="secondary-content"><i class="tiny material-icons">delete</i></a> 
        				<a href="<?php echo RUTA_URL."/admin/editCategory/".$categoria->id_categoria; ?>" class="secondary-content"><i class="tiny material-icons">edit</i></a>
        			</div>
        		</li>
      		<?php endforeach; ?>
		<?php } ?>
	</ul>
</div>