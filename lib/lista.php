<?php
    $lista = []; //vetor
    $filme = array('titulo' => 'Bastardos Inglórios', 'genero' => 'Drama/Guerra', 'ano' => 2009, 'direcao' => 'Quentin Tarantino');
    //acima é um objeto
    array_push($lista, $filme); //joga o objeto "filme" para dentro do vetor "lista"
    $filme = array('titulo' => 'Your Name', 'genero' => 'Drama/Fantasia', 'ano' => 2016, 'direcao' => 'Makoto Shinkai');
    array_push($lista, $filme);

    function exportaLista (){
        return $GLOBALS['lista']; //função que recebe o valor que está 
        //dentro da lista (valor filme)
        
    }