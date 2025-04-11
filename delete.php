<?php

require "database.php";

$delete_id=$_GET['id'];
echo $delete_id;

$sql = "DELETE FROM `crud` WHERE `id`=$delete_id"; 
$result = mysqli_query($connection, $sql);
if($result){
    header("Location: read.php");
}   
else{
    echo "Error";
}

?>