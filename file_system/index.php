<?php
echo  __FILE__;
echo "<br/>";
echo basename(__FILE__);

file_put_contents('test.php','Something',FILE_APPEND);
?>
