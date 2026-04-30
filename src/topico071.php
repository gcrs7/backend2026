<?php
//"while" singifica "enquanto"
echo "<h1>While (Enquanto)</h1>";

$i = 0;//valor inicial

while ($i <= 5) { //enquanto a variável i for menor ou igual a 5, execute os comandos abaixo
    echo "O valor de i é: $i <br>"; //vai mostrar o valor da variavel na tela
    $i++; //vai incrementar +1 à variável
}

//ele só vai parar de executar quando o valor da variável for maior que 5
//o valor que torna a condição falsa é sempre o próximo valor que não é impresso na tela

/*
Saída: 0 1 2 3 4 5
1) Valor inicial? R: 0
2) Condição? R: $i<=5
3) Contador? R: $i++
4) Quantas vezes o looping foi executado? R: 6
5) Valor que torna a condição como falsa? R: 6
-----------
Saída: 11 12 13 14
1) Valor incial? 11
2) Condição? $i<15 ou $i<=14
3) Contador? $i++
4) Quantas vezes o looping foi executado? 4
5) Valor que torna a condição como falsa? 15
-----------
Saída: 4 3 2 1 0
1) 4 
2) $i>=0 ou $i>-1
3) $i--
4) 5
5) -1
-----------
Saída: 0 2 4 6 8 10
1) 0
2) $i<=10
3) $i++;$i++ ou $i=$i+1 ou $i+=2(o certo é usar esse)
4) 6
5) 12 (seria 11, mas como está incrementando de 2 em 2, é o 12 que faz a condição ser falsa)
*/
?>

<hr>

<?php
//Do while siginifica "faça enquanto"
echo "<h1>Do While (Faça Enquanto)</h1>";

$i=7;

do{ //faça os comandos abaixo
    echo "$i"; //escreva o valor da variavel
    $i++; //incremente +1 à variavel
}while($i<5); //enquanto a variável for menor que 5

//faça algo (do), equando a condição (while) for verdadeira
//a diferença do do...while e do while é que ele executa pelo menos 1 vez, e depois verifica a condição

/*
Saída: 7
1) 7
2) $i<5
3) $i++
4) 1
5) 8
*/
?>

<hr>

<?php
echo "<h1>For (Para)</h1>";

//o FOR não precisa ter valor inicial

for($i=0;$i<5;$i++){ //para o i começando de 0, até ser menor que 5, incremente +1
    echo "$i"; //imprima o valor de i
}

//também poderia ser: for($i=0;$i<5;$i++) echo "$i"; esse é um looping de uma linha só
?>

<hr>

<?php
//Looping aninhado, é um looping dentro de outro
echo "<h1>Looping aninhado (Um Looping dentro de outro)</h1>";

for($i=0;$i<3;$i++){ //chamado de looping externo, variavel i começando em 0, acrescente +1 até chegar em 2 (menor que 3)
    for($j=0;$j<2;$j++){ //chamado de looping interno, variavel j começando em 0, acrescente +1 até chegar em 1 (menor que 2)
        echo"$i $j<br>"; //imprima os valores de i e j até as condições serem falsas
    }
}

/*
para cada 1 vez que executa o looping externo, ele executa todas as vezes o looping interno

A saída seria: 
0 0 executou o I (começou em 0), executa o J (comecou em 0)
0 1 agora executa só o J (o i continua em 0, e o J vai pra 1)
1 0 executa o I denovo, porque o J é pra executar até ser menor que 2, no caso 1, e o J executa denovo começando em 0
1 1 executa só o J denovo (o I continua em 1, e o J executa denovo)
2 0 (e assim em diante...)
2 1
-----------
Se a saída fosse:

I J

3 0
3 1
3 2
4 0
4 1
4 2 

o código seria:

for($i=3;$i<5;$i++){ //chamado de looping externo, variavel i começando em 3, acrescente +1 até chegar em 4 (menor que 5)
    for($j=0;$j<3;$j++){ //chamado de looping interno, variavel j começando em 0, acrescente +1 até chegar em 2 (menor que 3)
        echo"$i $j<br>"; //imprima os valores de i e j até as condições serem falsas
    }
}

*/
?>