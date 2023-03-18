<?php
//checking if hardin(voter) is eligiable to vote.


/*
$voter ="19 years and above";
switch ($voter){
    case ($voter< "18years");
    echo "he ain't eligiable to vote";
    break;

    case ($voter >= "18 years");
    echo "voter eligiable to vote";
    break;
}

//checking if voter has pvc



$voter = "pvc";
if ($voter == "pvc"){
    echo "has pcv";
}else {
    echo "no pvc";
}

//check if voter's ward is 020

$voter_ward = "020";
if ($voter_ward == "020"){
echo "voter is eligible i to vote";
}


*/

//using switch statement

$voter = "19 years and above";
$voter1 = "pvc";
$voter_ward = "020";

switch ($voter){
    case ($voter< "18years");
    echo "he ain't eligiable to vote";
    break;

    case ($voter >= "18 years");
    echo "voter eligiable to vote";
}
switch ($voter1){
    case "pvc";
    echo "voter has pvc";
}


switch ($voter_ward){
    case "020";
    echo "eligible to vote";
    break;

    case "030";
    echo "voter is at ward another ward";
    break;

    default;
    echo "voter ain't eligiable to vote";
}


?>