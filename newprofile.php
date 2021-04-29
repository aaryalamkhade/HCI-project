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
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"

    />

    <!-- 🚨 Notice this link -->
    <link id="dark-theme-style" rel="stylesheet" />


    <title>Toggle Bootstrap Theme</title>

<style type="text/css">
  .right {

  left: 10;
 
}




img.three {
   position: absolute;
          top: 5%;
           left:4%;
  height: 20%;
  width: 20%;
}


.centered {
  position: absolute;
  top: 500%;
  left: 27%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.left
{
position: absolute;
  top: 500%;
  left: 75%;
  transform: translate(-50%, -50%);
  text-align: center;
}



img.two {
   position: absolute;
          top: 2%;
           left: 1.8%;
  height: 20%;
  width: 12%;
}
.centered img {
  position: absolute;
  top: 10%;
  left: 96.5%;
  border-radius: 50%;
  transform: translate(-50%, -50%);
  text-align: center;

}
.container { 
  width: 35%;
  height:85%;
   position: absolute;
  top: 64%;
  left: 75%;
  border-radius: 50%;
  transform: translate(-50%, -50%);
  text-align: center;

}
.container-fluid { 
  width: 40%;
  
   position: absolute;
   top: 58%;
  left: 20%;
  border-radius: 50%;
  transform: translate(-50%, -50%);
  text-align: center;

}


</style>

  </head>

  <body>



<nav class="navbar navbar-expand-lg navbar-light bg-light white">
  <a class="navbar-brand" href="#"><img src="profile.png" height="40" alt="MITAOE">&nbsp <?php echo $username?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    	
      <li class="nav-item active">
        <a class="nav-link" href="index.php?id=<?php echo $mm ?>"><b>Dashboard</b> </a>
      </li>
      
    </ul>
  </div>

  <nav class="navbar navbar-transparent">
      <!-- 🚨 Notice the toggleTheme() function -->
      <a
        href="javascript:void()"
        class="btn btn-outline-info btn-lg ml-auto font-weight-bold"
        id="theme-toggler"
        onclick="toggleTheme()"
      ></a>
    </nav>
     <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="settings.jpg" height="45" alt="MITAOE"></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="editprofile.php?id=<?php echo $mm ?>" class="dropdown-item">Edit profile</a>

                        <a href="resetpassword.php" class="dropdown-item">Change Password</a>

                        <a href="Login.php"class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
</nav>





    


<div class="container-fluid">
      <div class="jumbotron">
       <img class="three" src="Profile12.jpg" width="50" height="50"> <br>
        <p >
     
<?php
    echo "<ul align='left'> Full_Name : ", $Full_Name;  
    echo "</br>";  
    echo "E_mail : ", $e_mail;  
    echo "</br>";  
    echo "Mobile : ", $mobile;  
    echo "</br>";  
    echo "Institute : ", $institute;  
    echo "</br>";  
    
?>
        </p>
       
       
      </div>
    </div>

 












<script type="text/javascript">
	// you can use app's unique identifier here
const LOCAL_STORAGE_KEY = "toggle-bootstrap-theme";

const LOCAL_META_DATA = JSON.parse(localStorage.getItem(LOCAL_STORAGE_KEY));

// you can change this url as needed
const DARK_THEME_PATH = "https://bootswatch.com/4/cyborg/bootstrap.min.css";

const DARK_STYLE_LINK = document.getElementById("dark-theme-style");
const THEME_TOGGLER = document.getElementById("theme-toggler");

let isDark = LOCAL_META_DATA && LOCAL_META_DATA.isDark;

// check if user has already selected dark theme earlier
if (isDark) {
  enableDarkTheme();
} else {
  disableDarkTheme();
}


/**
 * Apart from toggling themes, this will also store user's theme preference in local storage.
 * So when user visits next time, we can load the same theme.
 *
 */
function toggleTheme() {
  isDark = !isDark;
  if (isDark) {
    enableDarkTheme();
  } else {
    disableDarkTheme();
  }
  const META = { isDark };
  localStorage.setItem(LOCAL_STORAGE_KEY, JSON.stringify(META));
}

function enableDarkTheme() {
  DARK_STYLE_LINK.setAttribute("href", DARK_THEME_PATH);
  THEME_TOGGLER.innerHTML = "🌙";
}

function disableDarkTheme() {
  DARK_STYLE_LINK.setAttribute("href", "");
  THEME_TOGGLER.innerHTML = "🌞";
}

</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>

    <!-- 🚨 Our custom JavaScript  -->
    <script src="index.js"></script>
  </body>
</html>
