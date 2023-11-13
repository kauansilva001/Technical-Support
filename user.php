<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="IMAGES-ICONS/support-icon.ico" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="STYLE/style.css">
    <title>Sistema de Chamado</title>
</head>

<body>
    <main>
        <div class="container">
            <form action="PHP/controler.php" method="POST">

                <h1 class="index-title">TEM UM PROBLEMA?</h1>
                <label>Email institucional:</label>
                <div class="division-grid">
                    <div class="division-icon"><i class='bx bx-envelope'></i></div><input class="input-style" type="email" name="email"></>
                </div> <!--Lembrar de colocar o nome para o uso do PHP-->

                <label>Descreva seu problema:</label>
                <div class="division-grid">
                    <div class="division-icon"><i class='bx bx-edit-alt'></i></div><input class="input-style" type="text" name="desc_problema">
                </div>

                <label>Local do problema:</label>
                <div class="division-grid">
                    <div class="division-icon"><i class='bx bx-map'></i></div><select name="lugar"> <!-- Lembrar de colocar o nome para o uso do PHP -->
                        <option value="Pátio">Pátio</option>
                        <option value="Diretoria">Diretoria</option>
                        <option value="Secretaria">Secretaria</option>
                        <option value="Laboratório de informática 1">Laboratório de informática 1</option>
                        <option value="Laboratório de informática 2">Laboratório de informática 2</option>
                        <option value="Laboratório de informática 3">Laboratório de informática 3</option>
                        <option value="Está na descrição">Outro (Especifique o local na parte de descrição)</option>
                    </select>
                </div>

                <label>Tipo de problema:</label>
                <div class="division-grid">
                    <div class="division-icon"><i class='bx bx-dizzy'></i></div><select name="tipo_problema"> <!-- Lembrar de colocar o nome para o uso do PHP -->
                        <option value="Hardware">Hardware</option>
                        <option value="Software">Software</option>
                        <option value="Drivers">Drivers</option>
                        <option value="Outros Eletrônicos">Outros Eletrônicos</option>
                    </select>
                </div>

                <label>Eu sou:</label>
                <div class="division-grid">
                    <div class="division-icon"><i class='bx bx-id-card'></i></div><select name="tipo_user">
                        <option value="Aluno">Aluno</option>
                        <option value="Professor">Professor</option>
                        <option value="Funcionário">Funcionário</option>
                    </select>
                </div>
                <div class="center-phone">
                    <input class="input-button" value="CADASTRAR" name="botao" type="submit">
                </div>
            </form>
            <div class="space-image">
                <img src="IMAGES-ICONS/IMAGE-INDEX.svg" alt="Ilustração na qual a personagem usa um computador" width="95%">
            </div>

        </div>
    </main>
</body>

</html>