<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
//Variables
$a=2;
$b=3;
define("pi", 3.14);
echo "Use of Variables";
echo "The values of a and b is ".$a;
echo "<br>The sum is ".($a+$b);
echo "<br><br>use of constant";
echo "<br>The area of circle  for radius 2 is ".(pi*2*2);

echo "<br>use of braching statements<br>";




$time=Date("H");

if($time<12)
{
	echo "good Morning";
}
else if($time<=18)
{
	echo "good Evening";
}
else
{
	echo "good night";
}






?>


</body>
</html>