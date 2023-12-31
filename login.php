<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="IMAGES-ICONS/support-icon.ico" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="STYLE/config.css">
    <title>Sistema de Chamado</title>
</head>

<body>
    <main style="display:flex; justify-content:center;">
        <form action="PHP/controler.php" method="POST">
            <h1 class="login-title">LOGIN</h1>
            <label>Usuário:</label>
            <div class="division-grid">
                <div class="division-icon"><i class='bx bx-user'></i></div>
                <input style="font-size: 12px;" class="input-style" type="text" name="user-admin">
            </div> <!--Lembrar de colocar o nome para o uso do PHP--> </tr>

            <label>Senha:</label>
            <div class="division-grid">
                <div class="division-icon"><i class='bx bx-lock-alt'></i></div>
                <input style="font-size: 12px;" class="input-style" type="password" name="password-admin">
            </div>
            <a href="verificacao.php">
                <p class="text-password">Esqueceu a senha?</p>
            </a>
            <div class="division-button">
                <input style="text-transform: uppercase;" class="input-button" type="submit" name="botao" value="Enviar">
            </div>
            <div class="social-message">
                <div class="line"></div>
                <p class="message">CONEXÕES COM O PROJETO</p>
                <div class="line"></div>
            </div>
            <div class="icons-space">
                <a href="mailto:"><i class='bx bx-envelope' style="font-size:50px; cursor:pointer;"></i></a>
                <a href="https://github.com/kauansilva001/Technical-Support"><i class='bx bxl-github' style="font-size:50px; cursor:pointer;"></i></a>
            </div>
        </form>
    </main>
</body>

</html>