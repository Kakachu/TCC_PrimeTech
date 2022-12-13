<?php

include('../login/protect.php');
include ('conexaomensagem.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mensagens.css">
    <title>Document</title>
</head>
<body>
    Bem vindo,  <?php echo $_SESSION['nome']; ?>, as mensagens de hoje são:<br>

    <?php
    $sql = "SELECT * FROM mensagens";
    $result = $mysqli->query($sql);

    if ($result ->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="card">';
  				echo '<h1>'. $row["nome"].'</h1>';
  				echo '<p>'.$row["email"].'</p>';
  				echo '<p>'.$row["assunto"].'</p>';
                echo '<p>'.$row["mensagem"].'</p>';
		        echo "<a class='btnExcluir' href='excluir.php?id=".$row["id"]."'><img src='excluir.png'/></a>";
				echo '</div>';
        }
    } else {
        echo "0 resultados";
    }

    ?>

    <p>
        <a href="../login/logout.php">Sair</a>
    </p>
</body>
</html>