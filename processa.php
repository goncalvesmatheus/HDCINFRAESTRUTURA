<?php
    
    $remetente = 'humberto@hdcinfraestrutura.com.br';
    $destinatario = 'humberto@hdcinfraestrutura.com.br';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $alerta = 'Formulário enviado, obrigado pelo contato!';


    mail($destinatario, $nome, $email, $telefone, $mensagem);

    echo $alerta;

    
    
?>