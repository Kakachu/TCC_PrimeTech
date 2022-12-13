<?php
include('conexaomensagem.php');

$id = $_GET['id'];
$sql = "DELETE FROM mensagens WHERE id = $id";
	$mysqli->query($sql);

	$mysqli->close();

	header("location: mensagens.php");
?>
?>