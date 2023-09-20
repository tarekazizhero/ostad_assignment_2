<?php
//Using  For Loop
function forLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}
echo "Even Numbers using for loop: ";
forLoop(2, 20, 2);
echo "<br>";


//Using a  While Loop
function whileLoop($start, $end, $step) {
    while ($start <= $end) {
        echo $start . " ";
        $start += $step;
    }
}
echo "Even Numbers using while loop: ";
whileLoop(2, 20, 2);
echo "<br>";


//Using a  Do While Loop
function doWhileLoop($start, $end, $step) {
    do {
        echo $start . " ";
        $start += $step;
    } while ($start <= $end);
}
echo "Even Numbers using do-while loop: ";
doWhileLoop(2, 20, 2);
