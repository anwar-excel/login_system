<?php
if(isset($_POST['send_message'])){
//    echo "<pre>";
//    print_r($_POST);
//    echo "</pre>";
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "anwarhosen.nu@gmail.com";

    $headers = "From :". $email . "\r\n";
    $headers .= "Content-type: html/text \r\n";
    $errors = [];

    if($name == ''){
        $errors['name'] = 'Name is empty';
    }
    if($subject == ''){
        $errors['subject'] = 'subject is empty';
    }
    if($email == ''){
        $errors['email'] = 'Name is empty';
    }
    if(empty($message)){
        $errors['message'] = 'Message is empty';
    }
    print_r($errors);

    echo count($errors);
    if(count($errors) == 0){
       if( mail($to,$subject,$message,$headers)){
           $message = "Message send";
       }else{
           $message = "Message not send";
       }

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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="post">
    <input type="text" name="name" placeholder="Name">
    <br>
    <p class="errors"><?php if(isset($errors['name'])){
        echo $errors['name'];
        }?></p>
    <input type="text" name="subject" placeholder="subject">
    <br>
    <p class="errors"><?php if(isset($errors['subject'])){
            echo $errors['subject'];
        }?></p>
    <p><?= isset($errors['name'])? $errors['name']: ''?></p>
    <input type="email" name="email" placeholder="Email Address">
    <p class="errors"><?= isset($errors['email'])? $errors['email']: ''?></p>
    <br>
    <textarea placeholder="Message" name="message"></textarea>
    <p class="errors"><?= isset($errors['message'])? $errors['message']: ''?></p>
    <br>
    <input type="submit" name="send_message" value="Send Message">
    <br>
</form>

<p><?php if(isset($message)){ echo  $message;} ?></p>
</body>
</html>
