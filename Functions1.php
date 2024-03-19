<?php
   function sub($first, $second, $third) {
      $result = $first-$second-$third;
      echo "First number: $first \n";
      echo "Second number: $second \n"; 
      echo "Third number: $third \n"; 
      echo "sub: $result \n";
   }

   sub(10, 20, 50);

   $x=100;
   $y=200;
   $z=500;
   sub($x, $y, $z);

   function sayhello(){
      echo "Hello World";
   }

   sayhello();
 

   
?>