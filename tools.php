<?php

echo 'File connected' . '<br>';

function printArray(array $data) {
    foreach ($data as $key => $value) {
        echo $key . ' ' . $value . '<br>';
    }
}