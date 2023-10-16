<?php
$books = ["Властелин колец" => ["Толкиен", 1954],
"Гарри Поттер и тайная комната" => ["Джоан Роулинг",1998],
"Приключения Шерлока Холмса" => ["Конан Дойл",1892],
"Зло под солнцем" => ["Агата Кристи",1941]
];

ksort($books);
print_r($books);

function cmp($a,$b)
{
  if ($a[0] > $b[0])
    return -1;
  elseif ($a[0]==$b[0])
    return 0;
  else
    return 1;
}
uasort($books,"cmp"); // сортируем массив с помощью функции cmp
foreach ($books as $key => $book) { // выводим массив
    echo "$book[0]: \"$key\", $book[1]\n";
}

function try_walk($val, $key, $data)
{  
  echo "<p>$data \"$key\", автор $val[0] рік $val[1]</p>\n";
//   print_r($val);
}

array_walk($books, "try_walk", "Книга");