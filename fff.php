<?php
function addition($first, $second) {
    $result = $first+$second;
    echo "First number: $first \n";
    echo "Second number: $second \n";
    echo "Addition: $result \n";
 }

 # Actual arguments more than formal arguments
 addition(10, 20, 30);

 # Actual arguments fewer than formal arguments
 $x=10;
 $y=20;
 addition($x);

   ?>