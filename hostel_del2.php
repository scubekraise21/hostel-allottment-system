<?php
include('dbcon.php');
//print_r($_POST);
$x=$_POST['cb'];
$c=0;
foreach($x as $x=>$value)
{
	$sql1= "delete from hreg where id='".$value."'";
	$conn->query($sql1);
	$c++;
}
echo $c." hostel(s) deleted ";
?>