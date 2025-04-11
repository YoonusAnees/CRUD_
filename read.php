<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>

  <?php
  require "database.php";
  
  $sql = "SELECT * FROM crud";
  $result = mysqli_query($connection, $sql);
  
  
  
  ?>
  <body>
    <h1>Student Details</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>

<div class="container">
    <div class="row">
    <div class="table-responsive">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First_Name</th>
      <th scope="col">Last_Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Course</th>
      <th scope="col">Phone_Number</th>



    </tr>
  </thead>
  <tbody>
   <?php
   
   while($row=mysqli_fetch_assoc($result)){
    
    echo "<tr>";
    echo "<th scope='row'>".$row['id']."</th>";
    echo "<td>".$row['first_name']."</td>";
    echo "<td>".$row['last_name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['course']."</td>";
    echo "<td>".$row['phone_no']."</td>";
    echo "</tr>";


   }
   
   ?>
    
  </tbody>
</table>
        </div>
 
    </div>
</div>
   

</html>