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
// variabel
$color = "red";
$color = "green";
$color = "blue";
echo "My car is " . $color . "<br>"; // variabel $color bernilai blue

$a = 17; // jangan menggunakan nama variabel yang tidak memiliki arti
$age = 17;

echo "I am $age years old.<br>"; // jangan menggunakan variabel seperti ini
echo "I am " . $age . " years old.<br>"; // gunakan seperti ini

var_dump($age); // mengecek nilai dan type data dari suatu variabel
echo "<br>";
var_dump([2, 4, 6]);

$x = $y = $z = "orange";
echo "<br>";
var_dump($x, $y, $z);

function myTest() {
  $x = 5; // local scope  
  echo "<p>Variable x inside function is: $x</p>";
}
myTest(); // untuk mengeksekusi function

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";

$x = 5;
$y = 10;

function myTest2() {
  global $x, $y;
  // $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
  $y = $x + $y; // global scope, artinya variabel y bukan lagi 10 tapi 15 (5 + 10)
}

myTest2();
echo $y; // outputs 15
echo "<br>";

function myTest3() {
  static $r = 0; // static digunakan agar nilai $r tetap sama untuk terakhir kali fungsi dipanggil
  echo $r . "<br>";
  $r++;
}

myTest3();
myTest3();
myTest3();