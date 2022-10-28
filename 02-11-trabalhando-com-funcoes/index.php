<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);

require __DIR__ . "/fuctions.php";

var_dump(functionName("PearlJam", "AC/DC", "Alter Bridge"));
var_dump(functionName("Rodrigo", "Schneider", "Teste"));

var_dump(optionArgs("Rodrigo", "teste", ""));
var_dump(optionArgs("RodrigoS"));
var_dump(optionArgs("Digo", "Schneider"));

/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);

$weight = 83;
$height = 1.83;
echo calcImc();

var_dump(calcImc());

/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);

$pay = payTotal(2501);
$pay = payTotal(5501);
$pay = payTotal(501);
$pay = payTotal(51.22);
echo $pay;
/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);

var_dump (myTeam("Rodrigo","Danilo","Nani","Kelly","Paulo","Alexandre","Luciana","Wellington"));