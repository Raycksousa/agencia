<?php
    include $_SERVER['DOCUMENT_ROOT'].'/locadora/app/db/conexao.php';
    $query = $conexao->query("SELECT ANO_CODIGO, ANO_ANO FROM TB_ANO");
?>

<div class="card">
    <div class="card-header">
        Cadastro de ano
    </div>
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>ano</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while($ano = $query->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                    <td>
                        <?php echo $ano['ANO_CODIGO']; ?>
                    </td>
                    <td>
                        <?php echo $ano['ANO_ANO']; ?>
                    </td>
                    <td>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/ano/exclusao.php&ano_codigo={$ano['ANO_CODIGO']}"; ?> class="btn btn-danger btn-sm">Excluir</a>
                        <a href=<?php echo "/locadora/?pagina=app/paginas/ano/edicao.php&ano_codigo={$ano['ANO_CODIGO']}"; ?> class="btn btn-primary btn-sm">Editar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="card-footer">
        <a href=<?php echo "/locadora/?pagina=app/paginas/ano/cadastro.php"; ?> class="btn btn-primary btn-sm">Cadastrar nova cor</a>
    </div>
</div>