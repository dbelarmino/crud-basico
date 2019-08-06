<?php

include_once './Dao.php';

class PessoaModel extends Dao
{
  private $con;

  function __construct()
  {
    //Acessando o construtor do método pai.
    parent::__construct();
  }

  public function get()
  {
    $sql = "SELECT * FROM pessoa";
    $con = $this->getCon();
    $query = $con->query($sql);
    $lista = $query->fetchAll();

    return $lista;
  }

  public function new($dados)
  {
    $dados = array(
      "nome" => $_POST['nome'],
      "idade" => $_POST['idade'],
      "endereco" => $_POST['endereco'],
    );

    $sql = "INSERT INTO pessoa(nome, idade, endereco)
            VALUES(:nome, :idade, :endereco)";

    $con = $this->getCon();
    $query = $con->prepare($sql);
    $resultado = $query->execute($dados);

    if (!$resultado) {
      print_r($query->errorInfo());
      die("Ocorreu um errro!");
    } else {
      return true;
    }
  }

  public function edit($dados)
  {
    $sql = "UPDATE pessoa
            SET nome = :nome, idade = :idade, endereco = :endereco
            WHERE id= :id";


    $con = $this->getCon();
    $query = $con->prepare($sql);
    $resultado = $query->execute($dados);

    if (!$resultado) {
      print_r($query->errorInfo());
      die("Ocorreu um errro!");
    } else {
      return true;
    }
  }

  public function getId($id)
  {
    $sql = "SELECT * FROM pessoa WHERE id=" . $id;
    $con = $this->getCon();
    $query = $con->query($sql);
    $lista = $query->fetch();

    return $lista;
  }

  public function removeId($id)
  {
    $id = array("id" => $id);
    $sql = "DELETE FROM pessoa WHERE id= :id";
    $con = $this->getCon();
    $query = $con->prepare($sql);
    $resultado = $query->execute($id);

    if (!$resultado) {
      print_r($query->errorInfo());
      die("Ocorreu um errro!");
    } else {
      return true;
    }
  }
}
