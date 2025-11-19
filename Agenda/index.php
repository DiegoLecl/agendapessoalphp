<?php 
include("conexao.php");
include("funcoes.php"); 
$grupo = selectAllPessoa();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agenda</title>
    <link rel="stylesheet" href="css/layout.css">
</head>
<body>

<div class="container">
<<<<<<< HEAD
    <div class="header">
        <h1>Agenda de Contatos</h1>
    </div>
=======
    <body>
     <div class="posicionarCabecalho">
          <h1>Agenda Pessoal</h1>
      </div>
      <table border="1" class="table">
          <thead class="thead-light">
              <tr>
                  <th>Nome</th>
                  <th>Nascimento</th>
                  <th>Telefone</th>
                  <th>Endereço</th>
                  <th>Edita</th>
                  <th>Excluir</th>
              </tr>
          </thead>
          <tbody>
             <?php 
                foreach($grupo as $pessoa) { ?>
>>>>>>> cbbd63cef741fe075b9f819d76dfec65734e61c0

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach($grupo as $pessoa) { ?>
            <tr>
                <td><?= $pessoa["nome"] ?></td>
                <td><?= formatoData($pessoa["nascimento"]) ?></td>
                <td><?= $pessoa["telefone"] ?></td>
                <td><?= $pessoa["endereco"] ?></td>

                <td>
                    <form action="alterar.php" method="post">
                        <input type="hidden" name="id" value="<?= $pessoa["id"] ?>">
                        <button class="btn btn-edit">Editar</button>
                    </form>
                </td>

                <td>
                    <form action="conexao.php" method="post">
                        <input type="hidden" name="id" value="<?= $pessoa["id"] ?>">
                        <input type="hidden" name="acao" value="excluir">
                        <button class="btn btn-delete">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <br>

    <a href="inserir.php" class="btn-add">Adicionar Pessoa</a>
</div>

</body>
</html>