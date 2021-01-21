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
                alarme           : $("#alarme").prop('checked') == true ? 1 : 0,

        },
        success : function(response){
            console.log(response);
            $.val(response.alarme).prop()
        }
    });
});
/*
$('document').on("click","#editar",function(e){
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
}*/

function validar(){
    let descricao = document.forms['meuform']['descricao'].value;

    let msg_erro = '';
    let go = true;

    if(descricao == ''){
        msg_erro = 'O campo descrição precisa ser preenchido!';
        avancar = false;
    }
    if(avancar == false){
        document.getElementById('erro').innerHTML = msg_erro;
    }
    return avancar;
}