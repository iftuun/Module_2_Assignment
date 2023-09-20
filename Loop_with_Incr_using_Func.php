<?php
echo 'PHP function that uses a for loop to print all even numbers from 1 to 20, ' . "\xA";


function printEvenNumbers() {
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            echo $i . ' ';
            
        }
    }
}

printEvenNumbers();


echo  "\xA";
echo 'step of 2.  Using For Loop, I am printing even numbers, The function
are taking the arguments like start as 1, end as 20 and step as 2. I called the
function to print.' . "\xA";


function even($start, $end, $step) {
    $start = ($start % 2 !== 0) ? ($start + 1) : $start;
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i. " ";
    }
}
even(1, 20, 2);


echo  "\xA";
echo 'step of 2.  Using While Loop, I am printing even numbers, The function
are taking the arguments like start as 1, end as 20 and step as 2. I called the
function to print.' . "\xA";


function even1($start, $end, $step) {
    $start = ($start % 2 !== 0) ? ($start + 1) : $start;
    
    while ($start <= $end) {
        echo $start . " ";
        $start += $step;
    }
}

even1(1, 20, 2);


echo  "\xA";
echo 'step of 2.  Using do While Loop, I am printing even numbers, The function
are taking the arguments like start as 1, end as 20 and step as 2. I called the
function to print.' . "\xA";


function even2($start, $end, $step) {
    $start = ($start % 2 !== 0) ? ($start + 1) : $start;
    do {
        echo $start . " ";
        $start += $step;
    } while ($start <= $end);
}

even2(1, 20, 2);

?>