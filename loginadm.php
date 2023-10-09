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
    <tr><td><label>Email:</label></td></tr>
    <tr><td><input type="email"></td>
    <tr><td><label>Senha:</label></td></tr>
    <tr><td><input type="password"></td>
</table>
<button>Enviar</button>
<a href="recuperarSenha.php">Esqueci minha senha</a>
    </form>
</body>
</html> --> 


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
            <tr><td><label>Usuário:</label></td></tr>
            <tr><td><div class="division-grid"><div class="division-icon"><i class='bx bx-user'></i></div><input class="input-style" type="email"></td></div> <!--Lembrar de colocar o nome para o uso do PHP--> </tr>

            <tr><td><label>Senha:</label></td></tr>
            <tr><td><div class="division-grid"><div class="division-icon"><i class='bx bx-lock-alt'></i></div><input class="input-style" type="password"></div></td></tr>

            </table>
            <td><tr><input class="input-button" type="submit"></tr></td>        
        </form>
    </main>
</body>
</html>
