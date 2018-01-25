<?php

echo "<h3>POSTINCREMENTO</h3>";

$a=5;

echo "Debe ser 5: " . $a++ . "<br>\n";
echo "Debe ser 6: " . $a . "<br>\n";

echo "<h3>PREINCREMENTO</h3>";

$a=5;

echo "Debe ser 6: " . ++$a . "<br>\n";
echo "Debe ser 6: " . $a . "<br>\n";

echo "<h3>POSTDECREMENTO</h3>";

$a=5;

echo "Debe ser 5: " . $a-- . "<br>\n";
echo "Debe ser 4: " . $a . "<br>\n";

echo "<h3>PREDECREMENTO</h3>";

$a=5;

echo "Debe ser 4: " . --$a . "<br>\n";
echo "Debe ser 4: " . $a . "<br>\n";
?>