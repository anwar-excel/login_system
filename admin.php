<?php
session_start();
if (!isset($_SESSION['email'])){
    header('Location:index.php');
}
?>


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
<h3>Welcome To my admin Panal <span><?php echo $_SESSION['email'];?></span></h3>
<p><?php echo $_SESSION['email'];?></p>
<a href="logout.php">Logout</a>
</body>
</html>
