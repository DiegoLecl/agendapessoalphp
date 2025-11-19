<?php 
include("conexao.php");
$pessoa = selectIdPessoa($_POST["id"]);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Pessoa</title>
    <link rel="stylesheet" href="css/layout.css">
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Editar Pessoa</h1>
    </div>

    <div class="form-card">
        <form action="conexao.php" method="post">

            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" value="<?= $pessoa["nome"] ?>">
            </div>

            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="date" name="nascimento" value="<?= $pessoa["nascimento"] ?>">
            </div>

            <div class="form-group">
                <label>Telefone</label>
                <input type="text" name="telefone" value="<?= $pessoa["telefone"] ?>">
            </div>

            <div class="form-group">
                <label>Endereço</label>
                <input type="text" name="endereco" value="<?= $pessoa["endereco"] ?>">
            </div>

            <input type="hidden" name="acao" value="alterar">
            <input type="hidden" name="id" value="<?= $pessoa["id"] ?>">

            <input type="submit" value="Salvar Alterações">

        </form>
    </div>
</div>

</body>
</html>