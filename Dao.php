<?php

define('USUARIO', 'root');
define('SENHA', 'root');
define('BD_NOME', 'ads');
define('HOST', 'localhost');

class Dao
{
  private $con;

  function __construct()
  {
    $this->conectar();
  }

  private function conectar()
  {
    try {
      $this->con = new PDO('mysql:host=' . HOST . ';dbname=' . BD_NOME, USUARIO, SENHA);
    } catch (PDOException $e) {
      echo "Falha na Conexão " . $e->getMessage();
    }
  }

  public function getCon()
  {
    return $this->con;
  }
}
