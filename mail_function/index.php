<?php
$to = "anwarhosen.nu@gmail.com";
$subject = "test Subject test";
$message = "Message Message";

if(mail($to,$subject,$message)){
    echo "message successfully send";

}else{
    echo "message not send";
}
?>