<?php
$num1 = 0;
$num2 = 1;

echo "First 10 Fibonacci Numbers are: ";

for ($i = 1; $i <= 10; $i++) {
    $fibonacci = $num1 + $num2;
    if ($fibonacci > 100) {
        break;
    }
    echo $fibonacci . " ";

    $num1 = $num2;
    $num2 = $fibonacci;
}