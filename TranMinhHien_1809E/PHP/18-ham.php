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
    $val = "ABC";
    function createbox($content,$x,$y){
        $result = '<div style="width: '.$x.'px;height: '.$y.'px">';
        $result .= '<p>' . $content .'<span>̣(200x50)</span></p>';
        $result .= '</div>';
        global $val;
        echo $val;
        return $result;
    }
    $boxa = createbox('Box A',100,200);
    $boxb = createbox('Box B',200,300);
    echo $boxa;
    echo $boxb;
    ?>
</div>
</body>
</html>