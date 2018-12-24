
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <style type="text/css">
        body{
            background: #9bff71;
        }

        .container{
            border: 1px solid red;
            width: 500px;
            height: 300px;
            text-align: center;
            background: #8d8d8d;
        }
        .container form input{
            display: inline-block;
        }
        .container form input[type ="submit"]{
            display: block;
            width: 100%;
        }
        .container form p{
            float: left;
        }
    </style>
</head>
<body>
<?php
$ketquacv = '';
$ketquadt = '';
$error ='';
    if(isset($_POST['bankinh'])==true &&is_numeric($_POST['bankinh'])){
        $val = $_POST['bankinh'];
        if($val <0){
             $error = "giá trị không đúng";
        }else{
            $ketquacv = chuvi($val);
            $ketquadt = dientich($val);
        }
    }
    function chuvi($bankinh){
        return 2*3.14*$bankinh;
    }
    function dientich($bankinh){
        return $bankinh*$bankinh*3.14;
    }
?>

<div class="main-container">
    <div class="container">
        <form action="chuvihinhtron.php" method="post" name="main-caculatation">
            <h1>Tính Chu Vi Và Diện Tích</h1>
            <p>Bán Kính:</p>
            <input type="text" name="bankinh">
            <input type="submit" name="submit" id="">
        </form>
        <h1>Kết Quả : <?php if(isset($_POST['bankinh'])==true && $_POST['bankinh'] <0){echo $error;}
                                else{
                                    echo 'Chu Vi :'. $ketquacv .'<br>' .'Diện Tích :'. $ketquadt;
                                }
            ?> </h1>
    </div>
</div>
</body>
</html>