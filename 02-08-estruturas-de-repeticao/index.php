<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.08 - Estruturas de repetição");

/*
 * [ while ] https://php.net/manual/pt_BR/control-structures.while.php
 * [ do while ] https://php.net/manual/pt_BR/control-structures.do.while.php
 */
fullStackPHPClassSession("while, do while", __LINE__);

//$var1 = 10;




/*
 * [ for ] https://php.net/manual/pt_BR/control-structures.for.php
 */
fullStackPHPClassSession("for", __LINE__);
for($var10 = 11; $var10 >= 1; --$var10){
		var_dump($var10);
};

/**
 * [ break ] https://php.net/manual/pt_BR/control-structures.break.php
 * [ continue ] https://php.net/manual/pt_BR/control-structures.continue.php
 */
fullStackPHPClassSession("break, continue", __LINE__);


/**
 * [ foreach ] https://php.net/manual/pt_BR/control-structures.foreach.php
 */
fullStackPHPClassSession("foreach", __LINE__);