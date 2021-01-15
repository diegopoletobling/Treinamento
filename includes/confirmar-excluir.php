<main>
    <h2 class="mt-3">Excluir carro</h2>
    <form method="POST">
        <div class="form-group">
            <p>Você deseja realmente excluir esse veículo <strong><?=$obcarro->descricao?></strong>?</p>
        </div>

        <section>
            <a href="index.php">
                <button type="button" class="btn btn-success mt-4">Cancelar</button>
            </a>
            <button type="submit" name="excluir" class="btn btn-danger mt-4">Excluir</button>

        </section>
    </form>
</main>