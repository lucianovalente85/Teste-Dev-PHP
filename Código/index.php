<?php 
    require_once "conexao.php";    
    require_once "Veiculos.php";
    require_once "functionsVeiculos.php";

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Cadastro de Veículos</title>
</head>

<body>
    <form action="cadastrarVeiculo.php" method="post">
        <input type="submit" value="Cadastrar Veiculos">
    </form><br>

    <form action="index.php" method="post">
    <input placeholder="Informe a placa" type="text" name="consultaPlaca"  id="consultaPlaca">
    <input type="submit" value="Filtrar Placa"><br><br>
    <input placeholder="Informe a marca" type="text" name="consultaMarca" id="consultaMarca" >
    <input type="submit" value="Filtrar Modelo">
    </form>
    <script >
        <script>
			$(document).ready(function () {
				$.post('index.php', function(retorna){
					//Subtitui o valor no seletor id="conteudo"
					$("#conteudo").html(retorna);
				});
			});
		</script>
    </script>
</body>

</html>