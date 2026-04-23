<?php
    $idade = 16;

    if ($idade >= 18) 
        {
        echo "Você é maior de idade.";
        } 
    else 
        {
        echo "Você é menor de idade.";
        }

?>

<hr>

<?php
$hora = 15;

if ($hora < 12) {
    echo "Bom dia!";
} elseif ($hora < 18) {
    echo "Boa tarde!";
} else {
    echo "Boa noite!";
}
?>

<hr>

<?php
$semaforo = "azul";

if ($semaforo == "verde") {
    echo "SIGA";
} elseif ($semaforo == "amarelo") {
    echo "REDUZA A VELOCIDADE";
} elseif ($semaforo == "vermelho") {
    echo "PARE";
} else {
    echo "COR INVÁLIDA";
}

?>

<hr>

<?php
$idade = 20;
$mensagem = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo $mensagem;
//isso é um IF e ELSE sendo feito em uma linha só
?>

<hr>

<?php
$diaSemana = date('w');  // Retorna o dia da semana em número (0-6)

switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;//o break é o que faz o algoritmo sair fora, se o case for 0, ele vai sair nesse case.
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
?>

<hr>

<?php
date_default_timezone_set('America/Sao_Paulo');
//define que eu quero o horário de são paulo

echo date('d/m/y H:i:s');
//vai mostrar a data, com dia mes e ano, e horas com hora, minuto, e segundo
?>

<hr>

<?php
$nome = "uninove";
echo "nome = $nome<br>";
echo "md5 = ". md5($nome);
$hash = password_hash($nome, PASSWORD_DEFAULT);
echo "<br>hash = ". $hash;
//o md5 criptografa com 32 caracteres contendo letras de A a F somente com letras minusculas, e numeral de 0 a 9
//o hash criptografa com 64 caracteres contendo todas as letras do alfabeto, misturando maiusculas e minusculas, numeral de 0 a 9 e caracteres especiais
?>

