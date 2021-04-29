<?php
$mm = $_GET["id"];
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
  width:35%;

   position: absolute;
   top: 58%;
  left: 50%;
  border-radius: 50%;
  transform: translate(-50%, -50%);
  text-align: center;

}


</style>

  </head>

  <body>



<nav class="navbar navbar-expand-lg navbar-light bg-light white">
  <a class="navbar-brand" href="#"><img src="mitlogo.png" height="40" alt="MITAOE">CheckPoint</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php"><b>Home</b> </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="https://mitaoe.ac.in/"><b>About us</b></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="feedback.php"><b>Feedback</b></a>
      </li>
     <li class="nav-item dropdown active">
                    <a style="grey" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><b>Contact Us</b></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="Contactpage.php" class="dropdown-item">Email-Id</a>
                        <div class="dropdown-divider"></div>
                        <a href="contactpagemobile.php"class="dropdown-item">Mobile</a>
                    </div>
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
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="profile.png" height="45" alt="MITAOE"></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="newprofile.php?id=<?php echo $mm ?>"  class="dropdown-item">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="Login.php"class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
</nav>





    


<div class="container-fluid">
      <div class="jumbotron">
        <form action="dbattendance.php" method="post" >
<br>


<br>
<br>
<label for="Division">Select Division </label>
<select name="Division" id="Division" style="width: 50px;" >
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
   <option value="D">D</option>
  <option value="E">E</option>
  <option value="F">F</option>
    <option value="G">G</option>
  <option value="H">H</option>

</select>

<br>
<br>

<label for="Subject">Subject &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
<select name="Subject" id="Subject" style="width: 50px;"  >
    <option value="EI">EEE</option>
  <option value="DBMS">Physics</option>
  <option value="DFS">CP</option>
  <option value="System Engineering">CDE</option>
  <option value="Prototyping">LDC</option>
  <option value="DEM">EGR</option>
  <option value="M3">Chemestry</option>
  <option value="COA">LC</option>
  <option value="CN">ETT</option>
  <option value="CD">DT</option>
 
</select>

<br>
<br>

<br>


<br>

 <button type="Submit" style="background-color:green ; color:white ;margin:auto;display:block;box-shadow: 5px 5px 10px 1px #000 ;width: 90px;border-radius: 25px; " >Show</button>
</form>
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
