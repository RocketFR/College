<?php  
  $lin = $_POST['linhas'];
  $col = $_POST['colunas'];
  $x = 0;
  $y = 0;
?>

<html>
	<head>
	
	</head>
	
<body>

<table border="5">
<?php
for ($x = 0; $x < $lin; $x+=1) {
  echo "<tr>";
  for ($y = 0; $y < $col; $y+=1) {
    echo "<td>X</td>";
  }
  echo "</tr>";
}
?>


</table>

</body>



</html>

