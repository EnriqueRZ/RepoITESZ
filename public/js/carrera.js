$(function() {
    $('#princi').ready(function(e){
        $.get('allCarrera',function(data) {
            $('#carreras').empty();
            $.each(data, function(fetch, carrera){
                console.log(carrera);
                var url = 'http://localhost/destroyC/'+carrera.id;
                var download = 'http://localhost/downloadPlan/'+carrera.plan_estudios;
                var edit = 'http://localhost/editC/'+carrera.id;
                $('#carreras').append('<tr>'+
                                    '<td>'+carrera.id+'</td>'+
                                    '<td>'+carrera.nombre+'</td>'+
                                    '<td><a href=\"'+download+'\">'+carrera.plan_estudios+'</a></td>'+
                                    '<td>'+carrera.cantidad_semestre+'</td>'+
                                    '<td>'+
                                        '<a class="btn btn-primary" id="n" href=\"'+edit+'\">'+
                                            'EDITAR'+
                                        '</a>'+
                                    '</td>'+
                                '<td><a class="btn btn-danger" id="n" onclick="return confirmar()"'+
                                            'href=\"'+url+'\"> <span aria-hidden="true" class="glyphicon glyphicon-trash"> </span>'+
                                            'ELIMINAR</a>'+
                                '</td>'+
                                '</tr>');
            })
        });
    });
});