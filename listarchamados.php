<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['getUser_name'])) {
  // Se não estiver autenticado, redireciona para a página de login na pasta anterior
  header("location: ../login.php");
  exit(); // Interrompe a execução adicional do script
}

    include "PHP/chamadosDAO.php";    
    include "PHP/chamados.php";
  
    $cod_chamados = filter_input(INPUT_POST, "cod_chamados");
    $email = filter_input(INPUT_POST, "email");
    $desc_problema = filter_input(INPUT_POST, "desc_problema");
    $lugar = filter_input(INPUT_POST, "lugar");
    $tipo_problema = filter_input(INPUT_POST, "tipo_problema",);
    $tipo_user = filter_input(INPUT_POST, "tipo_user",);
    $data_hora = filter_input(INPUT_POST, "data_hora",);
    $button = filter_input(INPUT_POST, "button");
    $status = true;
  
  
  
  
    $chamados = new chamados();
  
    $chamados->setCod_chamados($cod_chamados);
    $chamados->setEmail($email);
    $chamados->setDesc_problema($desc_problema);
    $chamados->setLugar($lugar);
    $chamados->setTipo_problema($tipo_problema);
    $chamados->setTipo_user($tipo_user);
    $chamados->setData_hora($data_hora);
  
    $chamadosDAO = new chamadosDAO();
  
    $conferirChamados = $chamadosDAO->consultarChamados();
    $resultadoConsulta = $chamadosDAO->consultarChamadosResolvidos();

?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="IMAGES-ICONS/support-icon.ico" type="image/x-icon">
  <link rel="stylesheet" href="STYLE/aplication.css">
  <link  href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'  rel='stylesheet'>
  <title>Sistema de chamados</title>
</head>

<body>

  <header>
    <h1>VERIFICAÇÃO DE CHAMADOS</h1>
    <form action="PHP/controler.php" method="POST">
      <input class="input-n" type="number" name="cod_chamados">
      <input class="input-s" type="submit" value="ATUALIZAR CHAMADO" name="botao">
    </form>
  </header>
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
            <?php
            if ($conferirChamados == true) {
              foreach ($conferirChamados as $consult) {
                echo "<th>";
                echo $consult['cod_chamados'] . "</th><td><a href='mailto:" . $consult['email'] . "?subject=SISTEMA DE CHAMADO'>";
                echo $consult['email'] . "</a></td><td>";
                echo $consult['desc_problema'] . "</td><td>";
                echo $consult['lugar'] . "</td><td>";
                echo $consult['tipo_problema'] . "</td><td>";
                echo $consult['tipo_user'] . "</td><td>";
                echo $consult['data_hora'] . "</td></tr>";
              }
            } else {
              echo '<td style="padding=10px;">Não há chamados</td>';
            }
            ?>

          </th>
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
              <?php
              if ($resultadoConsulta !== false) {
                foreach ($resultadoConsulta as $consult) {
                  echo "<th>";
                  echo $consult['cod_chamados'] . "</th><td>";
                  echo $consult['email'] . "</td><td>";
                  echo $consult['desc_problema'] . "</td><td>";
                  echo $consult['lugar'] . "</td><td>";
                  echo $consult['tipo_problema'] . "</td><td>";
                  echo $consult['tipo_user'] . "</td><td>";
                  echo $consult['data_hora'] . "</td><tr>";
                }
              } else {
                if ($conferirChamados == true) {
                  echo '<td style="padding=10px;">Não há chamados resolvidos :(</td>';
                }
              }

              ?>
        </tbody>
      </table>
    </div>
    <a href="PHP/deslog.php" class="link-out">
        <div class="log-out">
            <i  class='bx bxs-user-minus'  style='color:#ffffff' ></i>
        </div>
    </a>
  </main>
</body>

</html>
