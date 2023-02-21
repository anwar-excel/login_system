<?php
$email = "rara@gmai.com";
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "yes";
}
else{
    echo 'No';
}


$ip = "123.333.333";
if(filter_var($ip,FILTER_VALIDATE_IP)){
    echo "yes";
}
else{
    echo 'No';
}

$text = "<h1>something</h1>";
echo $text;
$test = filter_var($text,FILTER_SANITIZE_STRING);

echo $test;

?>

