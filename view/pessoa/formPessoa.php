<?php require_once("./include/header.php"); ?>
<div class="container">
  <h1 class="mt-5 mb-5">Formulário</h1>

  <form action="<?= $action ?>" method="POST">
    <div class="form-group">
      <label for="id">ID</label>
      <input type="number" readonly class="form-control" id="id" name="id" value="<?= isset($dados) ? $dados['id'] : "" ?>">
    </div>
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" value="<?= isset($dados) ? $dados['nome'] : "" ?>">
    </div>
    <div class="form-group">
      <label for="idade">Idade</label>
      <input type="number" class="form-control" id="idade" name="idade" value="<?= isset($dados) ? $dados['idade'] : "" ?>">
    </div>
    <div class="form-group">
      <label for="endereco">Endereço</label>
      <input type="text" class="form-control" id="endereco" name="endereco" value="<?= isset($dados) ? $dados['endereco'] : "" ?>">
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
    <a class="btn btn-secondary" href="<?= APP_PATH ?>index.php?c=Pessoa&a=index" role="button">Voltar</a>
  </form>
</div>
<?php require_once("./include/footer.php"); ?>
