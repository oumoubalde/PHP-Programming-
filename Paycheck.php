<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Process Paycheck Data</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h2 style = "text-align:center">Process Paycheck Data</h2>
<?php
$errors = 0;
if (is_numeric($_POST['hours'])) {
     if (($_POST['hours']) > 0) {
          $hours = round($_POST['hours'],2);
          if ($hours > 40) {
               $regular_hours = 40;
               $overtime_hours = $hours-40;
          }
          else {
               $regular_hours = $hours;
               $overtime_hours = 0;
          }
     }
     else {
          ++$errors;
          echo "<p>Error: 'Hours Worked' must be greater than 0</p>\n";
     }
}
else {
     ++$errors;
     echo "<p>Error: 'Hours Worked' must be a numeric value</p>\n";
}
if (is_numeric($_POST['wage'])) {
     if (($_POST['wage']) > 0) {
          $wage = round($_POST['wage'],2);
     }
     else {
          ++$errors;
          echo "<p>Error: 'Hourly Wage' must be greater than 0</p>\n";
     }
}
else {
     ++$errors;
     echo "<p>Error: 'Hourly Wage' must be a numeric value</p>\n";
}
if ($errors==0) {
   echo "<p>$regular_hours hours @ \$$wage/hr = \$" . ($regular_hours*$wage) . "<br />\n"; 
   echo "$overtime_hours hours @ \$" . ($wage * 1.5) . "/hr = \$" . ($overtime_hours*$wage*1.5) . "<br />\n"; 
   echo "Total for $hours hours is \$" . (($regular_hours*$wage) + ($overtime_hours*$wage*1.5)) . "</p>\n"; 
}
?>
<p><a href="Paycheck.html">Calculate another paycheck</a></p>
</body>
</html>
