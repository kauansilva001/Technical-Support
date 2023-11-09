<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="IMAGES-ICONS/support-icon.ico" type="image/x-icon">
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

  $chamadosDAO->consultarChamados($chamados);

  ?>

</body>

</html>