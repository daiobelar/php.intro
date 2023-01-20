<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
print_r($categorias);
$nome = 'Daiane'; 
$idade = 77;

//var_dump($nome, $idade);

if($idade >= 0 && $idade <= 12) {
    for($i =0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo "O nadador" ,$nome, "compete na categoria infantil";
    }
    
    }
else if($idade >=13 && $idade <=18) {
     for( $i=o;  $i <= count($categoria); $i++)
     {
        if($categoria[$i] == 'adolescente')
            echo "O nadador", $nome, "compete na categoria adolescente";
     }

    }

else{
    for( $i=o;  $i <= count($categoria); $i++)
    {
       if($categoria[$i] == 'adulto')
           echo "O nadador", $nome, "compete na categoria adulto";
    }
                echo "O nadador ",$nome," compete na categoria 3ª idade";
            
         
    };

