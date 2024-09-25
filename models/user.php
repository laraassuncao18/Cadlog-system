<?php
require_once 'models/database.php';
class user
//buscando o arquivo
{
  //função para localizar usuario pelo email
  public static function frindByEmail($email){
    $conn = Database::getConnection();
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->execute(['email' => $email]);
    return $stmt->fetch(PDO::FETCH_ASSOC); 
  }
  //  funcao para encontrar o usuario pelo ID
  public static function frind($id){
    $conn = Database::getConnection();
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
  //funcao para criar um novo usuario no banco de dados
  public static function create($data){
    $conn = Database::getConnection();
    $stmt = $conn->prepare("INSET INTO usuarios (nome, email, senha, perfil) VALUES (:nome, :senha, :perfil)");
    $stmt->execute($data);

  }
}
?>