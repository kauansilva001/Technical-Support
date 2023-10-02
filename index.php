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
        <form action="controler.php" method="POST">
            <table>
            <tr><td><label>Email institucional:</label></td></tr>
            <tr><td><div class="division-grid"><div class="division-icon"><i class='bx bx-envelope'></i></div><input type="email"></td></div> <!--Lembrar de colocar o nome para o uso do PHP--> </tr>
            <tr><td><label>Local do problema:</label></td></tr>
            <tr><td><select>  <!-- Lembrar de colocar o nome para o uso do PHP -->
            <option value="">Pátio</option>
            <option value="">Diretoria</option>
            <option value="">Secretária</option>
            <option value="">Laboratório de informática 1</option>
            <option value="">Laboratório de informática 2</option>
            <option value="">Laboratório de informática 3</option>
            </select></td></tr>
            <tr><td><label>Tipo de problema:</label></td></tr>
            <tr><td><select>  <!-- Lembrar de colocar o nome para o uso do PHP -->
                <option value="">Hardware</option>
                <option value="">Software</option>
                <option value="">Drivers</option>
                <option value="">Outros Eletrônicos</option>
            </select></td></tr>
            <tr><td><label>Descreva seu problema:</label></td></tr>
            <tr><td><textarea></textarea></td></tr>
            <tr><td><label>Eu sou:</label></td></tr>
            <tr><td><select name="" id="">
                <option value="">Aluno</option>
                <option value="">Professor</option>
                <option value="">Funcionário</option>
            </select></td></tr>
            </table>
        </form>
    </main>
</body>
</html>
