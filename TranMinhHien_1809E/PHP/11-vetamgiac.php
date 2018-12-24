<head>
    <meta charset="UTF-8">
    <title>Vẽ Tam Giác</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .container{
            border: 1px solid red;
        }
        .container div ul{
            list-style-type: none;
        }
        .result{
            margin-top: 120px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Vẽ Tam Giác</h1>
    <div class="row">
        <div class="col-sm-12">
            <ul>
                <li class="col-sm-4"><a href="11-vetamgiac.php?type=1"><img src="img/tamgiac.png" alt=""></a></li>
                <li class="col-sm-4"><a href="11-vetamgiac.php?type=2"><img src="img/vuong.png" alt=""></a></li>
                <li class="col-sm-4"><a href="11-vetamgiac.php?type=3"><img src="img/tron.png" alt=""></a></li>
            </ul>
        </div>
    </div>
    <div class="result">
        <?php
            if (isset($_GET["type"])){
                $var = $_GET["type"];
            }
            $i=0;
            $result = "";
            switch ($var){
                case 1:
                    while($i <=5){
                        $i++;
                        $result .= str_repeat("*",$i) . "<br>";
                    }
                    break;
                case 2:
                    for($i=0;$i<6;$i++){
                        echo "********************" . "<br>";
                    }
                    break;
                default:
                    for ($i=0;$i<3;$i++){
                        echo str_repeat("",$i*2);
                        echo str_repeat("*",12+$i*4) . "<br>";
                    }
                    for ($i=0;$i<3;$i++){
                        echo str_repeat("*",24-$i*4) . "<br>";
                    }
                    break;
            }

            echo $result;
        ?>
    </div>
</div>
</body>
</html>