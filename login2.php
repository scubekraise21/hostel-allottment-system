<?php
include('dbcon.php');
//print_r($_POST);
if($_POST['login']=="admin")
{
	if($_POST['email']=="admin@gmail.com" && ($_POST['password']=="admin"))
	{
		//echo "as";
		//window.location="//localhost/demo/";
		echo "//localhost/finalp/index.php?page=admin_redirect.php";

	}
	else
	{
		echo "admin login failed !!";
	}

}
if($_POST['login']=="hostel")
{
	$sql="select * from hreg where email='".$_POST['email']."' and password='".$_POST['password']."'";
      $result=$conn->query ($sql);
	if($row=$result->fetch_assoc())
	{

       		echo "//localhost/finalp/index.php?page=host_edit.php&id=".$row['id'];
	}
	else
	{
		echo "Hostel login failed !!";
	}

}


/*if(strcmp($_POST['password_1'],$_POST['password_2'])==0)
{
$sql="insert into users(fname,lname,dept,admno,catrank,sex,age,address,hostelpref,id,email,password) values('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['dept']."','".$_POST['admno']."','".$_POST['CATrank']."','".$_POST['gender']."','".$_POST['age']."','".$_POST['addr']."','".$_POST['hpref']."','','".$_POST['email']."','".$_POST['password_1']."')";
//echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else
echo "password mismatch";
$conn->close();*/
?>