<h1>VARIÁVEIS DO TIPO "ARRAY"</h1>

<h3>ARRAY INDEXADA</h3>
<?php
$a=30;
$a=10;
$a=5;
echo "<br>a = $a"; //a variável vai sempre ter o ultimo valor informado, no caso aqui será 5

//ARRAY INDEXADA:
$arr=[30,10,5];//array indexada, tem 3 valores/índices
//    0  1  2 essas são as posições dos valores dentro dessa variável array
$arr[0]+=5;//nesse caso a posição 0 da array "$arr", vai receber +5, ou seja, o valor passa a ser 35
echo "<br>arr[0] = ".$arr[0];//sintaxe para impressão de array indexada, nesse caso vai imprimir 30
echo "<br>arr[1] = ".$arr[1];//para imprimir o 10
echo "<br>arr[2] = ".$arr[2];//para imprimir o 5

$uf=["SP","RJ","MG","ES"];
//     0    1    2    3
echo "<br>UF: ".$uf[2];//vai imprimir MG

echo "<pre>";print_r($uf);echo "</pre>";//comando para mostrar todos os valores que tem em uma array, com as posições/índices
//"<pre>" é uma TAG, nao um comando, e é usado para pré formatação
//é usado somente pra testar, nunca fica no código

?>

<hr>

<h3>ARRAY ASSOCIATIVA</h3>
<?php

$estudante=[
    "id"=> 1, //nesse caso o valor não está na posição 0, está na posição "id"
    "ra"=> 123456,
    "nome"=> "Bete",
    "curso"=>"TADS"
];

echo "<br>id: ".$estudante["id"];//sintaxe para saída de id
echo "<br>ra: ".$estudante["ra"];//para ra
echo "<br>nome: ".$estudante["nome"];//para nome
echo "<br>curso: ".$estudante["curso"];//para curso
/*
Vai mostrar a saída:
id: 1
ra: 123456
nome: Bete
curso: TADS
*/

echo "<pre>";print_r($estudante);echo "</pre>";//pra mostrar todas os valores dessa array pré formatado
?>

<hr>

<h3>ARRAY MULTIDIMENSIONAL (MATRIZ)</h3>
<?php
$matriz=[ //a variável multidimensional/matriz, está sempre relacionado à linha e coluna
    [10,"navio",30],
    [40,"bote",60,"ilha"],
    ["agua",80,"aviao"]
];
echo"<br>". $matriz[1][2];//saida 60
//primeiro vem o br entre aspas para pular uma linha, depois eu uso um ponto final pra unir a variável
//primeiro colchetes vem a posição da linha, e o segundo vem a posição da coluna, SEMPRE COMEÇANDO EM 0, ou seja, a primeira linha, é a linha 0

/*
Para as saídas (códigos abaixo):
agua
navio
bote
aviao
*/

echo"<br>". $matriz[2][0];
echo"<br>". $matriz[0][1];
echo"<br>". $matriz[1][1];
echo"<br>". $matriz[2][2];

echo "<pre>";print_r($matriz);echo "</pre>";//pra mostrar todas as informações dessa array, mostrando as linhas e as colunas em cada linha
?>

<hr>

<h3>ARRAY MULTIDIMENSIONAL (MATRIZ) + ASSOCIATIVA</h3>
<?php
$bd=[
    ["id"=>1,"nome"=>"Bete","curso"=>"TADS"],
    ["id"=>2,"nome"=>"Cleide","curso"=>"TBD"],
    ["id"=>3,"nome"=>"Beto","curso"=>"TJD"]
];
/*
Para as saídas (códigos abaixo):
2
TJD
Bete
*/
echo"<br>". $bd[1]["id"];
echo"<br>". $bd[2]["curso"];
echo"<br>". $bd[0]["nome"];
//eu informo a linha, a coluna não é por 0,1,2... é pelo próprio nome, por ser matriz com associativa
?>