<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="IMAGES-ICONS/support-icon.ico" type="image/x-icon">
    <style>
 @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;900&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
    body{
    background: #9E5AFF;
    display: flex;
    justify-content: center;
    height: 100dvh;
    align-items: center;
    }
    main {
    display: flex;
    justify-content: center;
}
    .container {
    display: grid;
    column-gap: 70px;
    grid-template-columns: 1fr 1fr;
    border-radius: 15px;
    background: #FFF;
    padding: 40px 50px;
    grid-column: 1/2;
    width: 70%;
    align-items:center;
}
    p{    margin-bottom: 30px;
         font-family: 'Inter', sans-serif;
         font-weight: 900;
        font-size: 55px;
        text-align: center;
    }

    .button {
        display: flex;
        justify-content: center;
    }

    .input-button {
    margin-top: 15px;
    /*padding: 8px 50px;*/
    font-family: 'Inter', sans-serif;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    font-size: large;
    width: 300px;
    height: 50px;
  }
  
  .input-button:hover {
    transform: translateY(-3px);
    background-color: rgb(128, 95, 247);
  }
  .botao{
    display:flex;
    justify-content:center;
  }

  .space-image {
    grid-column: 2/3;
  }

  @media screen and (max-width:768px) {
    
    .botao {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .button {
        margin-bottom: 10px;
    }

    .container {
        display: block;
        width: 90%;
        height:14.5cm;
    }

    p {

        font-size: 34px;
        text-align: center;
    }
    .input-button {
    
    width: 200px;
    height: 50px;
    font-size:small;
    }
    
    }
    </style>
    <title>Sistema de chamados</title>
</head>
<body>
<main>
<main>
    <div class='container'>
        <div>
            <p>CADASTRADO COM SUCESSO!</p>
            <div class="button">
            <a href='user.php'><input class='input-button' value='ENVIAR OUTRO CHAMADO' name='botao' type='submit'></a>
            </div>
        </div>
            <div class='space-image'>
            <img src='IMAGES-ICONS/IMAGE-INDEX.svg' alt='Ilustração na qual a personagem usa um computador' width='95%'>
    </div>
</div>
</main>

</body>
</html>