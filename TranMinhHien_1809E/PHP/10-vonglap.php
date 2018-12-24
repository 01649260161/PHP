
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chép Phạt</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .container{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chép Phạt</h1>
        <?php
            for($i=0;$i<10;$i++){
                echo " <br>$i : Em xin hứa từ sau sẽ chép bài đầy đủ";
            }
        ?>
    </div>
</body>
</html>