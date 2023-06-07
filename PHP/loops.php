<?php
$condition = true;


/* lol do not try to run this !! 
while($condition){
    echo rand();
}
*/
$x = 1;


/*

--- while loop 

while($x <=5){
    echo "The number is :" .$x . PHP_EOL;
    $x++;
}
*/

/*

--- do while 


do {
    echo "The number is :" .$x . PHP_EOL;
    $x++; 
} 
while($x<=5);
*/


/*
The PHP for Loop
The for loop is used when you know in advance how many times the script should run.

Syntax
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}

for ($i=0;$i <=10;$i++){
    echo "The number is ".$i .PHP_EOL;
}
*/

/*
The PHP foreach Loop
The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

Syntax
foreach ($array as $value) {
  code to be executed;
}


*/
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $color){
    echo "$color".PHP_EOL;
}
