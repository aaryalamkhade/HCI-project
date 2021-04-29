<?php
$mm = $_GET["id"];
?>
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


$query = " update userinfodata set Full_Name='$Full_Name' ,   e_mail='$e_mail' ,    mobile='$mobile' , institute='$institute'
where id=$mm ";

echo "$query";
mysqli_query($con, $query );
 header("location:dataupdate.php?id=".$mm);

?>