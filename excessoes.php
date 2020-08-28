<?php 

class Newsletter{
    public function cadastrarEmail($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("Este email é invalido", 300);
        else:
            echo "Email cadastrado com sucesso";
        endif;
    }
}

$newsletter= new Newsletter();

try {
    $newsletter->cadastrarEmail("contato@");
} catch (Exception $e){
    echo "Mensagem ".$e->getMessage()."<br>";
    echo "Codigo ".$e->getCode()."<br>";
    echo "Linha ".$e->getLine()."<br>";
    echo "Arquivo ".$e->getFile()."<br>";

};
