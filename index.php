<?php

echo "<h4>Php Sintaks</h4>";
echo "Sulfikar Alijun";
echo "<br>";

// if else while echo dan lain lain tidak peka huruf besar kecil
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";

// tetapi peka terhadapa variabel
$color = "red";
echo "My car is " . $color . "<br>"; // peka
echo "My house is " . $COLOR . "<br>"; // tidak peka
echo "My boat is " . $coLOR . "<br>"; // tidak peka

// ini adalah single line comment

# ini juga adalah single line comment // tidak direkomendasikan menggunakan hash '#' untuk comment

/*
ini adalah multi line comment
*/

echo "<h4>Variabel</h4>";