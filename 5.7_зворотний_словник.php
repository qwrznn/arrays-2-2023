<?php

$words = [
    "go" => [
        "іти",
        "їхати"
    ],
    "indigo" =>[
        "колір індиго",
        "синій"
    ],
    "walk" => [
        "іти"
    ],
    "house" => "дім",
    "arm" => [
        "рука",
        "влада"
    ],
    "blue" => [
        "блакитний",
        "синій",
    ],
    "ride" => [
        "їхати"
    ],
    "home" => "дім",
    "get" => [
        "отримати",
        "збагнути"
    ],
    "hand" => "рука"
];



foreach ($words as $word => $cl) {
    if (!is_array($cl)) {
        $translation[$cl][] = $word;
    } else {
        foreach ($cl as $l) {
            $translation[$l][] = $word;
        }
    }
}

// print_r($languages);

foreach ($translation as $key => $value) {
    if (!is_array($value)) {
        echo "$key:\n\t$value";
    } else {
        echo "$key: \n";
        foreach ($value as $v) {
            echo "\t$v\n";
        }

    }
}
echo "\n\n";
