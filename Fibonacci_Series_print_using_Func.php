<?php
function Fibonacci($numTerms) {
    $a = 0;
    $b = 1;
    
    echo "Fibonacci Series (First $numTerms terms):\n";
    echo "$a, $b";

    for ($i = 2; $i < $numTerms; $i++) {
        $c = $a + $b;
        echo ", $c";
        $a = $b;
        $b = $c;
    }
}

$numTerms = 15;
Fibonacci($numTerms);
?>
