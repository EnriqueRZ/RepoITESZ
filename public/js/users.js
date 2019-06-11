/*
$(function() {
    $('#id_carrera').on('change', function(e){
        //console.log(e);
        var id = e.target.value;
        
        $.get("bySemestre/"+id,function(data) {
          $('#id_materia').empty();
            document.getElementById("id_semestre").options.length = 0;
          $.each(data, function(fetch, obj){
            
            for (var i = 1; i <= obj.cantidad_semestre; i++) {
                //console.log(i);
                if(i == 1){
                    $('#id_semestre').append('<option value="'+i+'" selected>'+i+'</option>');
                }else {
                    $('#id_semestre').append('<option value="'+i+'">'+i+'</option>');
                }
            }
                
           
          })
        });
      });
});
*/

$(function() {
    $('#princi').ready(function(e){
        $.get('allUsuarios',function(data) {
            $('#usuarios').empty();
            $.each(data, function(fetch, user){
                console.log(user);
                var url = 'http://localhost/destroyU/'+user.id;
                var url2 = 'http://localhost/edit/'+user.id;
                $('#usuarios').append('<tr>'+
                                    '<td>'+user.id+'</td>'+
                                    '<td>'+user.nombre+'</td>'+
                                    '<td>'+user.email+'</td>'+
                                    '<td>'+user.nombre_tipo_usuario+'</td>'+
                                    '<td>'+user.cname+'</td>'+
                                    '<td>'+
                                        '<a class="btn btn-primary" id="n" href=\"'+url2+'\">'+
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


$(function() {
    $('#princi').ready(function(e){
        $.get("byTipoUser",function(data) {
            $('#id_tipo').empty();
            $.each(data, function(fetch, obj){
            
            $('#id_tipo').append('<option value="'+ obj.id +'">'+ obj.nombre_tipo_usuario +'</option>');
            
            })
        });
    });
});

$(function() {
    $('#edit').ready(function(e){
        $.get("byTipoUser",function(data) {
            $('#id_tipo').empty();
            $.each(data, function(fetch, obj){
            
            $('#id_tipo').append('<option value="'+ obj.id +'">'+ obj.nombre_tipo_usuario +'</option>');
            
            })
        });
    });
});

$(function() {
    $('#id_carrera, #id_tipo').on('change', function(e){
        //$('#usuarios').remove();
        var id_se = document.getElementById("id_carrera").value;
        var tipo_us = document.getElementById("id_tipo").value;
        $.get("filtroUsuarios/"+id_se+"/"+tipo_us, function(data) {
            $('#usuarios').empty();
            $.each(data, function(fetch, user){
                console.log(user);
                var url = 'http://localhost/destroyU/'+user.id;
                var url2 = 'http://localhost/edit/'+user.id;
                $('#usuarios').append('<tr>'+
                                    '<td>'+user.id+'</td>'+
                                    '<td>'+user.nombre+'</td>'+
                                    '<td>'+user.email+'</td>'+
                                    '<td>'+user.nombre_tipo_usuario+'</td>'+
                                    '<td>'+user.cname+'</td>'+
                                    '<td>'+
                                        '<a class="btn btn-primary" id="n" href=\"'+url2+'\">'+
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

/*
$(function() {
    $('#id_carrera, #id_tipo').on('change', function(e){
        //console.log(e);
        var id_se = document.getElementById("id_carrera").value;
        var tipo_us = document.getElementById("id_tipo").value;
        $.get("filtroUsuarios/"+id_se+"/"+tipo_us, function(data) {
            $('#usuarios').remove();
            $('#tabla').reload;
            $.each(JSON.parse(data), function(fetch, usuarios){
                console.log(usuarios);
                $('#tabla').append(usuarios);
            })
        });
    });
});
*/
