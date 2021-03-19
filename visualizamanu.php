<?php include("chave.php"); 
$consulta = "SELECT * FROM manutencao";
$con = $mysqli->query($consulta) or die($mysqli->error);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Manutenções</title>
    
    <link rel="shortcut icon" href="img/icon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="javascript" href="pro.js">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top cor-nav">
            <div class="container">
                <a class=" js-scroll-trigger" href="index.php"><img src="img/icon.png"  height="40px" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right text-primary" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-primary" href="index.html">Início</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-primary" href="paginadoprof.php">Página do Professor</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

 

    <div class="container espcom"> 
        <br>
        <br>
        <h1 class="text-center">Histórico de Alunos </h1>
       
        <div class="row">
        <div class="col-lg-12">
        <table class="table">
        <thead class="thead-dark">
          <tr>
              <th>Aluno</th>
              <th>Matricula</th>
              <th>Data da Manutenção</th>
              <th>Atividade</th>
              <th>Localização do Computador</th>
              <th>Descrição</th>
              <th><a href="relacoes.php">Relação</a></th>
          </tr>
          </thead>
          <tbody>
          <?php while($dado = $con->fetch_array()){ ?>
          <tr>
              <td scope="col"><?php echo $dado["nomealuno"] ?></td>
              <td scope="col"><?php echo $dado["aluno_matricula"] ?></td>
              <td scope="col"><?php echo date("d/m/y", strtotime( $dado["datamanutencao"])) ?></td>
              <td scope="col"><?php echo $dado["atividade"] ?></td>
              <td scope="col"><?php echo $dado["localizacao"] ?></td>
              <td scope="col"><?php echo $dado["descricao"] ?></td>
              <td scope="col"><?php echo $dado["equipamento_idequipamento"] ?></td>
              
          </tr>
          </tbody>
          <?php } ?>
       </table>
        </div>
        </div>
        </div>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>