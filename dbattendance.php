
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        
        <a href="#" class="navbar-brand"><img src="mit-logo.png" height="30" alt="MITAOE"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                     <span class="navbar-text">MIT &nbsp &nbsp</span>
                   
                </li>
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-item nav-link active">Home </a>
                </li>
                <li class="nav-item">
                    <a href="https://mitaoe.ac.in/" class="nav-item nav-link active">About Us</a>
                </li>

                <li class="nav-item">
                    <a href="feedback.php" class="nav-item nav-link active">Feedback</a>
                </li>

                <li class="nav-item dropdown">
                    <a style="color: white" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Contact Us</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="Contactpage.php" class="dropdown-item">Email-Id</a>
                        <div class="dropdown-divider"></div>
                        <a href="contactpagemobile.php"class="dropdown-item">Mobile</a>
                    </div>
                </li>    
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="profile.png" height="30" alt="MITAOE"></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="profile.php" class="dropdown-item">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="Login.php"class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
           </nav>
 </div>

<?php
error_reporting(0);
?>


<?php 
$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'demo');
$sql = "SELECT * FROM attendance";
$result = $conn->query($sql);




if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
    	$dbvalue.=" <tr>
    	<td>$row[id] </td>
    	 <td>  $row[Full_Name] </td> <td> $row[Gender] </td> <td> $row[Email] </td> <td> $row[Mobile] </td> <td>
    	$row[Attendance] 
    	 </td>
    	</tr> ";

     }
} else {
    echo "0 results";
}

$conn->close();
 ?>
 


<table border="1" class="table  table-bordered table-hover ">
	<thead>
		<tr>
			<th>Id</th> <th>Full_Name</th> <th>Gender</th> <th>Email</th> <th>Mobile</th> <th>Attendance</th>
		</tr>
	</thead>
	<tbody>
		<?php echo $dbvalue ?>
	</tbody>
</table>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </body>
</html>