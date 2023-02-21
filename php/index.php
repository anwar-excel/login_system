<?php
if(isset($_GET['page'])){
    $page = $_GET['page'].'.php';
}
else{
    $page = "";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
      <h1>Header</h1>
  </header>
<nav>
    <ul>
        <li><a href="index.php?page=home">home-1</a></li>
        <li><a href="index.php?page=about">about-2</a></li>
        <li><a href="index.php?page=contact">contact-3</a></li>
        <li><a href="index.php?page=service">service-4</a></li>
        <li><a href="index.php?page=help">help-5</a></li>
    </ul>
</nav>
<section>
    <?php
    if(file_exists($page)){
        require_once $page;
    }else{
        echo "file Not Found";
    }
    ?>

</section>

<footer>
    footer
</footer>
</body>
</html>