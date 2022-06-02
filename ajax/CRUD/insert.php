<?php
include("connection.php");

$title= $_POST['titlecol'];
$desc=$_POST['desccol'];
$adddate=date('Y-m-d');


$sql ="INSERT INTO posts(post_title,description,post_at) VALUES ('".$title."','".$desc."','".$adddate."')";

mysqli_query($conn,$sql);


?>