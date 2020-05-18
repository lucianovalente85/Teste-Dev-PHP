<?php 
    require_once "conexao.php";
    require_once "Veiculos.php";



    function createTableVeiculos($conexao)
  {
    
    $sql = "SELECT * FROM `teste`.`veiculos`";
    if($result = $conexao->query($sql)): 
    $result->setFetchMode(PDO::FETCH_CLASS,'Veiculos'); ?>
    <link rel="stylesheet" href="./css/style.css">
    <h2 class="h2">Veículos Cadastrados.</h2> 
    <table class='table' border="1">
      <tr class="titleTable">
          <th>#</th>
          <th>Data de Cadastro</th>
          <th>Placa</th>
          <th>Modelo</th>
          <th>Marca</th>
          <th>Alterar</th>
          <th>Excluir</th>
      </tr>
 
    <?php 
     $num = 0;    
    while ($veiculo = $result->fetch()):
               
     $num += 1; 
     ?>
      <tr class="contentTable">
          <td><?= $num?></td>
          <td><?= $veiculo->dataDeCadastro ?></td>
          <td><?= $veiculo->placa?></td>
          <td><?= $veiculo->modelo?></td>
          <td><?= $veiculo->marca?></td>
          <td><a id="uptade" href="index.php?alterar=<?= $veiculo->id?>">X</a></td>
          <td><a id="delete" href="index.php?deletar=<?= $veiculo->id?>">X</a></td> 
      </tr>
        
    <?php endwhile;?>
    </table>
    
 <?php
 endif; 
 } 

 function criaVeiculo($conexao, $dataDeCadastro, $placa, $modelo, $marca){
    $sql = "INSERT INTO `teste`.`veiculos` (`dataDeCadastro`, `placa`, `modelo`, `marca`) VALUES (:dataDeCadastro, :placa, :modelo, :marca);";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':dataDeCadastro', $dataDeCadastro);
    $stmt->bindParam(':placa', $placa);
    $stmt->bindParam(':modelo', $modelo);
    $stmt->bindParam(':marca', $marca);
    
    if(!$stmt->execute()):
       echo "Ocorreu um erro.";
    else:        
       header('location:index.php');
    endif;
}

function pegarVeiculo($conexao, $id){
   $sql = "SELECT * FROM `teste`.`veiculos` WHERE `veiculos`.`id` = :id;";
   $stmt = $conexao->prepare($sql);
   $stmt->bindParam(':id', $id);
   $stmt->execute();
   $stmt->setFetchMode(PDO::FETCH_CLASS, 'Veiculos');
 
   $veiculo = $stmt->fetch();
   return $veiculo;
}

function alteraVeiculo($conexao, $id, $dataDeCadastro, $placa, $modelo, $marca){
    $sql = "UPDATE `teste`.`veiculos` SET `dataDeCadastro`=:dataDeCadastro, `placa`=:placa, `modelo`=:modelo,`marca`=:marca WHERE `id`=:id;";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':dataDeCadastro', $dataDeCadastro);
    $stmt->bindParam(':placa', $placa);
    $stmt->bindParam(':modelo', $modelo);
    $stmt->bindParam(':marca', $marca);

    if(!$stmt->execute()):
       echo "Ocorreu um erro.";
    else:
       header('location:index.php');
    endif;

}

function deletaVeiculo($conexao, $id){
    $sql = "DELETE FROM `teste`.`veiculos` WHERE `id`=:id;";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':id', $id);

    if(!$stmt->execute()):
       echo "Ocorreu um erro.";
    else:
       header('location:index.php');
    endif;
}
 function filtrarVeiculoPlaca($conexao, $id){
   $sql = "SELECT * FROM `teste`.`veiculos` WHERE `veiculos`.`id` = :id;";
   $stmt = $conexao->prepare($sql);
   $stmt->bindParam(':id', $id);
   $stmt->execute();
   $stmt->setFetchMode(PDO::FETCH_CLASS, 'Veiculos');
 
   $veiculo = $stmt->fetch();
   return $veiculo;
}

   if(isset($_POST['cadastrar']) && ($_POST['cadastrar'] == 'Cadastrar')):
       criaVeiculo($db, $_POST['dataDeCadastro'], $_POST['placa'], $_POST['modelo'], $_POST['marca']);
    
   elseif(isset($_POST['Filtar Placa'])):
       $veiculo = filtrarVeiculoPlaca($db, $_POST['Filtrar Placa']);         

   elseif(isset($_GET['alterar'])):
       $veiculo = pegarVeiculo($db, $_GET['alterar']);      
       
   elseif(isset($_POST['cadastrar']) && ($_POST['cadastrar'] == 'Alterar')):
       alteraVeiculo($db, $_POST['id'], $_POST['dataDeCadastro'], $_POST['placa'], $_POST['modelo'], $_POST['marca']);
     
   elseif(isset($_GET['deletar'])):
       deletaVeiculo($db, $_GET['deletar']);
endif;

?>