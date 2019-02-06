<?php

    // Dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem_site = $_POST['mensagem_site'];

    // Variáveis de envio
    $remetente = "humberto@hdcinfraestrutura.com.br";
    $destino = "humberto@hdcinfraestrutura.com.br";
    $assunto = "Contato através do site";

    // Corpo da mensagem
    $mensagem = "Olá, você tem uma nova mensagem!" . "</br>";
    $mensagem .= "Nome do contato: " . $nome . "</br>";
    $mensagem .= "E-mail: " . $email . "</br>";
    $mensagem .= "Telefone de contato: " . $telefone . "</br>";
    $mensagem .= "Mensagem: " .  "</br>";
    $mensagem .= $mensagem_site;



    $alerta = 'Formulário enviado, obrigado pelo contato!';


    mail($destino, $assunto, $nome, $email, $telefone, $mensagem);

    echo $alerta;

    
?>