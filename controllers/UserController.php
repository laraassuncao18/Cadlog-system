<?php
//Definição da classe usercontroller, responsavel por gerenciar as ações relacionada aos usuarios.
class  UserController
//função para registrar o Usuario.
{
 public function register(){
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
   //coleta os dados evitados pelo formulario e organiza em um array.
    $data = [
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'senha' => password_hash($_POST['senha'],PASSWORD_DEFAULT),
        'perfil' => $_POST['perfil']
    ];
    //chama o metodo create do model user para criar o novo usuario.
    User::create($data);
    header('Location: index.php');

 }else{
    // Se a requisição não fot post (por exemplo,GET)
    include 'views/register.php';
 }
 }
}

?>