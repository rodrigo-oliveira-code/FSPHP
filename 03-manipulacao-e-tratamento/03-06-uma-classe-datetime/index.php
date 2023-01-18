<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.06 - Uma classe DateTime");
/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);

define("DATE_BR", "d/m/Y H:i:s");

$dateNow = new DateTime();
$dateBirth = new DateTime("1986-10-10");    // 1986-10-10 00:00:00
$dateStatic = DateTime::createFromFormat("d/m/Y", "10/10/1986"); // 1986-10-10 00:00:00


var_dump(
    $dateNow,
    $dateBirth,
    $dateStatic
);

var_dump([
    $dateNow->format(DATE_BR),
    $dateBirth->format(DATE_BR),
    $dateStatic->format(DATE_BR)
]);

echo "<p>Hoje é dia {$dateNow->format(DATE_BR)}</p>";

$newTimeZone = new DateTimeZone("Pacific/Apia");
$newDateTime = new DateTime("now", $newTimeZone);

var_dump([
    $newTimeZone,
    $newDateTime,\
    $dateNow
]);

/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval", __LINE__);


$dateInteval = new DateInterval("")
/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);
