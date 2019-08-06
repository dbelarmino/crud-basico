<?php require_once('./include/header.php'); ?>
<div class="container mt-5 mb-5">
  <a class="btn btn-primary mb-3" href="<?= APP_PATH ?>index.php?c=Pessoa&a=novo" role="button">Cadastrar</a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Idade</th>
        <th scope="col">Editar</th>
        <th scope="col">Deletar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php foreach ($lista as $item) : ?>
        <tr>
          <td scope="row"><?= $item['id']; ?></td>
          <td><?= $item['nome']; ?></td>
          <td><?= $item['idade']; ?></td>
          <td>
            <a href="index.php?c=Pessoa&a=buscar&id=<?= $item['id'] ?>">
              <i class="material-icons">edit</i>
            </a>
          </td>
          <td>
            <a href="index.php?c=Pessoa&a=remover&id=<?= $item['id'] ?>">
              <i class="material-icons">delete</i>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>

    </tbody>
  </table>
</div>

</html>
<?php require_once('./include/footer.php'); ?>
