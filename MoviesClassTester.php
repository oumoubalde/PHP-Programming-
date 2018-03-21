<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict// EN"
"http://www.w3.org/TR/xhtml/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Movies Class Tester </title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>

<body>

<h1>Movies Class Tester</h1>
<h2>For grading purposes only</h2>

<?php
$MinAge=1;
$MaxAge=80;
$MoviesClassThresholds=array(
	array("age" => 0, "price" => "Free"),
	array("age" => 5, "price" => "half price"),
	array("age" => 18, "price" => "Full price"),
	array("age" => 56, "price" => "\$2 off"),
	array("age" => $MaxAge+1, "price" => "Undefined")
	
);

$ThresholdCount=count($MoviesClassThresholds);
$ThresholdIndex=0;
require_once("class_Movies.php");
$Ticket=new Movies();
echo "<p>\n";

for ($i=$MinAge; $i<=$MaxAge; ++$i){
	if ($i>=$MoviesClassThresholds[$ThresholdIndex]["age"]){
		echo "***These tickets are ".
		strtolower($MoviesClassThresholds[$ThresholdIndex]["price"]).
		"***<br/>\n";
		++$ThresholdIndex;
	}
	
	$Ticket->SetAge($i);
	echo "For someone age $i, the ticket price is \$".
	trim(sprintf("%4.2f",$Ticket->GetPrice())).
	"<br/>\n";
}

echo "</p>\n";

?>
</body>
</html>