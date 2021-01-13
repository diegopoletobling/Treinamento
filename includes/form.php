<main>
    <h2 class="mt-3">Dados cadastrais</h2>
    <form method="POST">
        <div class="row">
            <div class="col-md-8">
                <label for="inputemail">Descrição</label>
                <input type="text" class="form-control" name="Descricao" id="inputemail" maxlength="60" placeholder="Descrição: ">
            </div>
            <div class="col-md-2">
                <label for="inputplaca">Placa</label>
                <input type="text" class="form-control" name="Placa" id="inputplaca" minlength="7" maxlength="7" placeholder="Placa: ">
            </div>
            <div class="col-md-2">
                <label for="inputcodigo">Código RENAVAM</label>
                <input type="text" class="form-control" name="Codigo" id="inpucodigo" maxlength="11" placeholder="Código RENAVAM: ">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <label for="inputanoModelo">Ano modelo</label>
                <input type="number" class="form-control" name="anoModelo" id="inputanoModelo" minlength="4" maxlength="4" placeholder="Ano: ">
            </div>
            <div class="col-md-2">
                <label for="inputanoFabricacao">Ano fabricação</label>
                <input type="number" class="form-control" name="anoFabricacao" id="inputanoFabricacao" minlength="4" maxlength="4" placeholder="Ano: ">
            </div>
            <div class="col-md-2">
                <label for="inputcor">Cor</label>
                <input type="text" class="form-control" name="Cor" id="inputcor" maxlength="20" placeholder="Cor: ">
            </div>
            <div class="col-md-2">
                <label for="inputkm">KM</label>
                <input type="number" class="form-control" name="Km" id="inputkm" maxlength="6" placeholder="Kilometragem: ">
            </div>
            <div class="col-md-2">
                <label for="inputmarca">Cor</label>
                <input type="text" class="form-control" name="Marcaa" id="inputmarca" maxlength="20" placeholder="Cor: ">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <label for="inputpreco">Preço</label>
                <input type="number" class="form-control" name="Preco" id="inputpreco" min="0.00" step="0.01" maxlength="8" placeholder="Preço: ">
            </div>
            <div class="col-md-2">
                <label for="inputcodigo">Preço FIPE</label>
                <input type="number" class="form-control" name="precoFIPE" id="inputprecoFIPE" min="0.00" step="0.01" maxlength="8" placeholder="Preço FIPE: ">
            </div>
        </div>
    </form>
    <h2 class="mt-4">Componentes adicionais</h2>
    <div class="container">
        <form action="/action_page.php">
            <div class="form-check-inline">
                <label class="form-check-label" for="check1">
                <input type="checkbox" class="form-check-input" id="check1"> Ar Condionado
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="check2">
                <input type="checkbox" class="form-check-input" id="check2"> Air Bag
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="check3">
                <input type="checkbox" class="form-check-input" id="check3"> CD Player
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="check4">
                <input type="checkbox" class="form-check-input" id="check4"> Direção Hidráulica
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="check5">
                <input type="checkbox" class="form-check-input" id="check5"> Vidro Elétrico
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="check6">
                <input type="checkbox" class="form-check-input" id="check6"> Trava Elétrica
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="check7">
                <input type="checkbox" class="form-check-input" id="check7"> Câmbio Automático
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="check8">
                <input type="checkbox" class="form-check-input" id="check8"> Rodas de liga
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="check9">
                <input type="checkbox" class="form-check-input" id="check9"> Alarme
            </div>
        </form>
    </div>

    <section>
        <a href="index.php">
            <button class="btn btn-success mt-4">Salvar</button>
            <button class="btn btn-success mt-4">Voltar</button>
        </a>
    </section>

</main>