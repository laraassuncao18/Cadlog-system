<?php
class Database{
    //utiliza padrao singleton, cujo objetivo é garantir que apenas uma unica instancia de classe seja criada durante a execução do programa, e que essa instancia seja utilizada.

private static $instance = null;
//metodo publico que retorna a conexao com BD.
public static function getConnection(){
    // Verificar se a instancia de conexao ainda nao foi criada.
    if(!self::$instance){
        $host = 'localhost';
        $db   ='sistema_usuarios';
        $user  ='root';
        $password  = '';
        self::$instance = new PDO("mysql:host=$host;dbname=$db,$user,$password");
        //Define o modo de erro para excecoes,facilitando a depuracao e tratamento de erro.
        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    return self::$instance;
}
}
?>