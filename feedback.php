
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
        width: 300px;
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
          top: 1%;
           left:1%;
  height: 16%;
  width: 16%;
}

.CheckPoint
{
  position: absolute;
          top: 3%;
           left:17%;
  height: 50%;
  width: 50%;
}

body {

  background-image: url('back2.jpg');
 background-repeat: no-repeat;
  background-attachment: fixed;
    background-size: 100% 100%;
   color: black;

}
img.three {
   position: absolute;
          top: 11%;
           left:2%;
  height: 35%;
  width: 50%;
}

</style>

 <div class="centered">


    <div style="width:310px;height:360px;border:1px solid #000;margin:auto;box-shadow: 5px 5px 10px 1px #000;
margin:auto; background-color:white;border-radius: 25px " >
<div class="CheckPoint"><img class="two" src="mitlogo.png" width="50" height="50"><h6>CheckPoint</h6></div>


 <img class="three" src="feedback.png" width="50" height="50"> <br>
<br>
<br>
  <h4 >&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp FeedBack</h4>


<br>
<br>

 <br>
    <div class="w-50  m-auto ">
       <form action="mailto:arlamkhade21@gmail.com" method="post" >
            <div class="form-group">
              <label >Give us a Feedback</label>
           <textarea rows="3" cols="32" placeholder="Write your Feedback"></textarea>
           </div>

           
             <button type="Submit" style="background-color:green ; color:white ;margin:auto;display:block;box-shadow: 5px 5px 10px 1px #000 ;width: 90px; border-radius: 25px" >Submit</button>
        </form>
    </div>




</div>
</div>
<script>
function myFunction() {
  alert("The form was submitted");
}
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>