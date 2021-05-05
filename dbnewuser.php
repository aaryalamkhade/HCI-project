 

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


$query="update userinfodata set password1='$password1'  where id=(select max(id) from userinfodata)";
$query1="update userinfodata set username='$username' where id=(select max(id) from userinfodata)";



mysqli_query($con, $query );
mysqli_query($con, $query1 );
header("location:welcome.php");

 ?>