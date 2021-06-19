<?php
$test=$_POST["Gender"];
if($test=="male")
{
	$gender="MR.";
}
else
{
	$gender="MISSf";
}
print_r($_POST);
// echo _POST["Gender"];
echo "<br><br><br>Thanks $gender ".$_POST['fname']." " .$_POST['lname'];
echo "<br><br> Please Review Your Information";
echo "<br><br>Name: ".$_POST['fname'];
echo "<br>Address: ".$_POST['fname'];
echo "<br>YOUR skills: ".$_POST['skills'];
echo "<br>department: ".$_POST['department'];

?>