<?php
$conn=mysqli_connect("localhost","root","","clientdb")
if(isset($_POST["submit"])){
    $name=$_POST["username"];
    $password=$POST["pwd"];
    $email=$POST["email"];
    $phonenumber=$POST["phoneNum"];
    $adderss=$POST["address1"];
}
$query = " INSERT INTO clientdb VALUES('', '$name','$password','$email','$phonenumber','$adderss')";
mysql_query($conn,$query);
if($clientdb)
{
    echo "<script> alert('Data Inserted Successfuly')</script>"
}
else
{
    echo "<script> alert('Data not inserted')</script>"
}
>?