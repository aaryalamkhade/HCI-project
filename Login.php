<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
div {
        margin-bottom: -50px ; margin-left: -50px;
      }
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
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
          top: 12%;
           left:19%;
  height: 16%;
  width: 16%;
}

body {

  background-image: url('mitnew.jpg');
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

</style>

 <div class="centered">
<h2 style="color:black;">Attendance Management System </h2>
<img class="two" src="mit-logo.png" width="50" height="50">
    <div style="width:310px;height:390px;border:1px solid #000;margin:auto;box-shadow: 5px 5px 10px 1px #000;
margin:auto; background-color: #f2f2f2; " >
<div class="py-5" >
  
      <h3 class="text-center">&nbsp  Login</h3>
    </div> 
    <div class="w-50  m-auto ">
        <form action="validation.php" method="post" >
            <div class="form-group">
            <label >Username</label>
             <input type="text" placeholder="Enter Username" style="width: 250px;margin:auto;" name="username"  class="form-control" required> 
             </div>
             <div class="form-group">
            <label>Password</label>
             <input type="password" placeholder="Enter Password" style="width: 250px;margin:auto;"  name="password1"  class="form-control" required> 
             </div>
            
             <button type="Submit" style="background-color:green ; color:white ;margin:auto;display:block;box-shadow: 5px 5px 10px 1px #000 ; " >Log in</button>
           
             <span class="forgot-password">
          <a href="forgetpassword.php" ; style="color: darkblue" ; title="Forgot Password" id="link-reset">Forgot Password?<br></a>
           <a href="createuser.php" ; style="color: black" ; title="Create an account" id="link-reset">New user?Create New Account</a>
        </span>
        </form>
    </div>

    <?php
error_reporting(0);
?>


<h5><?php echo $_GET['msg'] ?></h5>


</div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>