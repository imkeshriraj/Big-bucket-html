<?php 
include './dbconnect.php';


$id = $_GET['id'];
echo $id;

$sql="DELETE FROM `cart` WHERE sno=$id";
$result=mysqli_query($conn,$sql);

header("location: cart.php");







?>