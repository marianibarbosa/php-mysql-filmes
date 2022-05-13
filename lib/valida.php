<?php
    include './mysql.php';

    if(isset($_POST) && isset($_POST['titulo']) && isset($_POST ['genero']) 
    && isset($_POST ['ano']) && isset($_POST ['direcao'])){
        $titulo = $POST['titulo'];
        $genero = $POST['genero'];
        $ano = (INT) $POST['ano'];
        $direcao = $POST['direcao'];

        $resposta = cadastraFilme($titulo, $genero, $ano, $direcao);
        if($resposta === NULL || $resposta === false){
            header('Location: ../cadastro.php?erro=1');
        }

        else{
            header('Location: ../carros.php');
        }
    }

        else{
            header('Location: ../cadastro.php?erro=1');
    }



?>