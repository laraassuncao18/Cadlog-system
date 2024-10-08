<?php
// requer arquivo 'user.php' que contem o model user com as funções para manipulação de dados de usuario.
require_once 'models/user.php';
class AuthController
{
     //Cria função responsavel pelo processo de login
     public function login()
     //Verificar se a requisiçaõ HTTP é do tipo POST,ou seja,
     {
       if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['emai'];
        $senha = $_POST['senha'];

        $user = user::frindByEmail($email);

        if($user &&  password_verify($senha, $user['senha'])){
          // verifica se a senha corresponde com o hash.
          session_start();
          // armazena a sessão do ID do usuario e seu perfil.
          $_SESSION['usuario_id'] = $user['id'];
          $_SESSION['perfil']   = $user['perfil'];

          header('location: index.php?action=dashboard');
        }else{
          echo "Email ou senha incorretos";
        }
      }else{
        // se a requisição não for POST (por exenplo, get) correga a pagina de registro.
        include 'views/login.php';
      }

       }
      }
?>