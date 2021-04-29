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
      img.three {
   position: absolute;
          top: 11%;
           left:2%;
  height: 35%;
  width: 50%;
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
  left: 65%;
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

    <div style="width:380px;height:500px;border:1px solid #000;margin:auto;box-shadow: 5px 5px 10px 1px #000;
margin:auto;background: white ;border-radius: 25px ;" >
<br>
<h4 class="text-center">Response Has Been Recorded!!</h4>
<img class="three" src="thumps_up.jpg" width="50" height="50"> <br>
    <div class="w-50  m-auto ">

        <form action="newprofile.php?id=<?php echo $mm ?>" method="post">
            
   <div class="ri">
   <button type="Submit" style="background-color:green ; color:white ;margin:auto;display:block;box-shadow: 5px 5px 10px 1px #000 ;border-radius: 15px;width: 90px " >Done</button>
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