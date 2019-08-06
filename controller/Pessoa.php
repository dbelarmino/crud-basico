<?php

include_once('./model/PessoaModel.php');

class Pessoa
{
  private $model;

  function __construct()
  {
    $this->model = new PessoaModel();
  }

  public function index()
  {
    $lista = $this->model->get();

    require_once('./view/pessoa/indexPessoa.php');
  }

  public function novo()
  {
    $action = "index.php?c=Pessoa&a=cadastrar";
    require_once('./view/pessoa/formPessoa.php');
  }

  public function cadastrar()
  {
    $dados = $_POST;

    $resultado = $this->model->new($dados);
    if ($resultado) {
      header('location: ./index.php?c=Pessoa&a=index');
    }
  }


  public function buscar($id)
  {
    $dados = $this->model->getId($id);
    $action = "index.php?c=Pessoa&a=atualizar";
    require_once('./view/pessoa/formPessoa.php');
  }

  public function atualizar()
  {
    $dados = $_POST;
    $resultado = $this->model->edit($dados);
    if ($resultado) {
      header('location: ./index.php?c=Pessoa&a=index');
    }
  }

  public function remover($id)
  {
    $resultado = $this->model->removeId($id);
    if ($resultado) {
      header('location: ./index.php?c=Pessoa&a=index');
    }
  }
}
