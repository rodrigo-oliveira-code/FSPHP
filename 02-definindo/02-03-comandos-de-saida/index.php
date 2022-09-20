<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

echo "<p>Olá Mundo!" . "<spam class ='tag'>#BoraDigão!</spam>", "</p>";

$hello = "Olá Mundo!";
$code = "<spam class ='tag'>#BoraDigão!</spam>";

echo "<p> $hello </p>";
echo '$code' . " " . "$code"; //aspas simples o php não iterpreta o código e aspas duplas

//variável protegida

$day = "dia";
echo "<p>Falta 1 $day para o show! </p>";
echo "<p> Faltam 2 {$day}s para o show! </p>"; //chaves protegem a variável, é o melhor padrão

echo "<h3>{$hello}</h3>";
echo "<h4>{$hello} {$code}</h4>";

?>

<h4><?= $hello; ?></h4>

<?php
/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);

print "$hello </br>";
print $code;

//print, diferente do echo, não aceita a vírgula
/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);

$array = [
  "company" => "UpInside",
  "course" => "FSPHP",
  "class" => "Comandos de Saída no PHP"
];

print_r($array);

echo "<pre>", print_r($array, true), "</pre>";

/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);


/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);


/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);