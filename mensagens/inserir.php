<?php
include('conexaomensagem.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO mensagens VALUES (null, '$nome', '$email','$assunto', '$mensagem');";

$mysqli->query($sql);

	$mysqli->close();

	header("location:../index.html");
?>