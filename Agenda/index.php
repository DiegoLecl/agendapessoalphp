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

                   <tr>
                      <th><?=$pessoa["nome"]?></th>
                      <th><?=formatoData($pessoa["nascimento"])?></th>
                      <th><?=$pessoa["telefone"]?></th>
                      <th><?=$pessoa["endereco"]?></th>
                      <th>
                          <form name="alterar" action="alterar.php" method="post">
                              <input type="hidden" name="id" value="<?=$pessoa["id"]?>">
                              <input type="submit" name="editar" value="Editar">
                          </form>
                      </th>
                      <th>
                          <form name="excluir" action="conexao.php" method="post">
                              <input type="hidden" name="id" value="<?=$pessoa["id"]?>">
                              <input type="hidden" name="acao" value="excluir">
                              <input type="submit" name="excluit" value="Excluir">
                          </form>
                      </th>
                  </tr>   
                <?php }
              ?>
          </tbody>
     </table>
      <div class="text-center">
           <button type="button" class="btn btn-primary"><a href="inserir.php">Adicionar pessoa</a></button>
      </div>
       <?php
            
            function formatoData($data) {
                $array = explode("-", $data);
                $novaData = $array[2]."/".$array[1]."/".$array[0];
                return $novaData;
            }

        ?>
    </body>
</div>

</body>
</html>