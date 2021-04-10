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
	.right {

  left: 10;
 
}

.centered {
  position: absolute;
  top: 450%;
  left: 27%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.left
{
position: absolute;
  top: 50%;
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

</style>
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        
        <a href="#" class="navbar-brand"><img src="mit-logo.jpg" height="30" alt="MITAOE"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                     <span class="navbar-text">MIT &nbsp &nbsp</span>
                   
                </li>
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-item nav-link active">Home</a>
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

<div class="split right">
  <div class="centered">

    <font style="color:black" size="2" ><b> MISSION </b></font><br>
<font style="color:black" size="2" >
To leave no stone unturned in our endeavour to ensure that every  
alumnus <br> looks back at us and says MITAOE has not merely taught us, it has educated us.
</font>
<br>
<font style="color:black" size="2" ><b> VISION </b></font><br>
<font style="color:black" size="2">
To develop MITAOE into a world-class learning center with an excellent ambience for <br> academics and research  conjugated with vibrant
 environment for honing the extra and <br> cocurricular skills of all  its stake holders to enable them to meet the challenge of  a <br>  fiercely   competitive world.
</font>
</div>
</div>



    </nav>
</div>

<div class="left">
    <h4>Course Categories</h4>
    <label for="cars"></label>

<select name="cars" id="cars">
  <option value="volvo">First year</option>
  <option value="saab">Computer Engineering</option>
  <option value="mercedes">Mechanical Engineering</option>
  <option value="audi">ENTC Engineering</option>
   <option value="saab">ETX Engineering</option>
  <option value="mercedes">Chemical Engineering</option>
  <option value="audi">Civil Engineering</option>
</select>


</div>

</body>
</html>                            