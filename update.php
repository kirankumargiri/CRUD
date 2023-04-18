<?php
include 'connect.php';
$id=$_GET['update'];
$sql="select * from transport where id=$id";
$result=mysqli_query($conn,$sql);
if(isset($id)){
    $var1=$_POST['busno'];
    $var2=$_POST['route'];
    $var3=$_POST['drivername'];
    $var4=$_POST['phoneno'];
    $var5=$_POST['fee'];
    $var6=$_POST['timetable'];
 $sql= "update transport set id='$id',busno='$var1',route='$var2',drivername='$var3',
 phoneno='$var4',fee='$var5',timetable='$var6' where id='$id'";
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
    
    <input value="<?php echo $var1;?>" type="text" class="form-control" placeholder="Enter your bus no " name="busno" autocomplete="off">
   
  </div>
  <div class="form-group">
  <label >Route</label>
    
    <input type="text" class="form-control" placeholder="Enter your route " name="route" autocomplete="off" >
   
  </div>
  <div class="form-group">
  <label >Drivername</label>
    
    <input type="text" class="form-control" placeholder="Enter your drivername " name="drivername" autocomplete="off">
   
  </div>
  <div class="form-group">
  <label >phoneno</label>
    
    <input type="number" class="form-control" placeholder="Enter you phone no " name="phoneno" autocomplete="off">
   
  </div>
  <div class="form-group">
  <label >Fee</label>
    
    <input type="number" class="form-control" placeholder="Enter your fee " name="fee" autocomplete="off">
   
  </div>
  <div class="form-group">
  <label >timetable</label>
    
    <input type="time" class="form-control" placeholder="Enter your timetable" name="timetable" autocomplete="off">
   
  </div>
  
<button type="submit"  name="submit" class="btn btn-primary">Update</button>
</form>
</div>



</body>
</html>