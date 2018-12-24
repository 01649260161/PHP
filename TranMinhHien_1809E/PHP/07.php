<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css">
        .main-container{
            text-align: center;
            border: 1px solid yellow;
            height: 300px;
        }
        .container a{
            display: inline-block;
            width: 30px;
            text-decoration: none;
            border: 1px solid gray;
            background: #5a6268;
            color: white;
        }
        h1{
            margin: 100px;
        }

    </style>
</head>
<body>
<div class="main-container">
    <div class="container">
        <a href="#">Prev</a>
        <a href="07.php?page=1">1</a>
        <a href="07.php?page=2">2</a>
        <a href="07.php?page=3">3</a>
        <a href="07.php?page=4">4</a>
        <a href="07.php?page=5">5</a>
        <a href="07.php?page=6">6</a>
        <a href="07.php?page=7">7</a>
        <a href="07.php?page=8">8</a>
        <a href="07.php?page=9">9</a>
        <a href="#">Next</a>
    </div>
    <?php
    $page = (isset($_GET["page"]) == true)?$_GET["page"] : 0;
    ?>
    <h1>Ban dang o dong thu <?php echo $page?></h1>
</div>
</body>
</html>
