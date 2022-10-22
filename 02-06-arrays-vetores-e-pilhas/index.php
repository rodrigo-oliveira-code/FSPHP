<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);
$arrA = array(1, 2, 4);
$arrB = [0, 1, 2, 3];

var_dump($arrA);


var_dump($arrB);

$arrayIndex = [
	"Brian",
	"Angus",
	"Malcolm"
];

$arrayIndex[ ]  = "Cliff";
$arrayIndex[ ] = "Phil";

var_dump($arrayIndex);

/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
	"vocal" => "Brian",
	"solo_guitar" => "Angus",
	"base_guitar" => "Malcolm",
	"bass_guitar" => "Cliff"
];
$arrayAssoc["drums"] = "Phil";

var_dump($arrayAssoc);
/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);
//dados de um banco
//tabelas 
//são usados por arrays multimensionais

$brian = ["Brian", "Mic"];;
$angus = ["name" => "Angus", "instrument" => "Guitar"];
$instruments = [
	$brian,
	$angus
];

var_dump($instruments);

var_dump([
	
]);

/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);
$acdc = [
	"vocal" => "Brian",
	"solo_guitar" => "Angus",
	"base_guitar" => "Malcolm",
	"bass_guitar" => "Cliff",
	"drums" => "Phil",
];

var_dump($acdc);