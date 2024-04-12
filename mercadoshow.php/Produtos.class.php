<?php
 require_once('banco.class.php');
 
 class Produtos{
  
   // Atributos

   public $id;
   public $nome;
   public $preco;
   public $quantidade;
   public $id_categoria;
   public $id_fornecedor;
   // Métodos
   public function Listar() {
     $sql = "SELECT * FROM viewprodutos";
     $conexao = Banco::conectar();
     // Converter o comando sql (string) em um objeto
     $comando = $conexao->prepare($sql);
     // Executar o comando
     $comando->execute();
     // Entregar o resultado para $resultado como um array associativo
     $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
    
     // Desconectar
     Banco::desconectar();

     return $resultado;
   }

   public function Cadastrar() {
     $sql = "INSERT INTO produtos(nome, preco, quantidade, id_categoria, id_fornecedor) VALUES (?,?,?,?,?)";
     $conexao = Banco::conectar();
     // Converter o comando sql (string) em um objeto
     $comando = $conexao->prepare($sql);

      

     // Executar o comando
     $comando->execute([$this->nome, $this->preco, $this->quantidade, $this->id_categoria, $this->id_fornecedor]);
     $linhas = $comando->rowCount();
     // Desconectar
     Banco::desconectar();
     // Retornar a quantidade de linhas cadastradas
     return $linhas;

   }

   public function Apagar() {
     $sql = "DELETE FROM produtos WHERE id = ?";
     $conexao = Banco::conectar();
     // Converter o comando sql (string) em um objeto
     $comando = $conexao->prepare($sql);

     // Executar o comando
     $comando->execute([$this->id]);
     $linhas = $comando->rowCount();
     // Desconectar
     Banco::desconectar();
     // Retornar a quantidade de linhas cadastradas
     return $linhas;

   }

   public function Modificar() {
     $sql = "UPDATE mercadoshow SET id=?, nome=?, preco=?, quantidade=?, id_categoria=?, id_fornecedor=? WHERE id_usuario=?";
     $conexao = Banco::conectar();
     // Converter o comando sql (string) em um objeto
     $comando = $conexao->prepare($sql);

     

     // Executar o comando
     $comando->execute([$this->id, $this->nome, $this->preco, $this->quantidade, $this->id_categoria, $this->id_fornecedor]);
     $linhas = $comando->rowCount();
     // Desconectar
     Banco::desconectar();
     // Retornar a quantidade de linhas cadastradas
     return $linhas;
   }
 }
