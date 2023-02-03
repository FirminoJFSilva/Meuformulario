<?php
if ($_POST) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];

  $para = 'firminoferreirasilva@gmail.com';
  $assunto = 'Nova mensagem do formulário de contato';
  $mensagem = "Nome: $nome\n\nEmail: $email\n\nMensagem:\n$mensagem";

  mail($para, $assunto, $mensagem);

  header('Location: obrigado.html');
}
?>
