<?php

$movies = ["Пірати Карибського моря. Прокляття Чорної перлини" => ["Гор Вербінскі", 2003],
   "Титанік" => ["Джеймс Камерон", 1997],
   "Володар перснів: братсво кільця" => ["Пітер Джексон", 2001],
    "Форрест Гамп" => ["Роберт Земекіс", 1994],
];

//сортування за назвою
ksort($movies); 
print_r($movies);

function cmp_director($a,$b)
{ // сортування за прізвищем режисера
return ($a[0] <=> $b[0]);
}

uasort($movies, "cmp_director");
foreach ($movies as $key => $movie) { 
   echo "$movie[0]: \"$key\", $movie[1]\n";
}

function cmp_year($a,$b)
{ // сортування за роком випуску
return ($a[1] <=> $b[1]);
}

uasort($movies, "cmp_year");
foreach ($movies as $key => $movie) {
    echo "$movie[0]: \"$key\", $movie[1]\n";
}


function try_walk($val, $key, $data)
{  
  echo "$data \"$key\", режисер $val[0], рік випуску $val[1] \n"; 
}

array_walk($movies, "try_walk", "Фільм");