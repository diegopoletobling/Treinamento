<?php

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
                            <a href="editar.php?id='.$carro->id.'">
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
    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success mt-2">Novo Carro</button>
        </a>
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