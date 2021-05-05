 
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
$username=$_POST['username'];
$password1=$_POST['password1'];


$query="update userinfodata set password1='$password1'  where id='$mm'";

mysqli_query($con, $query );
header("location:resetpassresponse.php?id=".$mm);

 ?>
 