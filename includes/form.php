<main>
    <h2 class="mt-3"><?=TITLE?></h2>
    <a href="index.php">
            <button class="btn btn-success mt-4">Voltar</button>
        </a>
    <form method="POST" action="cadastrar.php" nome="meuform" id="form1" onsubmit="return validar()">
        <div class="row">
            <div class="col-md-8">
                <label for="inputemail">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" value="<?=$obcarro->descricao?>" required><?=$obcarro->descricao?></textarea>
            </div>
            <div class="col-md-2">
                <label for="inputplaca">Placa</label>
                <input type="text" class="form-control" name="placa" id="placa" value="<?=$obcarro->placa?>" minlength="7" maxlength="7" placeholder="Placa: " required>
            </div>
            <div class="col-md-2">
                <label for="inputcodigo">Código RENAVAM</label>
                <input type="text" class="form-control" name="codigoRenavam" id="codigoRenavam" value="<?=$obcarro->codigoRenavam?>" maxlength="11" placeholder="Código RENAVAM: " required>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-2">
                <label for="inputanoModelo">Ano modelo</label>
                <input type="number" class="form-control" min="1900" name="anoModelo" id="anoModelo" value="<?=$obcarro->anoModelo?>" minlength="4" maxlength="4" placeholder="Ano: " required>
            </div>
            <div class="col-md-2">
                <label for="inputanoFabricacao">Ano fabricação</label>
                <input type="number" class="form-control" min="1900" name="anoFabricacao" id="anoFabricacao" value="<?=$obcarro->anoFabricacao?>" minlength="4" maxlength="4" placeholder="Ano: " required>
            </div>
            <div class="col-md-2">
                <label for="inputcor">Cor</label>
                <input type="text" class="form-control" name="cor" id="cor" value="<?=$obcarro->cor?>" maxlength="20" placeholder="Cor: " required>
            </div>
            <div class="col-md-2">
                <label for="inputkm">KM</label>
                <input type="number" class="form-control" name="km" id="km" value="<?=$obcarro->km?>" maxlength="6" placeholder="Kilometragem: " required>
            </div>
            <div class="col-md-2">
                <label for="inputmarca">Marca</label>
                <input type="text" class="form-control" name="marca" id="marca" value="<?=$obcarro->marca?>" maxlength="20" placeholder="Cor: " required>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-2">
                <label for="inputpreco">Preço</label>
                <input type="number" class="form-control" name="preco" id="preco" value="<?=$obcarro->preco?>" min="0.00" step="0.01" maxlength="8" placeholder="Preço: " required>
            </div>
            <div class="col-md-2">
                <label for="inputcodigo">Preço FIPE</label>
                <input type="number" class="form-control" name="precoFipe" id="precoFipe" value="<?=$obcarro->precoFipe?>" min="0.00" step="0.01" maxlength="8" placeholder="Preço FIPE: " required>
            </div>
        </div>

    <h2 class="mt-4">Componentes adicionais</h2>
    <div class="container mt-4">
            <div class="form-check-inline">
                <label class="form-check-label" for="arCondicionado">
                <input type="checkbox" class="form-check-input" id="carCondicionado" name="arCondicionado" value="<?php echo intval(1);?>"> Ar Condionado
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="airBag">
                <input type="checkbox" class="form-check-input" id="airBag" name="airBag" value="<?php echo intval(1);?>"> Air Bag
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="cdPlayer">
                <input type="checkbox" class="form-check-input" id="cdPlayer" name="cdPlayer" value="<?php echo intval(1); ?>"> CD Player
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="direcaoHidraulica">
                <input type="checkbox" class="form-check-input" id="direcaoHidraulica" name="direcaoHidraulica" value="<?php echo intval(1);?>"> Direção Hidráulica
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="vidroEletrico">
                <input type="checkbox" class="form-check-input" id="vidroEletrico" name="vidroEletrico" value="<?php echo intval(1);?>"> Vidro Elétrico
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="travaEletrica">
                <input type="checkbox" class="form-check-input" id="travaEletrica" name="travaEletrica" value="<?php echo intval(1);?>"> Trava Elétrica
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="cambioAutomatico">
                <input type="checkbox" class="form-check-input" id="cambioAutomatico" name="cambioAutomatico" value="<?php echo intval(1);?>"> Câmbio Automático
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="rodasLiga">
                <input type="checkbox" class="form-check-input" id="rodasLiga" name="rodasLiga" value="<?php echo intval(1);?>"> Rodas de liga
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="alarme">
                <input type="checkbox" class="form-check-input" id="alarme" name="alarme" "> Alarme
            </div>
    </div>

    <section>
            <div class="">
                <button type="submit" id="salvar" class="btn btn-success mt-4">Salvar</button>
            </div>
    </section>
    </form>
    <div><small style="color: red;" id="erro"></small></div>
    <script src="js/jquery-3.5.1.min.js"></script>

</main>