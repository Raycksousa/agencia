<?php
    include $_SERVER['DOCUMENT_ROOT'].'/agencia/app/db/conexao.php';
    $ano_codigo = $_GET['ano_codigo'];
    $query = $conexao->query("SELECT ANO_CODIGO, ANO_ANO FROM TB_ANO WHERE ANO_CODIGO = {$ano_codigo}");
    $cor = $query->fetch(PDO::FETCH_ASSOC);
?>

<form action="/agencia/app/funcoes/ano veiculo/editar.php" method="post">
    <div class="card">
        <div class="card-header">
            Editar ano
        </div>
        <div class="card-body">
            <input type="hidden" value="<?php echo $ano['ANO_CODIGO']?>" name="ano_codigo">

            <label for="ano_ano">Ano do veiculo</label>
            <input type="text" value="<?php echo $ano['ANO_ANO']; ?>" class="form-control" name="ano_ano" autofocus> 
        </div>
        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Editar">
        </div>
    </div>
</form>