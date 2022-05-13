<?php
    function conecta(){
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'locadora';
        
        $mysqli = mysqli_connect($host, $user, $password, $database);
       if (mysqli_connect_errno()){
           return null;
       } else {
           return $mysqli;
       }
    }

    function listaFilme(){
        $lista = [];
        $query = 'SELECT id, titulo, genero, ano, direcao FROM filmes;';
        $link = conecta();
        if($link !== NULL){
            $result = mysqli_query($link, $query);
            if($result){
                while($row = mysqli_fetch_row($result)){
                    //aqui o objeto row está sendo transformado no
                    //objeto filme, assim como será utilizado na 
                    //página listar carros
                    $filme = array('Id' => (INT) $row[0], 
                    'titulo' => $row[1], 'genero' => $row[2], 
                    'ano' => (INT) $row[3], 'direcao' => $row[4]);
                    array_push($lista, $filme);                
                }
            }        
        }
        return $lista;
    }

    function cadastraFilme($titulo, $genero, $ano, $direcao){
        $query = "INSERT INTO filmes (titulo, genero, ano, direcao)
        values('" .$titulo. "', '" .$genero. "', " .$ano. ", '" .$direcao. "');";
        $link = conecta();
        if($link !== NULL){
            $result = mysqli_query($link, $query);
            return $result;
        }

        else{
            return NULL;
        }
        
    }




?>