<?php
function printFibonacci($count) {
    $num=0;
    $num1 = 1;
    $num2 = 0;

    for ($i = 0; $i < $count; $i++) {
        echo $num1 . " ";

        $num = $num1 + $num2;
        $num1= $num2;
        $num2 = $num;
    }
}

echo "First 15 Fibonacci numbers are: ";
printFibonacci(15);