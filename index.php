
<?php
session_start();

if (isset($_SESSION['email'])){
    header('Location:admin.php');
}
if(isset($_POST['login'])){
    define('EMAIL','admin@gmail.com');
    define('PASSWORD','asdf');

    $email = $_POST['email'];
    $password = $_POST['password'];

    if( $email == EMAIL){
        if($password == PASSWORD){
            $_SESSION['email'] = $email;
            header("Location:admin.php");
        }
        else{
            echo "Password is not correct, Plase Correct Your Password.";
        }
    }
    else{
        echo "Email is not correct, Plase Correct Your Email. Thanks";
    }




}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
<div class="login-box">
    <form action="" method="post">
        <input type="email" placeholder="Email Address" name="email" required>
        <input type="password" placeholder="Email Address" name="password" required>
        <input type="submit" name="login" value="Login">
    </form>
</div>
</body>
</html>
