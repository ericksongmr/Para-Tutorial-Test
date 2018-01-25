<?php

$nota1=20;
$nota2=13;
$nota3=10;
$nota4=16;

$promedio=($nota1*0.4)+($nota2*0.2)+($nota3*0.15)+($nota4*0.25);

if($promedio<10.5){
	echo "El Alumno esta Reprobado, con un promedio de: ".$promedio;
}else if($promedio>=10.5 && $promedio<13){
	echo "El Alumno es Regular, con un promedio de: ".$promedio;
}if($promedio>=13 && $promedio<15){
	echo "El Alumno es Bueno, con un promedio de: ".$promedio;
}if($promedio>=15 && $promedio<18){
	echo "El Alumno es Muy Bueno, con un promedio de: ".$promedio;
}else if ($promedio>=18){
	echo "El Alumno es Excelente, con un promedio de: ".$promedio;
}
	

?>