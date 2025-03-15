<?php
$conn=mysqli_connect("localhost","root","","subscription")
$db = "CREATE DATABASE subscription";
if($conn->query($db)==TRUE){
    echo "Database created succesfully";
}else{
    echo "Error creating database:".$conn->error;
}
$sql = " CREATE TABLE con_db (
    id int AUTO_INCREMENT foriegn KEY;
    newsubscription VARCHAR;
    renewalsubscription VARCHAR;)"

    $new_sub=$POST["newsubscription"];
    $renewal_sub=$POST["renewalsubscription"];
$query = " INSERT INTO con_db VALUES('$new_sub','$renewal_sub')";
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