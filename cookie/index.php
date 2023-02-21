<?php
setcookie('name','test');
setcookie('email','admin@gmail.com',time()+60);
setcookie('name','value',time()+60*60*24*365);
//echo time();
print_r($_COOKIE);
?>
