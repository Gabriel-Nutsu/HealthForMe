<?php

if(isset($_POST['email']) && !empty(($_POST['email'])))

$nome = addslashes($_POST['nome'])
$email = addslashes($_POST['email'])
$mensagem = addslashes($_POST['mensagem'])

$to = "gabrielnutsu@gmail.com";
$subject = "Contato - HealthForMe";
$body = "nome: ".$nome. "\r\n".
        "email: ".$email. "\r\n".
        "mensagem: ".$mensagem. "\r\n".;

$header = "From:g.moraesxlr8@gmail.com"."\r\n"."Reply-to:".$email."\e\n."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso");
}else{
    echo("O email não pode ser enviado");
}
}
?>