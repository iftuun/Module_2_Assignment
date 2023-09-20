<?php
function generateFibonacci($end) {
    $a = 0;
    $b = 1;
    
    
    echo "First $end Fibonacci numbers: ";
    echo $a . ' ' . $b . ' ';
    
    
    for ($i = 2; $i < $end; $i++) {
        $c = $a + $b;
        if ($c > 100) {
            break;
        }
        
        echo $c . ' ';
        $a = $b;
        $b = $c;
    }
}

generateFibonacci(10);

echo  "\xA";
echo "If Fibonacci number is greater than 100, break out of the loop using the break statement, ";

generateFibonacci(30);

?>
