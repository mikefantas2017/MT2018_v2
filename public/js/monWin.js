/**
 * Mon Tool v2.
 * Marzo, 2018.
 * Funciones para la vista "monWindow".
 */

/*var pVw = $('#panelView')[0].clientWidth;
var pVh = $('#panelView')[0].clientHeight;*/

$(function(){
    // jQuery select2.
    $('#selectStruct').select2({
        placeholder: 'Seleccione un modelo',
        minimumInputLength: 0,
        allowClear: true,
        ajax:{
            url: 'buscarModelo',
            dataType: 'json',
            type: 'GET',
            delay: 250,
            data: function(params){
                return {
                    q: params.term,
                    page: params.page
                }
            },
            processResults: function(data){
                return {
                    results: $.map(data, function(item){
                        return {
                            id: item.id,
                            text: item.text,
                            data: item
                        }
                    })
                };
            },
            cache: true,
            width: 'resolve'
        },
        width: '75%'
    });

    // Evento de selección de select2.
    $('#selectStruct').on('select2:select', function (e) {
        $('#displayPanel').empty();
        $('#displayPanel').load('displayPanel');
    });

    // Evento de deselección de select2.
    $('#selectStruct').on('select2:unselect', function (e) {
        $('#displayPanel').empty();
        $('#displayPanel').load('noDisplayPanel');
    });
});