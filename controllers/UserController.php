<?php
//Definição da classe usercontroller, responsavel por gerenciar as ações relacionada aos usuarios.
class  UserController
//função para registrar o Usuario.
{
 public function register(){
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = [
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'senha' => password_hash($_POST)['senha'],PASSWORD_DEFAULT),
        'perfil' => $_POST['perfil']
    ];
    User::create($data);

 }else{
    // Se a requisição não fot post (por exemplo,GET)
    include 'views/register.php';
 }
 }
}

?>