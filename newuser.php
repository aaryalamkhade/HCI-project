

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<script>
          
            // Function to check Whether both passwords
            // is same or not.
            function checkPassword(form) {
                password1 = form.password1.value;
                password2 = form.password2.value;
  
                // If password not entered
                if (password1 == '')
                {

                    alert ("Please enter Password");
                     return false;
                }
                      
                // If confirm password not entered
                else if (password2 == '')
                {

                    alert ("Please enter password again");
                    return false;
                }
                  
                      
                // If Not same return False.    
                else if (password1 != password2) {
                    alert ("\nPassword did not match: Please try again...");
                    return false;
                }
  
                // If same return True.
                else{
                    
                    return true;
                }
            }
        </script>

  <style>


  <style>
div {
        margin-bottom: -50px ; margin-left: -50px;
      }
body {

  background-image: url('back2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  color: black;

}

.centered {
  position: absolute;
  top: 50%;
  left: 40%;
  transform: translate(-50%, -50%);
  text-align: center;
}
 label {
        display: inline-block;
        width: 500px;
        text-align: left;
      }
     


  a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
  }


.previous {
  background-color: #f1f1f1;
  color: black;
}


.round {
  border-radius: 50%;
}

.le
{
	position: absolute;
  top: 92%;
  left: 14%;
  transform: translate(-50%, -50%);
 
}


.button4 {border-radius: 8px;}

.dark-mode {

  background-color: black;
  color: white;
}

.ri
{
  position: absolute;
  top: 92%;
  left: 82%;
  transform: translate(-50%, -50%);
 ;
}

  .validation
{
   position: absolute;
  top: 50%;
  left: 70%;
  transform: translate(-50%, -50%);
}
.checkpoint
{
  position: absolute;
  top: 6%;
  left: 32%;
  transform: translate(-50%, -50%);
  text-align: center;
}


img.two {
   position: absolute;
          top: -8%;
           left:-35%;

}

</style>




    <div class="centered">

    <div style="width:350px;height:450px;border:1px solid #000;margin:auto;box-shadow: 5px 5px 10px 1px #000;
margin:auto;background-color: white;border-radius: 25px; " >
<br>

<h5 class="checkpoint"><img class="two" src="mitlogo.png" width="35" height="35">CheckPoint</h5>
<br><br>
  <h4>Create An Account</h4>
    <div class="w-55  m-auto ">
        <form action="dbnewuser.php" method="post" onSubmit = "return checkPassword(this)">
            <div class="form-group"><br>

            <label >&nbsp &nbsp &nbsp UserName</label>
             <input type="text" placeholder="Enter Username" style="width: 300px;margin:auto;" name="username"  class="form-control" required> 
             </div>
             <div class="form-group">
            <label>&nbsp &nbsp &nbsp Password</label>
             <input type="text"   placeholder="Enter Password" style="width: 300px;margin:auto;"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="password1"  class="form-control" required> 
             </div>
            <div class="form-group">
            <label>&nbsp &nbsp &nbsp Confirm Password</label>
             <input type="text"   placeholder="Enter Password" style="width: 300px;margin:auto;"  name="password2"  class="form-control" required> 
             </div>
             <div class="ri">
   <button type="Submit" style=" width:90px;height:30px;background-color:green ; color:white ;margin:auto;display:block;box-shadow: 5px 5px 10px 1px #000 ;border-radius: 25px" >Done</button>
   </div>
   <div class="le">
 <a href="createuser.php" class="previous round">&#8249;</a>
</div>
        </form>
    </div>
</div>
</div>

<div class="validation" style="width:300px;height:230px;border:1px solid #000;margin:auto;box-shadow: 5px 5px 10px 1px #000;
padding: 16px; background-color: white;border-radius: 25px;" >
  <h6>Password must contain the following:</h6>
  <p id="letter" class="invalid">A <b style="color: red">lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b style="color: red">capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b style="color: red">number</b></p>
  <p id="length" class="invalid">Minimum <b style="color: red"> 8 characters</b></p>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>
</html>

