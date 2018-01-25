<?php

$n1=1;
$n2=0;

for($i=1;$i<=10;$i++)
{
	$suma=$n1+$n2;
	$n1=$n2;
	$n2=$suma;
	echo $suma." ";
}

?>