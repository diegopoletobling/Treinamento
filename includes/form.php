<main>
    <h2 class="mt-3"><?=TITLE?></h2>
    <form method="POST" action="cadastrar.php">
        <div class="row">
            <div class="col-md-8">
                <label for="inputemail">Descrição</label>
                <textarea class="form-control" name="descricao" value="<?=$obcarro->descricao?>"><?=$obcarro->descricao?></textarea>
            </div>
            <div class="col-md-2">
                <label for="inputplaca">Placa</label>
                <input type="text" class="form-control" name="placa" id="inputplaca" value="<?=$obcarro->placa?>" minlength="7" maxlength="7" placeholder="Placa: ">
            </div>
            <div class="col-md-2">
                <label for="inputcodigo">Código RENAVAM</label>
                <input type="text" class="form-control" name="codigoRenavam" id="inpucodigo" value="<?=$obcarro->codigoRenavam?>" maxlength="11" placeholder="Código RENAVAM: ">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-2">
                <label for="inputanoModelo">Ano modelo</label>
                <input type="number" class="form-control" min="1900" name="anoModelo" id="inputanoModelo" value="<?=$obcarro->anoModelo?>" minlength="4" maxlength="4" placeholder="Ano: ">
            </div>
            <div class="col-md-2">
                <label for="inputanoFabricacao">Ano fabricação</label>
                <input type="number" class="form-control" min="1900" name="anoFabricacao" id="inputanoFabricacao" value="<?=$obcarro->anoFabricacao?>" minlength="4" maxlength="4" placeholder="Ano: ">
            </div>
            <div class="col-md-2">
                <label for="inputcor">Cor</label>
                <input type="text" class="form-control" name="cor" id="inputcor" value="<?=$obcarro->cor?>" maxlength="20" placeholder="Cor: ">
            </div>
            <div class="col-md-2">
                <label for="inputkm">KM</label>
                <input type="number" class="form-control" name="km" id="inputkm" value="<?=$obcarro->km?>" maxlength="6" placeholder="Kilometragem: ">
            </div>
            <div class="col-md-2">
                <label for="inputmarca">Marca</label>
                <input type="text" class="form-control" name="marca" id="inputmarca" value="<?=$obcarro->marca?>" maxlength="20" placeholder="Cor: ">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-2">
                <label for="inputpreco">Preço</label>
                <input type="number" class="form-control" name="preco" id="inputpreco" value="<?=$obcarro->preco?>" min="0.00" step="0.01" maxlength="8" placeholder="Preço: ">
            </div>
            <div class="col-md-2">
                <label for="inputcodigo">Preço FIPE</label>
                <input type="number" class="form-control" name="precoFipe" id="inputprecoFIPE" value="<?=$obcarro->precoFipe?>" min="0.00" step="0.01" maxlength="8" placeholder="Preço FIPE: ">
            </div>
        </div>

    <h2 class="mt-4">Componentes adicionais</h2>
    <div class="container mt-4">
            <div class="form-check-inline">
                <label class="form-check-label" for="check1">
                <input type="checkbox" class="form-check-input" id="check1" name="arCondicionado" value="<?php echo intval(1);?>"> Ar Condionado
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="check2">
                <input type="checkbox" class="form-check-input" id="check2" name="airBag" value="<?php echo intval(1);?>"> Air Bag
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="check3">
                <input type="checkbox" class="form-check-input" id="check3" name="cdPlayer" value="<?php echo intval(1); ?>"> CD Player
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="check4">
                <input type="checkbox" class="form-check-input" id="check4" name="direcaoHidraulica" value="<?php echo intval(1);?>"> Direção Hidráulica
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="check5">
                <input type="checkbox" class="form-check-input" id="check5" name="vidroEletrico" value="<?php echo intval(1);?>"> Vidro Elétrico
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="check6">
                <input type="checkbox" class="form-check-input" id="check6" name="travaEletrica" value="<?php echo intval(1);?>"> Trava Elétrica
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="check7">
                <input type="checkbox" class="form-check-input" id="check7" name="cambioAutomatico" value="<?php echo intval(1);?>"> Câmbio Automático
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="check8">
                <input type="checkbox" class="form-check-input" id="check8" name="rodasLiga" value="<?php echo intval(1);?>"> Rodas de liga
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="check9">
                <input type="checkbox" class="form-check-input" id="check9" name="alarme" value="<?php echo intval(1);?>"> Alarme
            </div>
    </div>

    <section>
        <a href="index.php">
            <button class="btn btn-success mt-4">Voltar</button>
        </a>
            <div class="">
                <button type="submit" class="btn btn-success mt-4">Salvar</button>
            </div>
    </section>
    </form>
</main>