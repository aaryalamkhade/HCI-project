<?php
$mm = $_GET["id"];
?>

<?php
    $serverame = "localhost";
$dbUsername = "root";
$dbpassword = "";
$dbname = "demo";
    
    $conn = mysqli_connect($serverame , $dbUsername , $dbpassword , $dbname );
if(!$conn){
    die("Connection to database Failed : ".mysql_coect_error());
}
if(isset(($_GET["id"]))) {
    $mm = $_GET['id'];
    $dbinfo = " SELECT Full_Name, e_mail, mobile, institute,username from userinfodata WHERE id='$mm'";
    $dbresult = mysqli_query($conn, $dbinfo);
    $rt = mysqli_fetch_array($dbresult);

    $Full_Name = $rt['Full_Name'];
    $e_mail = $rt['e_mail'];
    $mobile = $rt['mobile'];
    $institute = $rt['institute'];
    $username = $rt['username'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
	
</style>
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light white">
        <a href="#" class="navbar-brand"><img src="profile.png" height="30" alt="MITAOE"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                     <span class="navbar-text"><?php echo $username?>&nbsp &nbsp</span>
                   
                </li>
                <li class="nav-item">
                    <a href="dashboard.php?id=<?php echo $mm ?>" class="nav-item nav-link active">Dashboard</a>
                </li>
               
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="settings.jpg" height="35" alt="MITAOE"></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Edit profile</a>
                        <a href="newpassword.php" class="dropdown-item">Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a href="Login.php"class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>

<h1>MY PROFILE</h1>
<?php
    echo "Full_Name : ", $Full_Name;  
    echo "</br>";  
    echo "e_mail : ", $e_mail;  
    echo "</br>";  
    echo "mobile : ", $mobile;  
    echo "</br>";  
    echo "institute : ", $institute;  
    echo "</br>";  
    
?>


</body>
</html>                            