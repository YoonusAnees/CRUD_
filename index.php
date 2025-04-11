<?php

include "database.php";

if(isset($_POST["submit"])){

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$Email = $_POST["email"];
$Course = $_POST["course"];
$Gender = $_POST["gender"];
$Phone_No = $_POST["phone_no"];


    
$sql = "INSERT INTO `crud`(`first_name`, `last_name`, `email`, `course`, `gender`, `phone_no`) VALUES ('$first_name','$last_name','$Email','$Course','$Gender','$Phone_No')";
$result= mysqli_query($connection, $sql);
if($result){
    header("Location:read.php");
}else{
    echo "Failed to insert data";
    die(mysqli_error($connection));
}

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>


    
<div class="continaer mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Registration </h2>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="First_Name" class="form-label">First_Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                </div>
                <div class="mb-3">
                    <label for="Last_Name" class="form-label">Last_Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                <select class="form-select" name="course" aria-label="Default select example">
                       <option selected>Open this select Course</option>
                     <option value="PHP">PHP</option>
                     <option value="Laravel">Laravel</option>
                     <option value="bootstrap">bootstrap</option>
                     <option value="Javascript">Javascript</option>
                </select>
                </div>
                
                <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" value="Male" id="radioDefault1">
                  <label class="form-check-label" for="radioDefault1">
                      Male
                  </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="Female" id="radioDefault2" checked>
                 <label class="form-check-label" for="radioDefault2">
                      Female
                 </label>
                </div>

                </div>

                <div class="mb-3">
                <label for="phone" class="form-label">Phone_Number</label>
                <input type="text" class="form-control" id="phone" name="phone_no" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Registrarse</button>
                <a class="btn btn-primary" href="read.php" role="button">see all</a>
            </form>
        </div>
    </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</body>
</html>