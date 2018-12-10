$(document).ready(function(){
    $('.tooltipped').tooltip();
    $('.modal').modal();
});
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