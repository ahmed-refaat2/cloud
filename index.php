<?php
// //task 1&2
// $array = ["PHP", "Open Source", "ITI", "Day2","Arrays"];


// foreach ($array as $key) {
// 	echo $key."<br>";
// }

// for($i=0;$i<5;$i++)
// {
// 	echo $array[$i]."<br>";
// }

//task 3&4&5&6

$info = array(
	"name" => "ahmed",
	"age" => "25",
	"email" => "zahmed@yahoo",
	"collage" => "science"
);
asort($info);
foreach($info as $key => $value) {
	echo $key." ".$value."<br>";
}

ksort($info);

foreach($info as $key => $value) {
	echo $key." ".$value."<br>";
}
echo "<br><br>";
print_r(array_keys($info));

echo "<br><br>";
print_r(array_keys($info,'25'));
?>
