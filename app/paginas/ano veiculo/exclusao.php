<div class="card">
    <div class="card-body">
        <h4 class="card-title">Excluir ano</h4>
        <p class="card-text">Deseja realmente excluir este ano?</p>
        <form action="/locadora/app/funcoes/ano/excluir.php" method="post">
            <input type="hidden" value="<?php echo $_GET['ano_codigo']?>" name="ano_codigo">
            <input type="submit" class="btn btn-danger" value="Excluir">
        </form>
    </div>
</div>