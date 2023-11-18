<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="IMAGES-ICONS/support-icon.ico" type="image/x-icon">
  <link rel="stylesheet" href="STYLE/aplication.css">
  <title>Sistema de chamados</title>
</head>

<body>

  <header>
    <h1>VERIFICAÇÃO DE CHAMADOS</h1>
    <form action="listarchamados.php" method="POST">
      <input class="input-n" type="number" name="cod_chamados">
      <input class="input-s" type="submit" value="ATUALIZAR CHAMADO">
    </form>
  </header>
  <?php

  $cod_chamados = filter_input(INPUT_POST, "cod_chamados");
  $email = filter_input(INPUT_POST, "email");
  $desc_problema = filter_input(INPUT_POST, "desc_problema");
  $lugar = filter_input(INPUT_POST, "lugar");
  $tipo_problema = filter_input(INPUT_POST, "tipo_problema",);
  $tipo_user = filter_input(INPUT_POST, "tipo_user",);
  $data_hora = filter_input(INPUT_POST, "data_hora",);


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
  ?>
  <main>
    <div class="container">
      <table>
        <thead>
          <tr>
            <th class="header-cells">Código</th>
            <th class="header-cells">Email</th>
            <th class="header-cells">Descrição</th>
            <th class="header-cells">Local</th>
            <th class="header-cells">Tipo</th>
            <th class="header-cells">Usuário</th>
            <th class="header-cells">Data e Hora</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>
              <?php

              if ($conferirChamados == true) {

                foreach ($conferirChamados as $consult) {
                  echo $consult['cod_chamados'] . "</td><td>";
                  echo $consult['email'] . "</td><td>";
                  echo $consult['desc_problema'] . "</td><td>";
                  echo $consult['lugar'] . "</td><td>";
                  echo $consult['tipo_problema'] . "</td><td>";
                  echo $consult['tipo_user'] . "</td><td>";
                  echo $consult['data_hora'] . "<tr></th><th>";
                }
              } else {
                echo '<p style="margin=10px;">Não há chamados</p>' . "<br>";
              }

              ?>
        </tbody>
      </table>
    </div>

    <div class="container">
      <table>
        <thead>
          <tr>
            <th class="header-cell">Código</th>
            <th class="header-cell">Email</th>
            <th class="header-cell">Descrição</th>
            <th class="header-cell">Local</th>
            <th class="header-cell">Tipo</th>
            <th class="header-cell">Usuário</th>
            <th class="header-cell">Data e Hora</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th style="padding: 10px;">
              <?php
              if ($resultadoConsulta !== false) {
                foreach ($resultadoConsulta as $consult) {
                  echo $consult['cod_chamados'] . "</td><td>";
                  echo $consult['email'] . "</td><td>";
                  echo $consult['desc_problema'] . "</td><td>";
                  echo $consult['lugar'] . "</td><td>";
                  echo $consult['tipo_problema'] . "</td><td>";
                  echo $consult['tipo_user'] . "</td><td>";
                  echo $consult['data_hora'] . "<hr>";
                }
              } else {
                if ($conferirChamados == true) {
                  echo '<p>Não há chamados resolvidos :(</p>';
                }
              }

              ?>
        </tbody>
      </table>
    </div>
  </main>
</body>

</html>