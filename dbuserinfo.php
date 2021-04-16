<?php 
$con=mysqli_connect('localhost','root');
if($con)
{
	echo "Data Inserted";
}
else
{
	echo "Connection failed";
}

mysqli_select_db($con,'demo');
$Full_Name=$_POST['Full_Name'];
$e_mail=$_POST['e_mail'];
$mobile=$_POST['mobile'];
$institute=$_POST['institute'];


$query = " insert into userinfodata (Full_Name,e_mail,mobile,institute)     
values ('$Full_Name','$e_mail','$mobile','$institute') ";


mysqli_query($con, $query );
header('location:newuser.php');

 ?>