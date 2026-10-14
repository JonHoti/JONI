<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<form method="POST" action="">
    <label for="Username">Username:</label>
    <input type="text" name="Username" id="Username">

    <br><br>

    <label for="Password">Password:</label>
    <input type="password" name="Password" id="Password">

    <br><br>

    <button type="submit">Login</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['Username'];
    $password = $_POST['Password'];

    if (empty($username)) {

        echo '<script>alert("Username is empty");</script>';
    
    } 
    elseif (empty($password)) {

        echo '<script>alert("Password is empty");</script>';
    }
    else if($username != 'dori') {
            echo '<script>alert("Username is not correct");</script>';
    }
    else if($password != 'fejzullahi') {
            echo '<script>alert("Password is not correct");</script>';
    }
    else if ($username === 'jon' && $password === 'hoti') {

        echo '<script>alert("Welcome!");</script>';

    } 
} 
else
    {
       echo '<script>alert("Metoda nuk eshte POST!)</script>'; 
    }
?>

</body>
</html>