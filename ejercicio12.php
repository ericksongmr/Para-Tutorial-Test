<?php

$x=0;
$y=0;
$a=0;
$b=0;
$sumax=0;
$sumay=0;
$xpory=0;
$x2=0;
$y2=0;
$sumaxpory=0;
$sumax2=0;

for($i=1;$i<=10;$i++)
{
	$x=$i;
	$y=$i*2;
	
	$sumax+=$x;
	$sumay+=$y;
	$xpory=$x*$y;
	$x2=pow($x,2);
	$y2=pow($y,2);
	$sumaxpory+=$xpory;
	$sumax2+=$x2;
	
	$a=(10*($sumaxpory)-($sumax*$sumay))/($sumax2-pow($sumay,2));
	$b=(pow($sumay,2)-($a*$sumax))/10;
	
}
	
	echo "El Resultado de a es: ". $a ."<p>";
	echo "El Resultado de b es: ". $b;
?>