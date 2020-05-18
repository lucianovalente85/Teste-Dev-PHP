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
    <title>Cadastro de Veículos</title>
</head>

<body>
<h1 class="h1">Cadastrar Veículos</h1>
    <form action="cadastrarVeiculo.php" method="post">
        <label for="dataDeCadastro">Data de Cadastro: </label>
        <input type="date" name="dataDeCadastro" id="dataDeCadastro" value="<?=$veiculo->dataDeCadastro??''?>">
        <label for="placa">Placa: </label>
        <input type="text" name="placa" value="<?=$veiculo->placa??''?>" id="placa">
        <label for="modelo">Selecione o modelo: </label>
        <select name="modelo" id="modelo">
            <option <?= (isset($veiculo->modelo) && ($veiculo->modelo == ''))?'selected':'' ?>>Escolha o modelo</option>
            <option <?=  (isset($veiculo->modelo) && ($veiculo->modelo == 'Corsa'))?'selected':'' ?>>Corsa</option>
            <option <?= (isset($veiculo->modelo) && ($veiculo->modelo == 'Celta'))?'selected':'' ?>>Celta</option>
            <option <?= (isset($veiculo->modelo) && ($veiculo->modelo == 'Agile'))?'selected':'' ?>>Agile</option>
            <option <?= (isset($veiculo->modelo) && ($veiculo->modelo == 'Onix'))?'selected':'' ?>>Onix</option>
            <option <?= (isset($veiculo->modelo) && ($veiculo->modelo == 'Uno'))?'selected':'' ?>>Uno</option>
            <option <?= (isset($veiculo->modelo) && ($veiculo->modelo == 'Toro'))?'selected':'' ?>>Toro</option>
            <option <?= (isset($veiculo->modelo) && ($veiculo->modelo == 'Strada'))?'selected':'' ?>>Strada</option>
            <option <?= (isset($veiculo->modelo) && ($veiculo->modelo == 'Siena'))?'selected':'' ?>>Siena</option>
            <option <?= (isset($veiculo->modelo) && ($veiculo->modelo == 'Gol'))?'selected':'' ?>>Gol</option>
            <option <?= (isset($veiculo->modelo) && ($veiculo->modelo == 'Voyage'))?'selected':'' ?>>Voyage</option>
            <option <?= (isset($veiculo->modelo) && ($veiculo->modelo == 'Polo'))?'selected':'' ?>>Polo</option>
            <option <?= (isset($veiculo->modelo) && ($veiculo->modelo == 'Virtus'))?'selected':'' ?>>Virtus</option>
        </select>
        <label for="marca">Selecione a marca: </label>
        <select name="marca" id="marca">
            <option <?= (isset($veiculo->marca) && ($veiculo->marca == ''))?'selected':'' ?>>Escolha a marca</option>
            <option <?= (isset($veiculo->marca) && ($veiculo->marca == 'GM'))?'selected':'' ?>>GM</option>
            <option <?= (isset($veiculo->marca) && ($veiculo->marca == 'FIAT'))?'selected':'' ?>>FIAT</option>
            <option <?= (isset($veiculo->marca) && ($veiculo->marca == 'Volkswagen'))?'selected':'' ?>>Volkswagem
            </option>
        </select>
        <input type="hidden" name="id" value="<?= $veiculo->id??'' ?>">
        <input class="cadastrar" type="submit" id="cadastrar" name="cadastrar" value="<?= isset($veiculo)?'Alterar':'Cadastrar' ?>">
    </form>
    <?php createTableVeiculos($db); ?>
    <form action="index.php" method="post">
        <input type="submit" value="Retornar à pagina inicial"> 
    </form>
</body>
</html>
