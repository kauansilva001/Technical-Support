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
            <option value="patio">Pátio</option>
            <option value="diretoria">Diretoria</option>
            <option value="secretaria">Secretaria</option>
            <option value="lab_informatica_1">Laboratório de informática 1</option>
            <option value="lab_informatica_2">Laboratório de informática 2</option>
            <option value="lab_informatica_3">Laboratório de informática 3</option>
            <option value="outro">Outro (Especifique o local na parte de descrição)</option>
            </select></div>

            <label>Tipo de problema:</label>
            <div class="division-grid" ><div class="division-icon"><i class='bx bx-dizzy'></i></div><select name="tipo_problema">  <!-- Lembrar de colocar o nome para o uso do PHP -->
                <option value="hardware">Hardware</option>
                <option value="software">Software</option>
                <option value="drivers">Drivers</option>
                <option value="outros_eletronicos">Outros Eleônicos</option>
            </select></div>

            <label>Eu sou:</label>
            <div class="division-grid"><div class="division-icon"><i class='bx bx-id-card'></i></div><select  name="tipo_user">
                <option value="aluno">Aluno</option>
                <option value="professor">Professor</option>
                <option value="funcionario">Funcionário</option>
            </select></div>
            <div class="center-phone">
            <input class="input-button" value="CADASTRAR" name="botao" type="submit">
            </div>
        </form>
        <div class="space-image">
                <img src="icons/IMAGE-INDEX.svg" alt="Ilustração na qual a personagem usa um computador" width="95%">
        </div>
       
    </div>
</main>
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/6CwfuxIqcltXDGjfZsMd9A?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

    <div>
    <img src="santineli.jpg" alt="">        
</div>
</body>
</html>