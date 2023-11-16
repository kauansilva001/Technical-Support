<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="IMAGES-ICONS/support-icon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Sistema de chamados</title>
</head>

<body>
  <?php

  $cod_chamados = filter_input(INPUT_POST, "cod_chamados");
  $email = filter_input(INPUT_POST, "email");
  $desc_problema = filter_input(INPUT_POST, "desc_problema");
  $lugar = filter_input(INPUT_POST, "lugar");
  $tipo_problema = filter_input(INPUT_POST, "tipo_problema", );
  $tipo_user = filter_input(INPUT_POST, "tipo_user", );
  $data_hora = filter_input(INPUT_POST, "data_hora", );


  include("PHP/chamadosDAO.php");
  include("PHP/chamados.php");

  $chamados = new chamados();

  $chamados->setCod_chamados($cod_chamados);
  $chamados->setEmail($email);
  $chamados->setDesc_problema($desc_problema);
  $chamados->setLugar($lugar);
  $chamados->setTipo_problema($tipo_problema);
  $chamados->setTipo_user($tipo_user);
  $chamados->setData_hora($data_hora);

  $chamadosDAO = new chamadosDAO();
  $chamadosDAO->consultarChamados();

  $conferirChamados = $chamadosDAO->consultarChamados();
  $resultadoConsulta = $chamadosDAO->consultarChamadosResolvidos();

  if ($conferirChamados == true) {

    foreach ($conferirChamados as $consult) {
      echo $consult['cod_chamados'] . "<br>";
      echo $consult['email'] . "<br>";
      echo $consult['desc_problema'] . "<br>";
      echo $consult['lugar'] . "<br>";
      echo $consult['tipo_problema'] . "<br>";
      echo $consult['tipo_user'] . "<br>";
      echo $consult['data_hora'] . "<hr>";
    }
  } else {
    echo "Não há chamados" . "<br>";
  }

  if ($resultadoConsulta !== false) {
    foreach ($resultadoConsulta as $consult) {
      echo $consult['cod_chamados'] . "<br>";
      echo $consult['email'] . "<br>";
      echo $consult['desc_problema'] . "<br>";
      echo $consult['lugar'] . "<br>";
      echo $consult['tipo_problema'] . "<br>";
      echo $consult['tipo_user'] . "<br>";
      echo $consult['data_hora'] . "<hr>";
    }
  } else {
    if ($conferirChamados == true) {
      echo "Não há chamados resolvidos";
    }
  }

  ?>

  <?php
  while ($conferirChamados);
  ?>

<div class="container-fluid">
  <table class="table table-danger table-stripped">
    <thead>
      <tr>
        <th scope="col">Código do chamado</th>
        <th scope="col">Email</th>
        <th scope="col">Descrição</th>
        <th scope="col">Local</th>
        <th scope="col">Tipo</th>
        <th scope="col">Usuário</th>
        <th scope="col">Data e Hora</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <tr>
          <td><?php echo $conferirChamados["cod_chamados"]; ?></td>
        </tr>
      </tr>
    </tbody>
  </table>

  <table class="table table-success">

  </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>






</html>