<?php
$flipCount = 0;
do {
    $flip = rand(0,1);
    $flipCount ++;
    if ($flip){
        echo "<div class=\"coin\">Head</div>";
    }
    else {
        echo "<div class=\"coin\">Tail</div>";
    }
} while ($flip);
$verb = "were";
$last = "flips";
if ($flipCount == 100) {
    $verb = "was";
    $last = "flip";
}
echo "<p>There {$verb} {$flipCount} {$last}!</p>";
