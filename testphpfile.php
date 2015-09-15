<?php


//TEST CODE CHANGE FOR GITHUB WILL IT UPLOAD? SUCCESS!//
//////////////////////////CODE 6///////////////////////////////////

$countries = array("PLANOtexas", "AbuDhabi", "Makkah", "Medina", "Dubai", "Sharjah", "AlAin", "Florida");
echo "In August I visited " .$countries[0]. ", " .$countries[7]. ".";
echo "In December I toured " .$countries[1]. ", " .$countries[2]. ", " .$countries[3]. ", " .$countries[4]. ", " .$countries[5]. ", " .$countries[6].".";


//////////////////////////CODE 5///////////////////////////////////
echo "<br />";
echo "THIS IS THE SERVER TEST SCRIPT";
echo "<br />";
echo $_SERVER['PHP_SELF'];
echo "<br />";
echo $_SERVER['SERVER_ADDR'];
echo "<br />";
echo $_SERVER['SERVER_NAME'];
echo "<br />";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br />";
echo $_SERVER['SERVER_PROTOCOL'];
echo "<br />";
echo $_SERVER['REQUEST_METHOD'];
echo "<br />";
echo $_SERVER['REQUEST_TIME'];
echo "<br />";
echo $_SERVER['QUERY_STRING'];
echo "<br />";
echo $_SERVER['HTTP_ACCEPT'];
echo "<br />";
echo $_SERVER['HTTP_HOST'];
echo "<br />";

//////////////////////////CODE 4///////////////////////////////////

function foodwrite() {
	echo "biryani";
	echo "<br />";
}

function counter() {
$x = 5;
	for ($a=0; $a<=5; $a++) {
		echo $a;
		echo "<br />";
	}
}

foodwrite();
counter();
//////////////////////////CODE 3///////////////////////////////////

$colour = $x = 1;

do {
	echo "the number is " .$x;
	echo "<br />";
	$x++;
}

while ($x <= 5); 
//////////////////////////CODE 2///////////////////////////////////

$food = "2"; //DECLARE VARIABLE

switch ($food) {
    case "1":
        echo "Your favorite food is Biryani!";
        break;
    case "2":
        echo "Your favorite food is Pulao!";
        break;
    case "3":
        echo "Your favorite food is Haleem!";
        break;
    default:
        echo "Your favorite food is neither Biryani, Pulao nor Haleem!";
}
/////////////////////////CODE 1////////////////////////////////////

$start = 0;
$end = 20;
$oddnum = array();
$evennum = array();
error_reporting(E_ERROR|E_WARNING|E_PARSE);

for ($a=$start; $a<=$end;$a++) {
	if ($a%2!=0) {
		$oddnum[] = $a;
		//echo "odd number: ".$a."<br />";
	} else {
		$evennum[] = $a;
		//echo "even number: ".$a."<br />";
	}
}

for($b= 0; $b<count($oddnum); $b++) {
	echo "<br />";
	echo "odd number is" .$oddnum[$b] ."<br />";
}

for($c= 0; $c<count($evennum); $c++) {
	echo ".<br />";
	echo "even number is" .$evennum[$c] ."<br />";
}
echo count($oddnum);
echo count($evennum);

?>