<?php
$persons = ["Иванов", "Петров", "Сидорова","Васильев", "Михайлов", "Джоан Роуланг", "Агата Крісті"];
$triples = array_chunk($persons, 3); // делим массив на подмассивы по три элемента
print_r($triples);
foreach ($triples as $k => $table) { // выводит полученные тройки
  echo "В группе $k : \n";
  foreach ($table as $pers) 
    echo " \n$pers";
   echo "\n";
 }