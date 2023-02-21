<?php

$conn = mysqli_connect('localhost','root','','youtube');
mysqli_query($conn,"INSERT INTO`users`(`id`,`name`,`email`,`password`) VALUES(NULL,'apm','apm@gmail.com','123456')");