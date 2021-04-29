<?php
$mm = $_GET["id"];
?>


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
  top: 51%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
 
 img.three {
   position: absolute;
          top: 18%;
           left:19%;
  height: 68%;
  width: 66%;
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

img.two {
   position: absolute;
          top: 2%;
           left:18%;
  height: 12%;
  width: 12%;
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
  top: 92%;
  left: 30%;
  transform: translate(-50%, -50%);
 
}
.ri
{
	position: absolute;
  top: 92%;
  left: 100%;
  transform: translate(-50%, -50%);
 ;
}

.button4 {border-radius: 8px;}

body {

  background-image: url('back2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;

  color: black;

}


.dark-mode {

  background-color: black;
  color: white;
}

.rightbox
{
  position: absolute;
  top: 51%;
  left: 36.5%;
  transform: translate(-50%, -50%);
  text-align: center;
}


</style>



    <div class="centered">

    <div style="width:350px;height:500px;border:1px solid #000;margin:auto;box-shadow: 5px 5px 10px 1px #000;
margin:auto;background: white ;border-radius:  25px ;" >
<br>
<h4 class="text-center">Edit Profile</h4>
  <hr class="my-4" />
    <div class="w-50  m-auto ">

        <form action="dbeditprofile.php?id=<?php echo $mm ?>" method="post">
            <div class="form-group">
            <label >Full Name</label>
             <input type="text" placeholder="Enter Full_Name" style="width: 250px;margin:auto;" name="Full_Name"  class="form-control" required> 
             </div>
             <div class="form-group">
            <label>E-mail</label>
             <input type="E-mail" placeholder="Enter E-mail" style="width: 250px;margin:auto;"  name="e_mail" class="form-control" required> 
             </div>
            <div class="form-group">
            <label >Mobile</label>
             <input type="Mobile" placeholder="Enter Mobile" style="width: 250px;margin:auto;" name="mobile"  class="form-control" required> 
             </div>
             <div class="form-group" >
           <label for="Institute" >Institute</label>
       <select name="institute" id="Institute" style="  padding: 5px 0;">
       <option value="MIT Academy of Engineering,Alandi">MIT &nbsp Academy &nbsp of &nbsp Engineering</option>
    </select>
   </div>
   <div class="ri">
   <button type="Submit" style="background-color:green ; color:white ;margin:auto;display:block;box-shadow: 5px 5px 10px 1px #000 ;border-radius: 15px;width: 65px " >Done</button>
   </div>
       </form>
    </div>

</div>
</div>


<script src="https://kit.fontawesome.com/yourcode.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>