<?php

$vetor = [4,5,0,1,2,3];

/*
$vetor[0] = 4;
$vetor[1] = 5;
$vetor[2] = 0;
$vetor[3] = 1;
$vetor[4] = 2;
$vetor[5] = 3;
*/

//asort ($vetor);
//print_r ($vetor);

/*
sort ordenada de forma crescente e não mantem indices junto com o conteúdo
asort ordenada de forma crescente e mantem indices junto com o conteúdo
rsort ordenada de forma decrescente e não mantem indices junto com o conteúdo
arsort ordenada de forma decrescente e mantem indices junto com o conteúdo
*/

arsort ($vetor);
//var_dump ($vetor);
print_r ($vetor);

/*
foreach ($vetor as $vetores)
	print $vetores . " ";

*/
?>