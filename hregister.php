<?php
include('dbcon.php');
//print_r($_POST);
if(strcmp($_POST['password_1'],$_POST['password_2'])==0)
{
$sql="insert into hreg(hname,capacity,htype,food,own_name,own_phno,rent,haddress,email,password) values('".$_POST['hosname']."','".$_POST['hoscapacity']."','".$_POST['hostype']."','".$_POST['foodtype']."','".$_POST['hosown']."','".$_POST['hosno']."','".$_POST['hosrent']."','".$_POST['addr']."','".$_POST['email']."','".$_POST['password_1']."')";
//echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
	echo"password mismatch";
}
$conn->close();
?>