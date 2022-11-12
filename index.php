<?php
    echo 'Olá Mundo<br>';
    echo 'Marcelo Danelon';

    print('<h1>Escrevendo</h1>');
    print_r('<h2>Escrevendo denovo</h2>');

    $nome = 'Marcelo';
    $idade = 25;
    $altura = 1.75;
    $fumante = true;

    echo '<br>';
    echo $nome.'<br>';
    echo $idade.'<br>';
    echo $altura.'<br>';
    echo $fumante.'<br>';
    echo 'Olá '.$nome.', você tem '.$idade.' anos';

    echo '<hr>';
    echo gettype($nome).'<br>';
    echo gettype($idade).'<br>';
    echo gettype($altura).'<br>';
    echo gettype($fumante).'<br>';
    $altura = '1.75';
    echo gettype($altura).'<br>';
?>