<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$text = addcslashes($_POST['text']);
$message = addcslashes($_POST['message']);


$to = "techmeet554@gmail.com";
$subject = "Contacto - Meet Tech";
$body = "Nome: ".$nome."\r\n".
        "Email: ".$email."\r\n".
        "Assunto: ".$text."\r\n".
        "Mensagem: ".$message;
$header = "From:jmussoque@gmail.com"."\r\n".
            "Reply-To".$email."\e\n".
            "X=Mailer:PHP/".phpversion();



if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");

}else{
    echo("O Email não pode ser enviado enviado.");
}


}


?>