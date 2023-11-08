<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icons/support-icon.ico" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="STYLE/config.css">
    <title>Sistema de Chamado</title>
</head>
<body>
<main style="display:flex; justify-content:center;">

        <form action="PHP/controler.php" method="POST">
            <h1 class="login-title">RECUPERAR SENHA</h1>
            <label>Usuário:</label>
            <div class="division-grid"><div class="division-icon"><i class='bx bx-user'></i></div><input class="input-style" type="text" name="user-admin" placeholder="Digite seu nome de usuário"></div> <!--Lembrar de colocar o nome para o uso do PHP--> </tr>

            <label>Senha:</label>
            <div class="division-grid"><div class="division-icon"><i class='bx bx-lock-alt'></i></div><input class="input-style" type="password" name="password-admin" placeholder="Digite uma nova senha    (:"></div>
            <div class="division-button">
            <input class="input-button" type="submit" value="ATUALIZAR SENHA" name="botao"> 
            </div>
        </form>
    
    </main>
</body>
</html>