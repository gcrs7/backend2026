<h1>MANIPULAÇÃO DE ARRAYS</h1>

<?php
//posições:    0         1         2             3
    $nomes=["Fulano","Beltrano","Sicrano", "Astrogildo"];//criação de uma array com 4 elementos, o 0, o 1, o 2 e o 3, totalizando 4 elementos
    $total = count($nomes); //esse count vai contar quantos elementos tem dentro da array, retorna quantidade
    
    echo "Foram encontradas $total nomes no array.<br>"; //aqui vai mostrar impresso na tela quantos tem, no caso 4
    echo "Primeiro valor do array: ".$nomes[0]."<br>"; //aqui vai mostrar qual está na posição 0, ou seja,  o primeiro nome, no caso "fulano"
    echo "Último valor do array: ".$nomes[count($nomes)-1];//aqui vai mostrar o ultimo nome que tem na array, no caso "astrogildo", a formula traduzida fica 'quantidade - 1', ou seja, vai aparecer o ultimo, porque o count é 4, mas como os índices começam em 0, o útlimo está na posição 3, e no total tem 4 elementos, o 0, o 1, o 2 e o 3, com o count -1, ficaria 4-1=3
    echo "<hr>";

    for($i=0;$i<count($nomes);$i++){
        echo $nomes[$i]."<br>";
    }
    //esse for é pra mostrar cada nome que tem dentro da array, ele vai partir de 0, até o cont, o cont é 4 porque tem 4 nomes dentro da array
    //primeiro ele vai executar na posição 0, e vai imprimir o nome que está na posição 0 dentro da array, depois incrementa +1, e assim em diante, por isso ele mostra todos os nomes
    //vai fazer isso até chegar em 4, que é representado por "$i<count($nomes)"
?>

<hr>

<?php
//posição 0    1    2    3
    $uf=["SP","RJ","ES","MG"];
    echo "<pre>";print_r($uf);echo "</pre>"; //vai mostrar todo o conteudo e posição dos elementos da array
    array_push($uf, "TO");//array push, acrescenta mais um elemento à array, mais uma UF ao final, ou seja posição 4
    array_push($uf, "BA");//acrescenta mais uma UF ao final, ou seja posição 5
    array_push($uf, "RN");//acrescenta mais uma UF ao final, ou seja posição 6
    array_push($uf, "PR");//acrescenta mais uma UF ao final, ou seja posição 7
    array_pop($uf);//apaga o ultimo elemento do array, no caso o PR, que foi incluso por último
    echo "<pre>";print_r($uf);echo "</pre>";//vai mostrar todo o conteudo e posição dos elementos da array
    sort($uf);//organiza em ordem alfabética, igual o "order by" em banco de dados
    echo "<pre>";print_r($uf);echo "</pre>";//vai mostrar todo o conteudo e posição dos elementos da array
?>

<hr>

<h1>FOREACH</H1>

<?php
    $estudante=[
        "id"=>1,
        "nome"=>"Bete",
        "nota"=>9.5
    ];

    foreach($estudante as $pos=>$valor){ //para cada valor que estiver na variavel estudante, coloque cada um na variavel valor por vez, a variavel valor sempre vai mudar porque não uma array, é uma variável simples
        echo "<br>$pos"; //vai imprimir a posição dos valores
        echo "<br>$valor"; //vai imprimir todos os valores que tem na variável estudante, porque foi atribuido um item por vez na variavel $valor
        echo "<br>$pos: $valor"; //vai imprimir a posição e o valor na frente, unificando os dois echo acima no mesmo código   
        }
?>

<hr>

<?php
$multi=[
    [10,20,30],
    [40,50,60],
    [70,80,90]
];

for($i=0;$i<3;$i++){ //linhas representadas pela variavel $i
    for($j=0;$j<3;$j++){ //colunas representadas pela variavel $j
        echo $multi[$i][$j]."  ";//vai imprimir os itens da array, separados com um espaço, porque deixei um espaço entre aspas
    }
    echo "<br>";
}
?>