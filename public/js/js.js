$(document).ready(function(){
    $('.slider').slider({
        'height' : 710
    });
    $('.carousel').carousel();
    $('.materialboxed').materialbox();
    $('.parallax').parallax();
    $('.sidenav').sidenav();
    $('.tooltipped').tooltip();
    $('.dropdown-trigger').dropdown();
    $('select').formSelect();
    $('.modal').modal();
    $('.tabs').tabs();
    $('.fixed-action-btn').floatingActionButton();
    $('.collapsible').collapsible();

});

var redireccionar = function(){ 
    window.location = '<?php echo RUTA_URL?>/admin/categorias';
};

function formatoFecha(fechaRecibida){
    moment.locale('es');
    var fechaActual = new Date();
    var ano = fechaRecibida.slice(0, -14);
    var mes = fechaRecibida.slice(5, -12);
    var dia = fechaRecibida.slice(8, -9);

    // if (ano.localeCompare(fechaActual.getFullYear()) && mes.localeCompare(fechaActual.getMonth()) && dia.localeCompare(fechaActual.getDate())){
    //     document.write(moment().endOf(mes).fromNow());
    //     console.log("entro: " + moment().startOf('day').fromNow());
    // }else{
    //     console.log("no entro");
        document.write(moment(fechaRecibida, "YYYYMMDD").fromNow());
    // }
}
function getPager(totalItems, currentPage, pageSize) {
    // default to first page
    currentPage = currentPage || 1;
    // default page size is 10
    pageSize = pageSize || 10;
    // calculate total pages
    // var totalPages = Math.ceil(totalItems / pageSize);
    // var startPage, endPage;
    var totalPages = totalItems;
    var startPage = endPage = 0;
    if (totalPages <= 10) {
        // less than 10 total pages so show all
        startPage = 1;
        endPage = totalPages;
    } else {
        // more than 10 total pages so calculate start and end pages
        if (currentPage <= 6) {
            startPage = 1;
            endPage = 10;
        } else if (currentPage + 4 >= totalPages) {
            startPage = totalPages - 9;
            endPage = totalPages;
        } else {
            startPage = currentPage - 5;
            endPage = currentPage + 4;
        }
    }
    // calculate start and end item indexes
    var startIndex = (currentPage - 1) * pageSize;
    var endIndex = Math.min(startIndex + pageSize - 1, totalItems - 1);

    // create an array of pages to ng-repeat in the pager control
    //var pages = _.range(startPage, endPage + 1);
    var pages = [];
    for (var i = startPage; i <= endPage; i++) {
        pages.push(i);
    }
    // return object with all pager properties required by the view
    return {
        totalItems: totalItems,
        currentPage: currentPage,
        pageSize: pageSize,
        totalPages: totalPages,
        startPage: startPage,
        endPage: endPage,
        startIndex: startIndex,
        endIndex: endIndex,
        pages: pages
    };
}
function url(url){
    // url = replace(['á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'],
    //     ['a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'],
    //     url
    // );
    // url = replace(
    //     array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
    //     array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
    //     url );
    // url = replace(
    //     array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
    //     array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
    //     url );
    // url = replace(
    //     array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
    //     array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
    //     url );
    // url = replace(
    //     array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
    //     array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
    //     url );
    // url = replace(
    //     array('ñ', 'Ñ', 'ç', 'Ç'),
    //     array('n', 'N', 'c', 'C'),
    //     url
    // );
    const regex = / /gi;
    url = url.replace(regex, '_');
    // .toLowerCase().replace("/[^a-zA-Z0-9\_\-\.\,\:]+/", "");
    return url;
}
function eliminar(url){
    $('#buttonDelete').prop({
        href: url
    });
}