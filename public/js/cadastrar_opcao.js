$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(function () {
    $('#cadastrar_solicitante').on('click', function () {
        $("#solicitante-modal").modal();
        $('.js-cidade-modal').val($('#cidade').val()); // Select the option with a value of '1'
        $('.js-cidade-modal').trigger('change');
    });

    $('#cadastro_solicitante').on('click', function () {
        var nome2 = $('#nome_solicitante').val();
        var cidade_id2 = $("#cidade2").val();

        if (nome2.length < 8) {
            swal.fire({
                type: 'error',
                title: 'Erro!',
                text: 'O nome do órgão solicitante deve ter ao menos 8 caracteres!'
            });
        } else {
            $.ajax({
                url: "/solicitantes/",
                type: "POST",
                data: {
                    "nome": nome2,
                    "cidade_id": cidade_id2,
                },
                success: function (data) {
                    $('#solicitante-modal').modal('hide');
                    $('#nome_solicitante').val('');
                    $('#solicitante_id').append($('<option>', {
                        value: data.id,
                        text: data.nome
                    }));
                    $("#solicitante_id").val(data.id);
                },
                error: function () {
                    swal.fire('Existem erros no formulário!')
                }
            });
        }
    });
    // /*---------------------------------------------------------*/
    var marca = $('#marca');
    $('#cadastrar_marca').on('click', function () {
        $("#marca-modal").modal();
    });

    $('#cadastroMarca').on('click', function () {
        var nome_marca = $('#nome').val();
        var categoria = $("#categoria").val();

        $.ajax({
            url: "/marcas",
            type: "POST",
            data: { 'nome': nome_marca, 'categoria': categoria },
            success: function (data) {
                $('#marca-modal').modal('hide');
                marca.append($('<option>', {
                    value: data.id,
                    text: data.nome
                }));
                marca.val(data.id);
            }
        });
    });

    /*-------------------------------------------------------*/
    var calibre = $('#calibre');
    $('#cadastrar_calibre').on('click', function () {
        $("#calibre-modal").modal();
    });

    $('#cadastroCalibre').on('click', function () {
        var nome_calibre = $('#nome_calibre').val();
        var tipo = $("#tipo_arma").val();
        $.ajax({
            url: "/calibres/",
            type: "POST",
            data: {
                "nome": nome_calibre,
                "tipo_arma": tipo,
            },
            success: function (data) {
                $('#calibre-modal').modal('hide');
                calibre.append($('<option>', {
                    value: data.id,
                    text: data.nome
                }));
                calibre.val(data.id);
            }
        });
    });
    /*------------------------------------------------------------*/

    var pais = $('#pais');
    $('#cadastrar_pais').on('click', function () {
        $("#pais-modal").modal();
    });

    $('#cadastroPais').on('click', function () {
        var nome_pais = $('#nome_pais').val();
        var fabricacao = $("#fabricacao").val();
        $.ajax({
            url: "/origens/",
            type: "POST",
            data: {
                "nome": nome_pais,
                "fabricacao": fabricacao,
            },
            success: function (data) {
                $('#pais-modal').modal('hide');
                pais.append($('<option>', {
                    value: data.data.id,
                    text: data.data.nome
                }));
                pais.val(data.data.id);
            }
        });
    });
});
