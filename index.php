<?php 

$users1 = ["John" => "qwerty", "Nicole" => "asdf", "Mark" => "ww"];
$users2 = ["Joan" => "1234", "Mark" => "poiu", "Nicole" => "ggg"];
//$users = ["Joan", "Mark", "girl" => "Nicole", "boy" =>"John", "Bob"];

$result = array_merge($users2, $users1);
// $result1 = $users2 + $users1;
$result1 = array_merge_recursive($users2, $users1);
$keys = array_intersect_key($users1, $users2);
$add = array_intersect_key($result1, $keys);
$add1 = array_diff_key($result1, $add);
print_r($result);
print_r($result1);
print_r($keys);
print_r($add);
print_r($add1);

// print_r($users1);

// var_dump($users2);
// var_dump($users);

// echo $users2["Joan"];