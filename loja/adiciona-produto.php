<?php include("cabecalho.php") ?>
  <?php
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
  ?>
  <h1>
    <p class="alert-success">
        Produto <?= $nome; ?>, de valor R$<?= $preco; ?> adicionado com sucesso!
    </p>
  </h1>  
<?php include("rodape.php") ?>
