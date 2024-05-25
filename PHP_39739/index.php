<?php 
   $x = 123;
   $y = "Hello World";

   //echo $x."<br/>".$y;

   $number1 = 100;
   $number2 = 20;
/* echo($number1 + $number2);
echo($number1 - $number2);
echo($number1 * $number2);
echo($number1 / $number2); */

$a = 12; //integer
$b = "Hello"; //string
$c = 100.50; //float
$d = true; //boolean (true or false);
$e = [991,"dog"]; //array
$e2 = array(991,"dog", 1); //array
$f = null; //null

//print_r($e);
//var_dump($e);
//echo $e[2];

//Loop
for($i=0; $i<count($e2); $i++){
    echo $e2[$i];
}
?>
