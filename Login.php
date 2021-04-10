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
          top: 2%;
           left: 1.8%;
  height: 16%;
  width: 16%;
}

body {

  background-image: url('mit.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  color: white;
}
</style>



    <div class="centered">

    <div style="width:300px;height:380px;border:1px solid #000;margin:auto;box-shadow: 5px 5px 10px 1px #000;
margin:auto;" >

<img class="two" src="mit-logo.jpg" width="50" height="50">

<div class="py-5" >
  
 
        <h3 class="text-center">&nbsp &nbsp &nbsp Login/Sign Up</h3>
    </div> <br>
    <div class="w-50  m-auto ">
        <form action="dashboard.php" method="post">
            <div class="form-group">
            <label >Username</label>
             <input type="text" style="width: 250px;margin:auto;" name="Username"  class="form-control"> 
             </div>
             <div class="form-group">
            <label>Passsword</label>
             <input type="password" style="width: 250px;margin:auto;"  name="Passsword"  class="form-control"> 
             </div>
            
             <button type="Submit" style="background-color:green ; color:white ;margin:auto;display:block;box-shadow: 5px 5px 10px 1px #000 ; " >Log in</button>
             <span class="forgot-password">
          <a href="forgetpassword.php" ; style="color: white" ; title="Forgot Password" id="link-reset">Forgot Password?<br></a>
           <a href="createuser.php" ; style="color: white" ; title="Create an account" id="link-reset">Create new account</a>
        </span>
        </form>
    </div>


</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>