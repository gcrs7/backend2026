
<?php
    echo "<h1>Recebe</h1>";
    echo"<pre>"; 
        print_r($_POST); 
    echo"</pre>";           //tecnica pra mostrar os dados de um formulário

    $login=$_POST["login"];
    $senha=$_POST["senha"];

    echo 
        "Login: <b>$login</b><br>";
    echo 
        "Senha: <b>$senha</b><br>";

?>