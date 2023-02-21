<?php
$x = 5;

switch ($x){
    case 1:
        echo "ok";
        echo "<br/>";
        break;
    case 2:
        echo "string";
        echo "<br/>";
        break;

    default:
        echo "Invalid";
        echo "<br/>";
        break;


}
$n = 45;
if($n%2 == 0){
    echo "<br/>";
    echo "Even";
    echo "<br/>";

}
else{
    echo "odd";
}

$a = 50;
switch ($a %2 == 0){
    case 1:
        echo "<br/>";
        echo "Even";
        break;
    case 0:
        echo "<br/>";
        echo "odd";
        break;

}



?>
