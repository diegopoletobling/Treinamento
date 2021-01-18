<?php

    $mesage = '';
    if(isset($_GET['status'])){
        switch ($_GET['status']) {
          case 'success':
            $mesage = '<div class="alert alert-success">Ação executada com sucesso!</div>';
            break;

          case 'error':
            $mesage = '<div class="alert alert-danger">Ação não executada!</div>';
            break;
        }
    }

    $result = '';
    foreach($carros as $carro){
        $result .= '<tr>
                        <td>'.$carro->id.'</td>
                        <td>'.$carro->descricao.'</td>
                        <td>'.$carro->placa.'</td>
                        <td>'.$carro->anoModelo.'</td>
                        <td>'.$carro->preco.'</td>
                        <td>
                            <a href="editar.php?id='.$carro->id.'">
                                <button type="button" class="btn btn-primary">Editar</button>
                            </a>
                            <a href="excluir.php?id='.$carro->id.'">
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </a>
                        </td>
                    </tr>';
    }

    $result = strlen($result) ? $result: '<tr>
                                            <td colspan="6" class="text-center">
                                                Nenhuma vaga encontrada!
                                            </td>
                                          </tr>';
?>

<main>
    <?=$mesage?>
    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success mt-2">Novo Carro</button>
        </a>
    </section>

    <section>
        <form method="get">
            <div class="row my-4">
                <div class="col">
                    <label>Buscar por nome</label>
                    <input type="text" name="busca" class="form-control" value="<?=$busca?>">
                </div>
                <div class="col">
                    <label>Opcionais</label>
                    <select name="opcionais" class="form-control">
                        <option value="<?php echo intval(1);?>">Ar Condicionado</option>
                        <option value="<?php echo intval(1);?>">Air Bag</option>
                        <option value="<?php echo intval(1);?>">CD Player</option>
                        <option value="<?php echo intval(1);?>">Direção Hidráulica</option>
                        <option value="<?php echo intval(1);?>">Vidro Elétrico</option>
                        <option value="<?php echo intval(1);?>">Trava Elétrica</option>
                        <option value="<?php echo intval(1);?>">Câmbio Automático</option>
                        <option value="<?php echo intval(1);?>">Rodas de Liga Leve</option>
                        <option value="<?php echo intval(1);?>">Alarme</option>
                    </select>
                </div>
                <div class="col d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">Filtar</button>
                </div>
            </div>
        </form>
    </section>

    <section>
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Placa</th>
                    <th>Ano do Modelo</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?=$result?>
            </tbody>

        </table>
    </section>
</main>