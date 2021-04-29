<?php
if(isset(($_GET["creds"]))) { 
$mm = $_GET["creds"];
}
else
{
$mm = "right";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
div {
        margin-bottom: -50px ; margin-left: -50px;
      }
.centered {
  position: absolute;
  top: 54.4%;
  left: 67.5%;
  transform: translate(-50%, -50%);
  text-align: center;
}
 .forgot-password {
      text-align: center;
      float: center;
      font-size: 13px
    }
label {
        display: inline-block;
        width: 500px;
        text-align: left;
      }
      .left img
      {
         position: absolute;
          top: 75%;
           left: 38%;
          text-align: center;
            width: 45px;
            height:34px;
          border-radius: 10%;
        }

      .centered img {
  width: 150px;
  border-radius: 50%;
}
img.two {
   position: absolute;
          top: 2%;
           left:5%;
  height: 16%;
  width: 16%;
}
img.three {
   position: absolute;
          top: 18%;
           left:19%;
  height: 40%;
  width: 60%;
}


body {

  background-image: url('back.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;

  color: black;

}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
    
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

.new
{
 position: absolute;
          top: 50%;
           left:85%;
  
}

.showpass
{
  position: absolute;
          top: 57%;
           left:26%;
}

.forgetpass
{
  position: absolute;
          top: 90%;
           left:23%;
}
.createnewuser
{
  position: absolute;
          top: 85%;
           left:72%;
}
.button
{
  position: absolute;
          top: 72%;
           left:43%;
}
.rightbox
{
  position: absolute;
  top: 54.5%;
  left: 36.5%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.name
{
  position: absolute;
  top: 9%;
  left: 49%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.checkpoint
{
  position: absolute;
  top: 10%;
  left: 34%;
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>



<h2 class="name" style="color:black;">Attendance Management System </h2>
 <div class="centered">

<img class="two" src="mitlogo.png" width="50" height="50">
    <div style="width:360px;height:450px;border:1px solid #000;margin:auto;box-shadow:8px 8px 10px 1px #000;
margin:auto; background-color: #f2f2f2; border-radius: 0px 25px 25px 0px;"  >
<div class="py-5" >
      
      <h5 class="checkpoint">&nbsp  CheckPoint</h5>
      <br>
      <br>
    </div> 
    <div class="w-50  m-auto ">
        <form action="validation.php" method="post" >
            <div class="form-group">
            <label >Username</label>

             <input type="text" placeholder=" Enter Username &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &#xf007" style="width: 250px;margin:auto;font-family: FontAwesome;" name="username"  class="form-control" required> 
             </div>
             <div class="form-group">
            <label>Password</label>
            <input type="password" value="" id="myInput" placeholder=" Enter Password &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &#xf084" style="width: 250px;margin:auto; font-family: FontAwesome;"  name="password1"  class="form-control" required>
            <div class="showpass">
               <input type="checkbox" onclick="myFunction()">Show Password
            </div>
            <br>
             <script>
       function myFunction() {
      var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

             </div>
         
         <div class="button">
             <button type="Submit" style="background-color:green ; color:white ;margin:auto;display:block;box-shadow: 5px 5px 10px 1px #000 ; width: 150px;margin:auto;border-radius: 16px;" >Log in</button>
</div>

<span class="forgot-password">
           <div class="forgetpass">
             <a href="newpassword.php" ; style="color: darkblue" ; title="Forgot Password" id="link-reset">Forgot Password?<br></a>
          </div>

          <div class="createnewuser">
            <B>New user?</B><br>
            <a href="createuser.php" ; style="color: darkblue" ; title="Create an account" id="link-reset">Create New Account<br></a>
          </div>
           
        </span>
        </form>
    </div>

    <?php
error_reporting(0);
?>


<h5><?php echo $_GET['msg'] ?></h5>





</div>
</div>


<div class="rightbox"
style="width:260px;height:450px;border:1px solid #000;margin:auto;box-shadow:-8px 8px 10px 1px #000;
margin:auto; background-color:#ccddff;border-radius:  25px 0px  0px 25px; "; ><br>
<H3 style="font-family:Helvetica ;" ><b>WELCOME!</b></H3>
<br>
<img class="three" src="login.jpg" width="300" height="300">
<br>
<br>
<br>
<br>
<br>
<br><br><br><br>
<p style="font-size:20px;">" It’s you who makes the difference,<br> not the classroom. "</p>
</div>
<script src="https://kit.fontawesome.com/yourcode.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>