<?php

// inclui arquivos de controlador para lidar com diferentes ações
require 'controllers/AuthController.php'; 
// inclui o controlador de autenticação
require 'controllers/UserController.php';
// inclui o controlador de usuario
require 'controllers/DashboardController.php';
// inclui o controlador de dashboard

// cria instancias dos controladores para utilizar seus metodos.
$authcontroller = new AuthController();
$usercontroller = new usercontroller();
// Coleta a ação do URL, se não houver definida por padrão
$action = $_GET['action'] ?? 'login';
// Usa operador de coalescencia nula(??)para definir 'login' se 'acition' não estiver presente.
// Verifica a ação solicitada e chama o metodo apropiado do controlador
switch($action){
    case 'login':
        $authcontroller->login();

}
?>