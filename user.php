<?php

include 'connect.php';
if(isset($_POST['submit'])){
    
    $var1=$_POST['busno'];
    $var2=$_POST['route'];
    $var3=$_POST['drivername'];
    $var4=$_POST['phoneno'];
    $var5=$_POST['fee'];
    $var6=$_POST['timetable'];
 $sql= "INSERT INTO transport(busno,route,drivername,phoneno,fee,timetable)
  VALUES('$var1','$var2','$var3','$var4','$var5','$var6')";
  $result=mysqli_query($conn,$sql);
  if($result){
    header('location:display.php');
    
  } else{
    die(mysqli_error($conn));
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Transport</title>
  </head>
  <body>
    <div class="container my-5">
    <form action="" method="post">
        
  <div class="form-group">
  <label >Busno</label>
    
    <input type="text" class="form-control" placeholder="enter your bus no " name="busno">
   
  </div>
  <div class="form-group">
  <label >Route</label>
    
    <input type="text" class="form-control" placeholder="enter your route " name="route">
   
  </div>
  <div class="form-group">
  <label >Drivername</label>
    
    <input type="text" class="form-control" placeholder="enter your drivername " name="drivername">
   
  </div>
  <div class="form-group">
  <label >phoneno</label>
    
    <input type="number" class="form-control" placeholder="enter you phone no " name="phoneno">
   
  </div>
  <div class="form-group">
  <label >Fee</label>
    
    <input type="number" class="form-control" placeholder="enter your fee " name="fee">
   
  </div>
  <div class="form-group">
  <label >timetable</label>
    
    <input type="time" class="form-control" placeholder="enter your timetable" name="timetable">
   
  </div>
  
<button type="submit"  name="submit" class="btn btn-primary">Submit</button>
</form>
</div>



</body>
</html>