$('document').on("click","#salvar",function(e){
    e.preventDefault();
    $.ajax({
        url: 'http://localhost/Treinamento/cadastrar.php',
        type: 'POST',
        dataType: 'json',
        data: {
                decricao         : $("#descricao").val(),
                placa            : $("#placa").val(),
                codigoRenavam    : $("#codigoRenavam").val(),
                anoModelo        : $("#anoModelo").val(),
                anoFabricacao    : $("#anoFabricacao").val(),
                cor              : $("#cor").val(),
                km               : $("#km").val(),
                marca            : $("#marca").val(),
                preco            : $("#preco").val(),
                precoFipe        : $("#precoFipe").val(),
                arCondicionado   : $("#arCondicionado").val(),
                airBag           : $("#airBag").val(),
                cdPlayer         : $("#cdPlayer").val(),
                direcaoHidraulica: $("#direcaoHidraulica").val(),
                vidroEletrico    : $("#vridroEletrico").val(),
                travaEletrica    : $("#travaEletrica").val(),
                cambioAutomatico : $("#cambioAutomatico").val(),
                rodasLiga        : $("#rodasLiga").val(),
                alarme           : $("#alarme").val(),
        },
        beforeSend: function(){

        }
    });
});

$('document').on("click","#atualizar",function(e){
    e.preventDefault();
    $.ajax({
        url: 'http://localhost/Treinamento/editar.php',
        type: 'POST',
        dataType: 'json',
        data: {
                decricao         : $("#descricao").val(),
                placa            : $("#placa").val(),
                codigoRenavam    : $("#codigoRenavam").val(),
                anoModelo        : $("#anoModelo").val(),
                anoFabricacao    : $("#anoFabricacao").val(),
                cor              : $("#cor").val(),
                km               : $("#km").val(),
                marca            : $("#marca").val(),
                preco            : $("#preco").val(),
                precoFipe        : $("#precoFipe").val(),
                arCondicionado   : $("#arCondicionado").val(),
                airBag           : $("#airBag").val(),
                cdPlayer         : $("#cdPlayer").val(),
                direcaoHidraulica: $("#direcaoHidraulica").val(),
                vidroEletrico    : $("#vridroEletrico").val(),
                travaEletrica    : $("#travaEletrica").val(),
                cambioAutomatico : $("#cambioAutomatico").val(),
                rodasLiga        : $("#rodasLiga").val(),
                alarme           : $("#alarme").val(),
        }
    });
});

function validaDados(data){
    var data = document.getElementById
}