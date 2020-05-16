<?php
    session_start();
    if(!isset($_SESSION['named']))
        header("location:index.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once("sharedata/nav.php") ?>
    <h1>Contact page</h1>
</body>
</html>