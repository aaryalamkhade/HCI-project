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
div {
        margin-bottom: -50px ; margin-left: -50px;
      }
.centered {
  position: absolute;
  top: 50%;
  left: 35%;
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

.next {
  background-color: #4CAF50;
  color: white;
}

.round {
  border-radius: 50%;
}

.le
{
  position: absolute;
  top: 87%;
  left: 30%;
  transform: translate(-50%, -50%);
 
}
.ri
{
  position: absolute;
  top: 87%;
  left: 99%;
  transform: translate(-50%, -50%);
 ;
}

.button4 {border-radius: 8px;}

.dark-mode {

  background-color: black;
  color: white;
}

.validation
{
   position: absolute;
  top: 50%;
  left: 70%;
  transform: translate(-50%, -50%);
}

</style>




    <div class="centered">

    <div style="width:300px;height:300px;border:1px solid #000;margin:auto;box-shadow: 5px 5px 10px 1px #000;
margin:auto;" >
<br>
    <div class="w-50  m-auto ">
        <form  action ="dbpassword.php" method="post"  onSubmit = "return checkPassword(this)">
            
             <div class="form-group">
            <label>New Password</label>
            
             <input type="text" style="width: 250px;margin:auto;"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" autocomplete="off" name="password1"  class="form-control"> 
             </div>
            <div class="form-group">
            <label >Retype Password</label>
             <input type="password" style="width: 250px;margin:auto;"  autocomplete="off" name="password2"  class="form-control"> 
             </div>
                  <div class="ri">

         <button type="Submit" style="background-color:green ; color:white ;margin:auto;display:block;box-shadow: 5px 5px 10px 1px #000 ; " >Submit</button>




   </div>

   <div class="le">
 <a href="forgetpassword.php" class="previous round">&#8249;</a>

</div>
        </form>
    </div>


</div>

</div>


<div class="validation" style="width:300px;height:230px;border:1px solid #000;margin:auto;box-shadow: 5px 5px 10px 1px #000;
padding: 16px">
  <h6>Password must contain the following:</h6>
  <p id="letter" class="invalid">A <b style="color: red">lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b style="color: red">capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b style="color: red">number</b></p>
  <p id="length" class="invalid">Minimum <b style="color: red"> 8 characters</b></p>

</div>

   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<button class="button button4" ; style="margin: 15px" ; onclick="myFunction()">Dark Mode</button>

<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>


</body>
</html>