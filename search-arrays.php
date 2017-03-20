<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


$resultTina = array_search('Tina', $names, true);
var_dump($resultTina);

$resultBob = array_search('Bob', $names, true);
var_dump($resultBob);


?>