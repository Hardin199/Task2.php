<?php


/*Control Structures Of Php
if....else statement 
the if...else statement is used to execute a certain code if a condition is true, and another if the condition is false.

If (condition) {code to be executed if the condition is true;}
Else {code to be executed if condition is false;}

The IF statement can also be used alone with out the else statemetn. that's if you do not need to do anything, in case the condition is false.


Example
*/
/*
$user = "moses";
if ($user == "moses12"){
    echo "true";
}else{

    echo "false";
}
    */

/*
Exampel 2

$Food = "i dont like yam";


if ($Food == "i like yam"){
    echo "allergic to yam";
}else{
    echo "yam is good for the body system";
     
}
*/

/*Example 3

$x = 30;
$y = 50;

if ($x == "is greater the 50"){
    echo "x is -20";
}else{
    echo "Y IS GREATER THE 50";
}
*/

//$drinks = array("fanta", "coca_cola","spirte");
//echo count($drinks);

//echo ($drinks[0]).", " .($drinks[1]). " and " .($drinks[2]).".";


/*
$drinks = array("fanta", "coca_cola", "sprite");

if ($drinks[0] == ""){
    echo "FANTA IS THE BEST";
}else{
    echo "coca_cola and spirte are in market";
}
*/


\

<link href="<?php site_url(); ?>/template/style.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
<div class="wrap">

    <header>
        <h1><?php site_name(); ?></h1>
        <nav class="menu">
            <?php nav_menu(); ?>
        </nav>
    </header>

    <article>
        <h2><?php page_title(); ?></h2>
        <?php page_content(); ?>
    </article>

    <footer>
        <small>&copy;<?php echo date('Y'); ?> <?php site_name(); ?>.<br><?php site_version(); ?></small>
    </footer>





?>