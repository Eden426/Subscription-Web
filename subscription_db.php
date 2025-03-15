<?php
$conn=mysqli_connect("localhost","root","","subscription")
$db = "CREATE DATABASE subscription";
if($conn->query($db)==TRUE){
    echo "Database created succesfully";
}else{
    echo "Error creating database:".$conn->error;
}
$sql = " CREATE TABLE subscription (
    id int AUTO_INCREMENT foriegn KEY;
    type VARCHAR NOT_NULL;
    price DECIMAL NOT_NULL;)"

    $price=$POST["price"];
    $type=$POST["type"];
$query = " INSERT INTO subscription VALUES('$price','$type')";
mysql_query($conn,$query);
if($subscription)
{
    echo "<script> alert('Data Inserted Successfuly')</script>"
}
else
{
    echo "<script> alert('Data not inserted')</script>"
}
>?