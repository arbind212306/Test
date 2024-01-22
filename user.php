<?php

function printFabonnaci(int $num) {
    if ($num <= 2) {
        return 2;
    }

    echo printFabonnaci($num-2) + printFabonnaci($num -1);
}

echo printFabonnaci(5);

// 0 1 1 2 3 5 