<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milk Subscription Management</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form">
            <h1>Customer Information</h1>
            <label for="name">Customer Full Name:</label>
            <input type="text" id="name" name="username" placeholder="Full Name"><br><br>
            <label for="password">Password:</label>
            <input type="password" name="pwd" placeholder="Password"><br><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required placeholder="der@gmail.com"><br><br>
            <hr>
            <label for="Phone"> PhoneNo:</label>
            <input type="tel" id="number" name="phoneNum" placeholder="phone No" required><br><br>
            <label for="Address"> Address:</label>
            <input type="text" id="address" name="address1" required placeholder="address"><br><br>
            <button type="submit" value="Sign up" name="Signup">submit</button>
            <br>
            <br>


        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Signup"])) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "pwd", FILTER_SANITIZE_SPECIAL_CHARS);
        $emailBF = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $phoneNumberBF = filter_input(INPUT_POST, "phoneNum", FILTER_SANITIZE_NUMBER_INT);
        $addressBF = filter_input(INPUT_POST, "address1", FILTER_UNSAFE_RAW);
        $email = filter_var($emailBF, FILTER_VALIDATE_EMAIL);
        $phoneNumber = filter_var($phoneNumberBF, FILTER_VALIDATE_INT);
        $messages = [];


        if (empty($username)) {
            header("Location:form.php");
            exit();
        }
        if (empty($username) && empty($password)) {
            $messages[] = "Please insert FullName/Password";
        }

        if (!empty($password)) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
        }
        if ($email == false) {
            $messages[] = "Invalid email address";
        }

        if (!preg_match('/^2519[0-9]{8}$/', $phoneNumber)) {
            $messages[] = "Invalid Phone Number";
        }
        if (!empty($addressBF) && !preg_match('/^[a-zA-Z0-9\s,.-]+$/', $addressBF)) {

            $messages[] = "InValid address";
        }
        if (!empty($messages)) {
            foreach ($messages as $message) {
                echo $message . "<br>";
            }
        } else {
            header("Location: Track.php");
            exit();
        }
    }
    

    ?>
</body>

</html>