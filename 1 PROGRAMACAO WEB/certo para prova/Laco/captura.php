<?php

$num = $_POST['codigo'];
print $num ."<br>";
$tec = $_POST['tec'];


print "<h1>Com print_r </h1>";
print_r ($tec);

print "<h1>Com var_dump </h1>";
var_dump ($tec);


print "<h1>Com FOR </h1>";
for ($i = 0; $i < sizeof($tec); $i++) {
		print $tec[$i];
		print "<br>";
	}

print "<h1>Com While</h1>";
$i = 0;
while ($i < sizeof($tec))
{
		print $tec[$i];
		print "<br>";
		$i++;
}

print "<h1>Com do/While</h1>";
$i = 0;
do
{
		print $tec[$i];
		print "<br>";
		$i++;
}while ($i < sizeof($tec));


?>

