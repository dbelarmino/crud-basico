<?php

require_once('./include/header.php');

if (
  isset($_GET['c']) && $_GET['c'] != NULL &&
  isset($_GET['a']) && $_GET['a'] != NULL
) {

  $classe = $_GET['c'];

  require_once('./controller/' . $classe . '.php');

  $objeto = new $classe();
  $acao = $_GET['a'];

  if (isset($_GET['id']) && $_GET['id'] != NULL) {
    $id = $_GET['id'];
    $objeto->$acao($id);
  } else {
    $objeto->$acao();
  }
}

require_once('./include/footer.php');
