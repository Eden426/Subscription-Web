<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Track.php" method="post">
        <input type="radio" name="Subscription" value="New Subscription"> New Subscription<br>
        <input type="radio" name="Subscription" value="renewal Subscription for  services"> renewal Subscription for services <br>
        <input type="submit" value="Confirm" name="Confirm"><br><br><br>
        <a href="Invoice.php" target="_blank">Invoice PDF</a>
        


    </form>
</body>

</html>
<?php
if(isset($_POST["Confirm"])){
    session_destroy();
    header("Location:form.php");
}
?>