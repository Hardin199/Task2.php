<?php 





//ARRAYS <arrays symbol is kown as array()>

//An array stores mutiple values in one singlle variable.
/*
Example
If you have a list of items (a list of car names, for example), storing the cars in single variables could look like this:

$cars1 = "Volvo";
$cars2 = "BMW";
$cars3 = "Toyota";

*Types of arrays
They're three types of arrays, wish re:

1.Indexed arrays- arrays with numeric index
2.Associative arrays- arrays with named keys
3.Multidimentional arrays- arrays containing one or more arrays










*INDEXED ARRAYS()
indexed arrays re data collection of element from same type.
                           OR
       indexed arrays re listed order group for variable of the same type.                  

       1.COUNT <count()>
count () function is used to return the length of (the number of element) of an array:
EXAMPLE;

*$cars = array("Volvo", "BMW", "Toyota");
      echo count($cars);
      

*$names = array("tobi", "prince", "kenneth", "uzo", "hardin");
echo count($names);
*/







/*There re two ways to create and indexed arrays;
1.automatic assigned,
2.manual assigned. 

*AUTOMATIC ASSIGNED EXAMPLE;
$cars = array("volvo", "bmw", "toyota");

*$MANUAL ASSIGNED EXAMPLE;
$cars[0]
$cars[1]
$cars[2]*/

//EXAMPLE1:

//$cars = array("Volvo", "BMW", "Toyota");
//echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";


//EXAMPLE2.
/*
$countrys = array("us", "london", "canada", "uk");
echo count($countrys);

$countrys = array("nigeria", "london", "canada", "uk");
echo "I don't like the " . ($countrys[0]) .", " . "buh i do love to go for vacation at " . ($countrys[2]) ." and " . " return back to " . ($countrys[1]). ".";
*/

/* 
EXAMPLE3.
/*
$clubs = array("Fifa", "manchester_united", "liverpool", "real_madrid");
echo "If a match was hold by ". ($clubs[0]) ."," ." and ". ($clubs[2]). " played  against ". ($clubs[1]). " and won the match". "." . " What will be the fate of " . ($clubs[3]) . " in the finial match"."?";
*/
/*
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
*/



?>