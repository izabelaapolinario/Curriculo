<?php
$para = 'apolinario.izabela.com'; // Substitua pelo seu endereço de e-mail
$assunto_email = 'Teste de envio de e-mail';
$corpo_email = 'Este é um teste de envio de e-mail através do PHP.';

// Envie o e-mail
if (mail($para, $assunto_email, $corpo_email)) {
    echo 'E-mail de teste enviado com sucesso!';
} else {
    echo 'Erro ao enviar o e-mail de teste.';
}
?>
