<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icons/support-icon.ico" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style/style.css">
    <title>Sistema de Chamado</title>
</head>
<body>
<main>
    <div class="container">
        <form action="controler.php" method="POST">

            <h1 class="index-title">TEM UM PROBLEMA?</h1>
            <label>Email institucional:</label>
            <div class="division-grid"><div class="division-icon"><i class='bx bx-envelope'></i></div><input class="input-style" type="email" name="email"></></div> <!--Lembrar de colocar o nome para o uso do PHP-->

            <label>Descreva seu problema:</label>
            <div class="division-grid"><div class="division-icon"><i class='bx bx-edit-alt'></i></div><input class="input-style" type="text" name="desc_problema"></div>

            <label>Local do problema:</label>
            <div class="division-grid" ><div class="division-icon"><i class='bx bx-map'></i></div><select name="lugar">  <!-- Lembrar de colocar o nome para o uso do PHP -->
            <option value="">Pátio</option>
            <option value="">Diretoria</option>
            <option value="">Secretaria</option>
            <option value="">Laboratório de informática 1</option>
            <option value="">Laboratório de informática 2</option>
            <option value="">Laboratório de informática 3</option>
            <option value="">Outro (Especifique o local na parte de descrição)</option>
            </select></div>

            <label>Tipo de problema:</label>
            <div class="division-grid" ><div class="division-icon"><i class='bx bx-dizzy'></i></div><select name="tipo_problema">  <!-- Lembrar de colocar o nome para o uso do PHP -->
                <option value="">Hardware</option>
                <option value="">Software</option>
                <option value="">Drivers</option>
                <option value="">Ouos Eleônicos</option>
            </select></div>

            <label>Eu sou:</label>
            <div class="division-grid"><div class="division-icon"><i class='bx bx-id-card'></i></div><select  name="tipo_user">
                <option value="">Aluno</option>
                <option value="">Professor</option>
                <option value="">Funcionário</option>
            </select></div>
            <div class="center-phone">
            <input class="input-button" name="botao" type="submit">
            </div>
        </form>
        <div class="space-image">
                <img src="icons/IMAGE-INDEX.svg" alt="Ilustração na qual a personagem usa um computador" width="90%">
        </div>
       
    </div>
</main>
</body>
</html>