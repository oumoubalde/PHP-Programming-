<?php
$num = 1;
$total = 0;
while ($num <=75){
	if ($num%2 != 0)

		$total = $total + $num;
		$num++;
	
}
echo "The sum of all odd number between 1 and 75 is $total";
?>
