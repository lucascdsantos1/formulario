<?php
$nome = filter_input(INPUT_POST , "nome" ,FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST , "telefone" ,FILTER_VALIDATE_INT);
$msg = filter_input(INPUT_POST , "msg" ,FILTER_SANITIZE_STRING);

#variáveis para enviar um email
$to = "lucasclaudino237@gmail.com";
$subject = "Novo contato pelo site";
$msg = "Nome: $nome
            Telefone: $telefone
            Mensangem: $msg";
$headers = "from : lucasclaudino237@gmail.com";
#enviando para o email

try{
    mail($to , $subject , $msg , $headers);
    echo "Obrigado, em breve entraremos em contato";
}catch(Exception $error){
    echo "Erro ao enviar o seu Contato,tente novamente mais tarde";
}