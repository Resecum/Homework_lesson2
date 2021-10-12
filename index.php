<?php
$name = 'Aleks';
$age = 22;
$pi = 3.1415926535897932384626433832795;
$arrNames1 = [‘alex’, ‘vova’, ‘tolya’];
$arrNames2 = [‘alex’, ‘vova’, ‘tolya’, [‘kostya’, ‘olya’]];
$arrNames3 = [‘alex’, ‘vova’, ‘tolya’, [‘kostya’, ‘olya’, [‘gosha’, mila]]];
$arrNames4 = [[‘alex’, ‘vova’, ‘tolya’], [‘kostya’, ‘olya’], [‘gosha’, mila]];
echo "Имя $name ";
print "возраст $age \n";
print_r ("Pi = $pi \n");
print_r($arrNames1);
print_r($arrNames2);
print_r($arrNames3);
print_r($arrNames4);
?>


