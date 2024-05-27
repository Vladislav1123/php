<?php

echo 'File connected' . '<br>';

function printArray(array $data) {
    foreach ($data as $key => $value) {
        echo $key . ' ' . $value . '<br>';
    }
}

function printWithWhile($assoc_array) {
    reset($assoc_array);
    while (list($key, $value) = each($assoc_array)) {
        echo $key . ' ' . $value . '<br>';
    }
}
printWithWhile($assoc_array);

function printWithDoWhile($assoc_array) {
    reset($assoc_array);
    $i = 0;
    do {
        $key = key($assoc_array);
        $value = current($assoc_array);
        echo $key . ' ' . $value . '<br>';
        $i++;
        next($assoc_array);
    } while ($i < count($assoc_array));
}

printWithDoWhile($assoc_array);

function printWithFor($assoc_array) {
    $keys = array_keys($assoc_array);
    $length = count($assoc_array);

    for ($i = 0; $i < $length; $i++) {
        $key = $keys[$i];
        $value = $assoc_array[$key];
        echo $key . ' ' . $value . '<br>';
    }
}

printWithFor($assoc_array);
