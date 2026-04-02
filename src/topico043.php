<?php
    echo"<h4>OPERADORES DE COMPARAÇÃO</h4>";

    $a=10; //numero do tipo inteiro
    $b="10"; //numero do tipo string
    echo "Igualdade = ".($a==$b)."<br>"; //true
    echo "Idêntico = ".($a===$b)."<br>"; //true, pra ser identico tem que ter o mesmo valor e o mesmo tipo
    echo "Não igual = ".($a!=$b)."<br>"; //false, se o igualdade é verdadeiro, isso automaticamente é falso
    echo "Não Idêntico = ".($a!==$b)."<br>"; //false
    //a variável $a é um número inteiro, a variável $b é um string/texto por estar entre aspas, ou seja, são iguais, mas não idênticas
    //os comandos echo vao mostrar a quantidade de variáveis, iguais, identicas, nao iguais, e nao identicas

    /*

    =  atribuir/receber valor a uma variável
    ==  igualdade, inverso de não igual (!=)
    === idêntico, inverso do identico (!==)

    */

?>

<hr>

<?php

    $a=10;
    $b=10;
    $c=11;
    echo "Menor: ".($a<$b)."<br>";
    echo "Menor ou igual: ".($a<=$b)."<br>";
    echo "Maior: ".($c>$b)."<br>";
    echo "Maior ou igual: ".($c>=$b)."<br>";
    //as variáveis a,b são menor do que a c
    //os comandos echo vao mostrar a quantidade de variáveis, menor, menor ou igual, maior, maior ou igual

?>

<hr>

<?php

echo"<h4>OPERADORES LÓGICOS</h4>";

//operador NÃO/NOT/!
//será verdadeiro caso a condição após o "!" seja falsa

    $a=50;
    $b=120;
    $c= ($a<=$b);
    $d= !($a<=$b);
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";

    //Exemplos do operador lógico NÃO:
    $c=20;
    $d=40;
    $e=500;
    $f=!($c>$d); //true, verdadeiro, a exclamação significa NÃO
    var_dump($f); //o comando var_dump mostra o valor da variável, e condição, a saída seria "bool(true)"

?>

<hr>

<?php

//operador E/AND/&&
//só será verdadeiro caso as 2 condições sejam verdadeiras

    $a=50;
    $b=120;
    $c=200;
    $d=(($a<=$b) and ($a<=$c));//true, variavel A é menor igual a variavel B, e mesma coisa a variavel C
    $e=(($a<=$b) &&  ($a>=$c));//false, a variavel A é menor igual a viavel B, mas não é maior igual a C
    //na linha acima, se tivesse um "!" na frente de "($a>=$c)", estaria dizendo que variável A, NÃO é maior que a C, ai seria verdadeiro
    var_dump($d);//o comando var_dump mostra o valor da variável, e condição, a saída seria "bool(true)"
    echo "<br>";
    var_dump($e);//false
    

?>

<hr>

<?php

//operador OU/OR/||
//será verdadeiro caso uma das condições sejam verdadeiras

    $a=50;
    $b=120;
    $c=200;
    $d=(($a>=$b) or ($a>=$c));//false, a primeira e a segunda condição são falsas
    $e=(($a>=$b) || ($a<=$c));//true, a primeira é falsa, mas a segunda é verdadeira
    var_dump($d);//false
    echo "<br>";
    var_dump($e); //o comando var_dump mostra o valor da variável, e condição, a saída seria "bool(true)"

    //exemplo, se pesquiso "torta de manga", se o google não achar o "manga", e achar o "torta", ele vai trazer resultado
    //se não achasse nem "torta" nem "manga", não traria nada
?>

<hr>

<?php

//operador XOR (eXclusive OR) - É um operador lógico, ideal para situações onde apenas uma opção deve ser verdadeira.
//diferentemente do OU/OR, vai ser verdadeiro somente quando só 1 condição for verdadeira, caso as 2 forem verdadeiras, será falso

    $a=50;
    $b=120;
    $c=200;
    $d=(($a<=$b) xor ($c<=$a));//true, a primeira condição é verdadeira, mas a segunda é falsa
    $e=(($a>=$b) xor ($a>=$c));//false, pois as duas condições são verdadeiras
    var_dump($d);//o comando var_dump mostra o valor da variável, e condição, a saída seria "bool(true)"
    echo "<br>";
    var_dump($e);//false

    //exemplo, em um sobrado, tem um interruptor para acender a luz no andar de baixo e no andar de cima
    //só vai acender a luz se o interruptor de cima estiver pra cima e o de baixo estiver pra baixo, ou vice versa, caso o de cima e o de baixo estejam pra baixo, a luz fica apagada

?>

<hr>

<?php

echo"<h4>OPERADOR TERNÁRIO</h4>";
//vai imprimir algo que eu queira na frente de uma "?" caso for verdadeiro, e vai ter algo na frente de um ":" caso for falso

    $a=50;
    $b=120;
    $c=200;
    $d=($a<=$b) ? "é verdade" : "é mentira"; //true
    $e=($a>=$c) ? "é verdade" : "é mentira"; //false
    echo "d = $d<br>e = $e";
    //vai aparecer "d = é verdade", porque a condição é verdadeiro/true, então vai aparecer o que está na frente do "?" e "e = é mentira", porque a condição é falsa/false, e o que está na frente do ":" é "é mentira"

?>