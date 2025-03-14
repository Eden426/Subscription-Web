<?php
try {
    include_once "form.php";
    require_once "../Database/Exercise1/DataB.php";
    $query = "INSERT INTO clientdb(username,pwd,email,phoneNum,address1) Values(:username,:pwd,:email,:PhoneNum,:address1);";

    $input = $conn->prepare($query);
    $input->bindparam(":username", $username);
    $input->bindparam(":pwd", $password);
    $input->bindparam(":email", $email);
    $input->bindparam(":PhoneNum",  $phoneNumber);
    $input->bindparam(":address1",  $address);
 

    $input->execute([$username, $password, $email, $phoneNumber, $address]);
    $conn = null;
    $input = null;

    header("Location:form.php");
    die();
} catch (\Throwable $th) {
    die("Query failed:". $th->getMessage());
}
