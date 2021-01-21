$('document').on("click","#salvar",function(e) {
    e.preventDefault();
    $.ajax({
        url: 'http://localhost/Treinamento/cadastrar.php',
        type: 'POST',
        dataType: 'json',
        data: {
                decricao : $("#descricao").val(),
                placa : $("#placa").val(),
                codigoRenavam : $("#codigoRenavam").val(),
                anoModelo : $("#anoModelo").val(),
                anoFabricacao : $("#anoFabricacao").val(),
                cor : $("#cor").val(),
                km : $("#km").val(),
                marca : $("#marca").val(),
                preco : $("#preco").val(),
                precoFipe : $("#precoFipe").val(),
                arCondicionado : $("#arCondicionado").prop('checked') == true ? 1 : 0,
                airBag : $("#airBag").prop('checked') == true ? 1 : 0,
                cdPlayer : $("#cdPlayer").prop('checked') == true ? 1 : 0,
                direcaoHidraulica : $("#direcaoHidraulica").prop('checked') == true ? 1 : 0,
                vidroEletrico : $("#vridroEletrico").prop('checked') == true ? 1 : 0,
                travaEletrica : $("#travaEletrica").prop('checked') == true ? 1 : 0,
                cambioAutomatico : $("#cambioAutomatico").prop('checked') == true ? 1 : 0,
                rodasLiga : $("#rodasLiga").prop('checked') == true ? 1 : 0,
                alarme : $("#alarme").prop('checked') == true ? 1 : 0,
        }
    });
});

// function validar(){
//     let descricao = document.forms['meuform']['descricao'].value;

//     let msg_erro = '';
//     let go = true;

//     if(descricao == ''){
//         msg_erro = 'O campo descrição precisa ser preenchido!';
//         avancar = false;
//     }
//     if(avancar == false){
//         document.getElementById('erro').innerHTML = msg_erro;
//     }
//     return avancar;
// }