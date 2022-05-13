<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/stilo.css">
    <title> Cadastrar filme </title>
</head>
<body>
    <header>
        <figure>
            <img src="" alt="">
        </figure>
        <ul>
            <li> <a href="./index.php"></a> Home </li>
            <li> <a href="./lista.php"></a> Lista de filmes </li>
            <li> <a href="./cadastro.php"></a> Cadastrar filme </li>
        </ul>
    </header>
    <main>
        <form action="./lib/valida.php" method="post">
        <p>
            <label> Título: </label>
            <input name="titulo" type="text" id="box_titulo">
        </p>

        <p>
            <label> Gênero: </label>
            <input name="genero" type="text" id="box_genero">
        </p>

        <p>
            <label> Ano: </label>
            <input name="ano" type="number" id="box_ano">
        </p>

        <p>
            <label> Direção: </label>
            <input name="direcao" type="text" id="box_direcao">
        </p>

        <p>
            <input type="submit" value="Cadastrar">
            <input type="button" value="Cancelar" onclick="bt_cancelar()">
        </p>
        </form>
    
    </main>    
</body>
</html>