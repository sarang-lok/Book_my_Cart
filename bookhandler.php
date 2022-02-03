<?php

$host="localhost";
$user="root";
$password="";
$dbname="bookcart";

$connect=mysqli_connect($host,$user,$password,$dbname);

$name=$_POST['name'];
$details=$_POST['details'];
$price=$_POST['price'];
$stock=$_POST['stock'];

$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$target="books/".$file_name;


move_uploaded_file($file_tmp, $target);




$sql="INSERT INTO books(name,details,price,stock,picture) VALUES('$name','$details','$price','$stock','$target')";

$connect->query($sql);

header('location: booksshow.php');


?>