<?php
$text = "text text hgegfetfewdds asyasftdftasgfdayustdfrtfsddyaughiau ASDAASD F ASDFASD";

echo strlen($text);
echo "<br/>";
echo ucwords($text);
echo "<br/>";
echo ucfirst($text);
echo "<br/>";
echo ucwords($text);
echo "<br/>";
echo substr($text,0,6);
echo "<br/>";
echo md5("1234567");
echo "<br/>";

$url ="http://localhost/login_system/string_function/index.php";
$x = explode('/',$url);
echo "<pre>";
print_r($x);
echo "</pre>";



?>