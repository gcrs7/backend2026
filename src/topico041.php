<!DOCTYPE html>
    <body>    
        <h1>OPERADORES ARITMÉTICOS</h1>
        <h4>aula 25/03</h4>

        <?php
        //operadores aritméticos:
            $a=10;
            $b=2;

            echo "Adição:".($a + $b); //Adição:12, o que está entre aspas, é texto, o ponto final serve pra separar, e o que há dentro de parenteses é a operação que deve ser feita.
            echo "<br>Subtração:".($a - $b); //8
            echo "<br>Multiplicação:".($a * $b); //20
            echo "<br>Divisão:".($a / $b); //5
            echo "<br>Módulo:".($a % $b); //0 , esse operador é resto da divisão
            echo "<br>Exponenciação:".($a ** $b); //100
        ?>

        <hr>

        <?php
        //operador de atribuição
            $a=10;
            $b=2;
            $a+=$b; //variável $a recebe o valor de $a mais $b
            $b-=5; //variável $b recebe o valor de $b menos 5

            echo "a = ".$a; //12
            echo "<br>b = ".$b; //-3

            $c=11;
            $d=6;
            $c%=$d; //variável $c recebe o valor de $c módulo $d ($c=11%6//$c=5)
            $d+=$a; //variável $d recebe o valor de $d mais $a

            echo "<br>c = ".$c; //5
            echo "<br>d = ".$d; //18 (a variável $a passa a valer 12 pela operação aritmética que ela apareceu na linha 24)

        ?> 
        
        <hr>

        <?php
        //operadores de string
            $a=7;
            $nome="gustavo";
            echo "$nome.$a";//vai imprimir o valor das 2 variaveis
            $c.="cinco";//c = 5."cinco"//c="5cinco"
            echo "<br> c = $c";//c =5cinco

        ?>

        <hr>

        <?php
        //operadores de incremente/descremento
            $x = 100;
            echo "x = ".++$x;//vai ser 101, se o ++ for antes da variável... o ++ adiciona 1 se for antes da variável (soma 1 primeiro e depois mostra o valor, isso seria o pré incremento), se o ++ estiver depois da variável, ele vai adicionar 1 também, mas vai mostrar o valor antes e depois adicionar 1, seria o pós incremento. Se for o -- subtrai 1
            echo "<br>x final = ".$x;//101

            $i=10;
            echo "<br>i = $i"; //i = 10
            $i++;//11
            $i++;//12
            ++$i;//13
            echo "<br>i = $i"; //i = 13
            $i--;//12
            --$i;//11
            echo "<br>i = $i"; //i = 11

        ?>

    </body>
</html>
