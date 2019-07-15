<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

$name=array('ram','shyam','Hari','mony');

echo "<pre>";
print_r($name);


echo "<br>using for loop<br>";
for($i=0;$i<=3;$i++)
{
	echo $name[$i]."<br>";
}

echo"<br> using foreach loop <br>";
foreach ($name as $value) {
	echo "$value"."<br>";
}


 ?>



<form>
	<input type="radio" name="male" value="male">Male
					<input type="radio" name="female" value="female">Female
					<input type="radio" name="other" value="other">other</td>
</form>
</body>
</html>