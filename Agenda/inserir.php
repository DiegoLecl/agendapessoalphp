<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Pessoa</title>
    <link rel="stylesheet" href="css/layout.css">
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Adicionar Pessoa</h1>
    </div>

    <div class="form-card">
        <form action="conexao.php" method="post">

            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome">
            </div>

            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="date" name="nascimento">
            </div>

            <div class="form-group">
                <label>Telefone</label>
                <input type="text" name="telefone">
            </div>

            <div class="form-group">
                <label>Endereço</label>
                <input type="text" name="endereco">
            </div>

            <input type="hidden" name="acao" value="inserir">
            <input type="submit" value="Salvar">
        </form>
    </div>
</div>

</body>
</html>