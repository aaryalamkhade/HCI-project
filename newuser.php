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
  top: 75%;
  left: 40%;
  transform: translate(-50%, -50%);
 
}
.ri
{
	position: absolute;
  top: 75%;
  left: 60%;
  transform: translate(-50%, -50%);
 ;
}

.button4 {border-radius: 8px;}

.dark-mode {

  background-color: black;
  color: white;
}

</style>




    <div class="centered">

    <div style="width:300px;height:370px;border:1px solid #000;margin:auto;box-shadow: 5px 5px 10px 1px #000;
margin:auto;" >
<br>
    <div class="w-50  m-auto ">
        <form action="userinfo.php" method="post">
            <div class="form-group">
            <label >UserName</label>
             <input type="text" style="width: 250px;margin:auto;" name="Username"  class="form-control"> 
             </div>
             <div class="form-group">
            <label>Password</label>
             <input type="text" style="width: 250px;margin:auto;"  name="Passsword"  class="form-control"> 
             </div>
            <div class="form-group">
            <label >Retype Password</label>
             <input type="text" style="width: 250px;margin:auto;" name="Mobile"  class="form-control"> 
             </div>
        </form>
    </div>
</div>
</div>
<div class="le">
 <a href="createuser.php" class="previous round">&#8249;</a>
</div>
<div class="ri">
	<a href="Login.php" class="next round">&#8250;</a>
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

