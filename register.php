<?php
include('dbcon.php');
print_r($_POST);
if(strcmp($_POST['password_1'],$_POST['password_2'])==0)
{
$sql="insert into users(fname,lname,dept,admno,catrank,sex,age,address,hostelpref,id,email,password) values('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['dept']."','".$_POST['admno']."','".$_POST['CATrank']."','".$_POST['gender']."','".$_POST['age']."','".$_POST['addr']."','".$_POST['hpref']."','','".$_POST['email']."','".$_POST['password_1']."')";
//echo $sql;
$sql1="update hreg set capacity=capacity-1 where hname='".$_POST['hpref']."'";
$conn->query($sql1);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else
echo "password mismatch";
$conn->close();
?>