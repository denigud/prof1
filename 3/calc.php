<?php

function calc()
{
    $a = $_GET['a'];
    $b = $_GET['b'];
    $operation = $_GET['operation'];

    switch ($operation == '+') {
        case '+':
            echo $a."+".$b."=";
            return $a + $b;
            break;
    }

}

