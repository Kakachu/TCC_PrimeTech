<?php
include('conexaomensagem.php');

$sql = "SELECT * FROM imagens WHERe codigo =".$_GET['codigo'];
			$result = $conn->query($sql);

            if ($row = $result->fetch_assoc()) {
			    echo '<form action="alt.php" enctype="multipart/form-data" method="post">';
			    echo '	<input type="hidden" name="codigo" value="'.$row["codigo"].'"><br/>';
				echo '	Nome:<br/>';
				echo '	<input type="text" name="nome" value="'.$row["nome"].'"><br/>';
				echo '	Preço:<br/>';
				echo '	<input type="text" name="preco" value="'.$row["preco"].'"><br/>';
				echo '	Descrição:<br/>';
				echo '  <input type="text" name="descricao" value="'.$row["descricao"].'"><br/>';
				echo '  <img src="data:image/jpeg;base64,'.base64_encode($row["foto"]).'" style="width:40px;height:40px;"/><br/>';
				echo '  Selecione uma imagem: <input name="arquivo" type="file" /><br/>';
				echo '	<input type="submit"/><br/>';
				echo '</form>';
			}else {
			    echo "Erro! Não existe esse cliente!";
			}
			$conn->close();
	}else{
		echo '<form action="ins.php" enctype="multipart/form-data" method="post">';
		echo '	Nome:<br/>';
		echo '	<input type="text" name="nome"/><br/>';
		echo '	Preço:<br/>';
		echo '	<input type="text" name="preco"/><br/>';
		echo '	Descrição:<br/>';
		echo '  <input type="text" name="descricao"/><br/>';
		echo '  Selecione uma imagem: <input name="arquivo" type="file" /><br/>';
		echo '	<input type="submit"/><br/>';
		echo '</form>';
	}
?>