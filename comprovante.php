<?php

$q1 = $_POST["l1"];
$q2 = $_POST["l2"];
$q3 = $_POST["l3"];

$q4 = $_POST["b1"];
$q5 = $_POST["b2"];
$q6 = $_POST["b3"];

$q7 = $_POST["p1"];
$q8 = $_POST["p2"];
$q9 = $_POST["p3"];

$q10 = $_POST["d1"];
$q11 = $_POST["d2"];
$q12 = $_POST["d3"];

$obs= $_POST ["obs"];
$valorTotal = 0.00;

if(isset($_POST["opcao1"])){
    $valorTotal = $valorTotal + (25.60 * $q1);
}

if(isset($_POST["opcao2"])){
    $valorTotal = $valorTotal + (18.00 * $q2);
}

if(isset($_POST["opcao3"])){
    $valorTotal = $valorTotal + (21.20 * $q3);
}

if(isset($_POST["bebida1"])){
    $valorTotal = $valorTotal + (4.60 * $q4);
}

if(isset($_POST["bebida2"])){
    $valorTotal = $valorTotal + (3.50 * $q5);
}

if(isset($_POST["bebida3"])){
    $valorTotal = $valorTotal + (3.50 * $q6);
}

if(isset($_POST["p1"])){
    $valorTotal = $valorTotal + (45.50 * $q7);
}

if(isset($_POST["p2"])){
    $valorTotal = $valorTotal + (55.50 * $q8);
}

if(isset($_POST["p3"])){
    $valorTotal = $valorTotal + (47.50 * $q9);
}




if(isset($_POST["d1"])){
    $valorTotal = $valorTotal + (16.90 * $q10);
}

if(isset($_POST["d2"])){
    $valorTotal = $valorTotal + (15.50 * $q11);
}

if(isset($_POST["d3"])){
    $valorTotal = $valorTotal + (14.50 * $q12);
}

echo "Pedido realizado com sucesso!<br>";
echo "Sua conta ficou em R$: ", $valorTotal;
echo "<br>Obs: ", $obs;
echo "<br><a href='cardapio.html'>voltar</a>";
?>

