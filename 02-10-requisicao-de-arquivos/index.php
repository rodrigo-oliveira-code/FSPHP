<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.10 - Requisição de arquivos");

//TUDO PODE SER TRATADO
/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
fullStackPHPClassSession("include, include_once", __LINE__);
// usado para arquivos que preciso mas não são essenciais na aplicação
/*include "file.php";
echo "<p>Continue</p>";*/

//include __DIR__."/header.php";

$profile = new StdClass();
$profile->name= "Rodrigo";
$profile->company= "Schneider Sistemas";
$profile->email="rodrigo@penielchurchbr.com.br";
var_dump($profile);

include __DIR__ . "/profile.php";

/*
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */
fullStackPHPClassSession("require, require_once", __LINE__);
//usado para arquivos que são necessários na minha  aplicação
//require "file.php";

fullStackPHPClassSession("require, require_once", __LINE__);

require __DIR__ . "/config.php";

echo "<h1>" . COURSE . "</h1>";

var_dump(require __DIR__ . "/profile.php");