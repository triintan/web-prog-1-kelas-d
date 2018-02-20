<h2> Percobaan variabel</h2>

<?php

$nama= "intan";
$semester =4;

var_dump($nama); echo "<br>";
var_dump($semester); echo "<br>";

function printNama() {
	global $nama;
	
	echo"<h3>$nama</h3>";
}

printNama();

?>

