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

  $article = "<article><h1>%s</h1><p>%s</p></article>";
  $title = "{$hello}  {$code}";
  $subtitle = "Aliquam tristique, nunc nec pellentesque volutpat, arcu orci dignissim orci, ac tempus turpis erat at 
  massa. Integer tristique urna in luctus convallis. Nullam tempus accumsan lacinia. Aenean in risus in 
  nisl suscipit ultrices. Sed eros nunc, ultricies in lacinia sed, ornare ac orci. In condimentum consequat 
  dolor vel efficitur. Pellentesque id nulla est. Vivamus suscipit nec ligula non posuere. Pellentesque
  libero augue, rhoncuts ut libero non, euismod congue ipsum. Nam accumsan lectus ac metus volutpat consequat.
  Pellentesque non est eget nulla feugiat sagittis. Nunc a viverra dui. Quisque fermentum imperdiet sem 
  vel iaculis";

  printf($article, $title, $subtitle);
  echo sprintf($article, $title, $subtitle);
/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);

$company = "<article><h1>Escola %s</h1><p>Curso <b>%s</b><b>, aula </b>%s</p></article>";
vprintf($company, $array);


/**
' * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);

var_dump(
     $array,
     $hello,
     $code,
     $company
);