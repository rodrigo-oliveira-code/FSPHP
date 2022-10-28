<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);
//constantes devem ser declaradas separadas

define("COURSE", "FULLSTACK");
const AUTHOR = "RODRIGO";

$formation = true;
if($formation){
    define("COURSE_TYPE", "Formação");
} else{
    define("COURSE_TYPE", "Curso");
}

echo "<p>COURSE_TYPE COURSE AUTHOR</p>"; //AQUI ELE SÓ EXIBE
echo "<p>", COURSE_TYPE, ", ", COURSE, ", ", AUTHOR, "</p>"; //aqui tem os parametros
echo "<p>". COURSE_TYPE. ", ". COURSE. ", ". AUTHOR. "</p>"; //aqui é por concatenação

class Config
{
    const USER = "root";
    const HOST = "localhost";

    public function getArg()
    {

    }
}

/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);
