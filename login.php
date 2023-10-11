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
            <tr><><label>Usuário:</label></></tr>
            <tr><><div class="division-grid"><div class="division-icon"><i class='bx bx-user'></i></div><input class="input-style" type="email"></></div> <!--Lembrar de colocar o nome para o uso do PHP--> </tr>

            <tr><><label>Senha:</label></></tr>
            <tr><><div class="division-grid"><div class="division-icon"><i class='bx bx-lock-alt'></i></div><input class="input-style" type="password"></div></></tr>

            </table>
            <><tr><input class="input-button" type="submit"></tr></>        
        </form>
    </main>
</body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icons/support-icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/loginadm.css">
    <title>Login Adiministrador</title>
</head>
<body>
<form>
<table>
    <tr><><label>Email:</label></></tr>
    <tr><><input type="email"></>
    <tr><><label>Senha:</label></></tr>
    <tr><><input type="password"></>
</table>
<button>Enviar</button>
<a href="recuperarSenha.php">Esqueci minha senha</a>
    </form>
</body>
</html> --> 

