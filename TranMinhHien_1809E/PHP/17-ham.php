<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style type="text/css">
    *{
        margin: 0px;
        padding: 0px;
    }
    div.content{
        width: 800px;
        height: auto;
        border: 2px solid #0CC;
        margin: 20px auto;
        padding: 20px;
    }
    div.content div{
        border: 1px solid #0CC;
        padding: 5px;
        text-align: center;
        margin-bottom: 10px;
    }
    div.content div p{
        font-weight:bold ;
    }
    div.content div p span{
        font-style: italic;
        font-weight: normal;
    }

</style>
<body>
<div class="content">
    <?php
    function createbox($x,$y){
        echo '<div style="width: 200px;height: 50px">';
        echo '<p>Box A <span>̣(200x50)</span></p>';
        echo '</div>';
    }
    echo createbox();
    echo createbox();
    echo createbox();
    ?>
</div>
</body>
</html>