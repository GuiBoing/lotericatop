<?php

/*
Alunos:
       |Bryan Krüger
       |Guilherme Boing
       |Leonardo Viera
Turma:
       |2info1

*/

function repetveri{
$lista = array();
$dezenas = 10;

for ($x = 0;$x < $dezenas; $x ++){
    $lista[$x] = rand(1,60);
}

$count = count($lista)-1;

for ($i=0; $i < $count ; $i++) {
    for ($j = $count; $j > $i; $j--) {
        if ($lista[$i]==$lista[$j]) {
            //aqui coloca a funcçao de aleatoriedade de cada jogo, se der copia ela roda denovo.
        }
    }
}
