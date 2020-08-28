<?php

class Login{
    public static $user;

    public static function verificaLogin(){
        echo "O usuario ".self::$user." esta logado";
    }

    public function sairSistema(){
        echo "O Usuario deslogou";
    }
}
$login=new Login();
$login->sairSistema();
