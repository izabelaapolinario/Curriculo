<?php
// php-email-form.php

// Recebe os dados do formulário
$name = $_POST['nome'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Aqui você pode adicionar a lógica para enviar o e-mail
// Por exemplo, usando a função mail() do PHP

// Exemplo básico de envio de e-mail
$para = 'apolinario.izabela.com'; // Substitua pelo seu endereço de e-mail
$assunto_email = 'Contato do Formulário';
$corpo_email = "Nome: $name\nE-mail: $email\nAssunto: $subject\nMensagem: $message";

// Envie o e-mail
mail($para, $assunto_email, $corpo_email);

// Exiba uma mensagem de sucesso
echo 'E-mail enviado com sucesso!';
?>
