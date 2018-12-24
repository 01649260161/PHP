
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
        .container{
            border: 1px solid red;
            width: 500px;
            height: 300px;
            text-align: center;
        }
        .container form input{
            display: table-cell;
        }
        .container form input[type ="submit"]{
            display: block;
            width: 100%;
        }
    </style>
</head>
<body>
    <?php
        $n1 =       "";
        $n2 =       "";
        $caculate = "";
        $flag = true;
        if(isset($_POST["number1"]) == true && isset($_POST["number2"]) == true && isset($_POST["pheptoan"]) == true) {

            $n1 = $_POST["number1"];
            $n2 = $_POST["number2"];
            $caculate = $_POST["pheptoan"];
            if (is_numeric($n1) && is_numeric($n2)){
                switch ($caculate) {
                    case '+':
                        $result = $n1 + $n2;
                        break;
                    case '-':
                        $result = $n1 - $n2;
                        break;
                    case '*':
                        $result = $n1 * $n2;
                        break;
                    case '/':
                        $result = $n1 / $n2;
                        break;
                    default:
                        $result = 0;
                        break;
                }
            }else{
                $flag =false;
                $result ="Khong thuc hien duoc!!";
            }
        }
    ?>

    <div class="main-container">
        <div class="container">
            <form action="08-maytinhdientu.php" method="post" name="main-caculatation">
                <p>So thu 1 :</p>
                <input type="text" name="number1">
                <p>phep toan :</p>
                <input type="text" name="pheptoan">
                <p>So thu 2 :</p>
                <input type="text" name="number2">
                <input type="submit" name="submit" id="">
            </form>
            <h1>Ket Qua : <?php
                if($flag ==true) {
                    echo $n1 . " " . $caculate . " " . $n2 . " = " . $result;
                }else{
                    echo $result;
                }
                ?></h1>
        </div>
    </div>
</body>
</html>
