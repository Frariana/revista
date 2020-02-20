<div class="row" style="margin-top: 1em">
  <div class="container">
    <a class="waves-effect waves-light btn right" href="<?php echo RUTA_URL."/content/insert";?>">Crear contenido</a>
    <div class="col s12 input-field">
      <i class="material-icons prefix">search</i>
      <input name="buscar" id="buscar" type="text">
        <label for="buscar">Buscar</label>
    </div>
    <input type="hidden" id="cantidadRegistros" value="10">
    <!-- lista -->
    <!-- <ul class="collection">
    </ul> -->
    <ul class="collection" id="lista">
    </ul>
    <!-- paginación -->
    <ul class="pagination"></ul>
  </div>
</div>

<!-- Modal Structure Delete content-->
<div id="eliminar" class="modal">
  <div class="modal-content">
  	<h4>Eliminar<hr></h4>
    <p>¿Estás seguro de eliminar éste contenido?</p>
  </div>
  <div class="modal-footer">
  	<a id="buttonDelete" class="modal-close btn">Eliminar</a>
    <a href="#" class="modal-close grey lighten-1 btn">Cancelar</a>
  </div>
</div>

<script>
  function borrar(id){
    var eleccion = confirm('¿Estás seguro de eliminar ésta contenido?');
    if (eleccion){
      location.href='<?php echo RUTA_URL?>/content/delete/'+id;
    }
  }
  function cargarData(controller, paginaActual, cantidadRegistros, busqueda){
    $('#lista').html('');
    $.ajax({
      url: controller+"getall/"+paginaActual+"/"+cantidadRegistros+"/"+busqueda,
      type: "post"
    }).done(function(respuesta){
      var data = $.parseJSON(respuesta);
      var lista = $('#lista');
      lista.append("");
      $.each(data.contenido, function( key, value ) {
        var contenido = "<li class='collection-item grey-text text-darken-2'><a name='"+value.id+"' class='botonesBorrar secondary-content deep-orange-text text-darken-3' onclick='borrar("+value.id+")'>Eliminar</a><span class='secondary-content grey-text'>&nbsp;|&nbsp;</span><a href='<?php echo RUTA_URL.'/content/edit/'; ?>"+value.id+"' class='secondary-content orange-text text-darken-3'>&nbsp;Editar&nbsp;</a><span class='secondary-content grey-text'>&nbsp;|&nbsp;</span><a href='<?php echo RUTA_URL.'/v/g/'; ?>"+url(value.content_titulo)+"' class='secondary-content'>Ver</a><b>"+value.content_titulo+"</b>";
        if (value.slider == true){
          contenido += "&nbsp;<i class='tiny material-icons'>filter</i>";
        }if (value.bloque1 == true){
          contenido += "&nbsp;<i class='tiny material-icons'>filter_1</i>";
        }if (value.bloque2 == true){
          contenido += "&nbsp;<i class='tiny material-icons'>filter_2</i>";
        }if (value.bloque3 == true){
          contenido += "&nbsp;<i class='tiny material-icons'>filter_3</i>";
        }
        contenido += "<i>"+value.cuerpo+"</i></li>";
        lista.append(contenido);
      });
      if (data.contenido == ''){
        lista.append("<li class='collection-item'><i class='material-icons left'>local_library</i>Sin coincidencias</li>");
      }
      var paginacion = getPager(data.paginasAMostrar, data.paginaActual, data.cantidadPorPagina);
      $('.pagination').html('');
      if (paginacion.currentPage > 0){
        for (var i = 0; i < paginacion.pages.length; i++) {
          $('.pagination').append("<li id=p"+paginacion.pages[i]+"><a href='#!' class='pagination-item'>"+paginacion.pages[i]+"</a></li>");
        }
      }
      $('.pagination-item').click(function(){
        cargarData(controller, $(this).html(), $("#cantidadRegistros").val(), $('#buscar').val());
      });
      $("#p"+paginacion.currentPage).addClass('active');
    }).always(function(){ });
}
  $(document).ready(function(){
    var controller = "<?php echo RUTA_URL.'/content/'?>";
    cargarData(controller, 1, $("#cantidadRegistros").val(), '');
    $('#buscar').keyup(function(){
      cargarData(controller, 1, $("#cantidadRegistros").val(), $('#buscar').val());
    });
    $("#cantidadRegistros").change(function(){
      cargarData(controller, 1, $("#cantidadRegistros").val(), $('#buscar').val());
    });
    $('.botonesBorrar').click(function(){
      console.log("borrando");
      var id = this.name;
      $('#buttonDelete').prop({
        href: '<?php echo RUTA_URL?>/content/delete/'+id
      });
    });
  });
</script>