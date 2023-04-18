<?php
include 'connect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Transport</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"> <a href="user.php" class="text-light">ADD USER</a>
        </button>
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Busno</th>
      <th scope="col">Route</th>
      <th scope="col">Drivername</th>
      <th scope="col">Phoneno</th>
      <th scope="col">Fee</th>
      <th scope="col">Timetable</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

<?php
$sql="SELECT * FROM transport";
$result=$conn->query($sql);
if ($result->num_rows>0) {
  while ($row=$result->fetch_assoc()) {
    ?>
    <tr>
    <td><?php echo($row['busno']); ?></td>
    <td><?php echo($row['route']); ?></td>
    <td><?php echo($row['drivername']); ?></td>
    <td><?php echo($row['phoneno']); ?></td>
    <td><?php echo($row['fee']); ?></td>
    <td><?php echo($row['timetable']); ?></td>
    <td>
    <button class=" btn btn-primary"><a href="update.php?update='.$id.'" class="text-light"> Update</a></button>
    <button class= "btn btn-danger" ><a href="delete.php? deleteid='.$id.'"  class="text-light">Delete</a></button>
    </td>
    </tr>
    <?php
    # code...
  }
  # code...
} else {
  # code...
}

?>
    <button class=" btn btn-primary"><a href="update.php?update='.$id.'" class="text-light"> Update</a></button>
    <button class= "btn btn-danger" ><a href="delete.php? deleteid='.$id.'"  class="text-light">Delete</a></button>
    }
}

?>

</div>
    
</body>
</html>