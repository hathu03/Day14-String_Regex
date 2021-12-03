<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    button {
        background-color: pink;
        color: white;
        border: none;
        border-radius: 10px;
    }
</style>
<form action="" method="post">
    <h2>Validate</h2>

    <table style="border: 1px solid;">
        <th></th>
        <tr>
            <td>Email: </td>
            <td><input type="text" name="email" placeholder="Enter your email"></td>
        </tr>
        <tr>
            <td>Phone Number: </td>
            <td><input type="text" name="phonenumber" placeholder="Enter your phone number"></td>
        </tr>
        <tr>
            <td>Account: </td>
            <td><input type="text" name="account" placeholder="Enter your account"></td>
        </tr>
        <tr>
            <td>Class name: </td>
            <td><input type="text" name="classname" placeholder="Enter your class name"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Submit</button></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['account'];
    $phone = $_POST['phonenumber'];
    $email = $_POST['email'];
    $class = $_POST['classname'];
    function checkEmail($mail)
    {
        $regexp = "/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/";
        if (preg_match($regexp, $mail)) {
            echo("Welcome");
        } else {
            echo("Invalid character");
        }
    }

    function checkAccount($name)
    {
        $regexp = "/^[_a-z0-9]{6,}$/";
        if (preg_match($regexp, $name)) {
            echo("Welcome");
        } else {
            echo("Invalid character");
        }
    }

    function checkClassName($class)
    {
        $regexp = "/^[A|P|C][0-9]{4 }[G|H|I|K|L|M]$/";
        if (preg_match($regexp, $class)) {
            echo("Welcome");
        } else {
            echo("Invalid character");
        }
    }

    function checkPhoneNumber($phone)
    {
        $regexp = "/^\d{2}\-[0]*\d{9}$/";
        if (preg_match($regexp, $phone)) {
            echo("Welcome");
        } else {
            echo("Invalid character");
        }
    }

    checkEmail($email);
    checkPhoneNumber($phone);
    checkAccount($name);
    checkClassName($class);

}