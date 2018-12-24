
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
            background: #9bff71;
        }
        .container form input{
            display: inline-block;
            width: 70%;
        }
        .container form > p{
            width: 30%;
        }

        .container form input[type ="submit"]{
            width: 120px;
            line-
        }
        #hihi{
            color: red;
        }
        .container img{
            width: 120px;
            height: 120px;
            -moz-border-radius-topleft:120px;
            -webkit-border-top-left-radius:120px;
            -moz-border-radius-bottomleft:120px;
            -webkit-border-bottom-left-radius:120px;
            -moz-border-radius-topright:120px;
            -webkit-border-top-right-radius:120px;
            -moz-border-radius-bottomright:120px;
            -webkit-border-bottom-right-radius:120px;
        }
    </style>

</head>
<body>
    <?php
        $day = "";
        $mon = "";
        $img = "";
        $time = "";
        $name = "";

        if(isset($_POST["date"]) == true && isset($_POST["month"]) == true){
            $day = $_POST["date"];
            $mon = $_POST["month"];
            if(is_numeric($day) == true && is_numeric($mon)){
                switch ($mon){
                    case 1:
                        if($day<=19){
                            $img = "MaKet.png";
                            $time = "22/12 - 19/10";
                            $name = "Ma Kết";
                        }else{
                            $img = "BaoBinh.png";
                            $time = "20/01 - 18/02";
                            $name = "Bảo Bình";
                        }
                        break;
                    case 2:
                        if($day<=18){
                            $img = "BaoBinh.png";
                            $time = "20/01 - 18/02";
                            $name = "Bảo Bình";
                        }else{
                            $img = "SongNgu.png";
                            $time = "19/02 - 20/03";
                            $name = "Song Ngư";
                        }
                        break;
                    case 3:
                        if($day<=20){
                            $img = "SongNgu.png";
                            $time = "19/02 - 20/03";
                            $name = "Song Ngư";
                        }else{
                            $img = "BachDuong.png";
                            $time = "21/03 - 20/04";
                            $name = "Bạch Dương";
                        }
                        break;
                    case 4:
                        if($day<=20){
                            $img = "BachDuong.png";
                            $time = "21/03 - 20/04";
                            $name = "Bạch Dương";
                        }else{
                            $img = "KimNguư.png";
                            $time = "21/04 - 20/05";
                            $name = "Kim Ngưu";
                        }
                        break;
                    case 5:
                        if($day<=20){
                            $img = "KimNguư.png";
                            $time = "21/04 - 20/05";
                            $name = "Kim Ngưu";
                        }else{
                            $img = "SongTu.png";
                            $time = "21/05 - 21/06";
                            $name = "SongTu";
                        }
                        break;
                    case 6:
                        if($day<=21){
                            $img = "SongTu.png";
                            $time = "21/05 - 21/06";
                            $name = "SongTu";
                        }else{
                            $img = "CuGiai.png";
                            $time = "22/06 - 22/07";
                            $name = "Cự Giải";
                        }
                        break;
                    case 7:
                        if($day<=22){
                            $img = "CuGiai.png";
                            $time = "22/06 - 22/07";
                            $name = "Cự Giải";
                        }else{
                            $img = "SuTu.png";
                            $time = "23/07 - 22/08";
                            $name = "Sư Tử";
                        }
                        break;
                    case 8:
                        if($day<=22){
                            $img = "SuTu.png";
                            $time = "23/07 - 22/08";
                            $name = "Sư Tử";
                        }else{
                            $img = "XuNu.png";
                            $time = "23/08 - 22/09";
                            $name = "Xử Nữ";
                        }
                        break;
                    case 9:
                        if($day<=22){
                            $img = "XuNu.png";
                            $time = "23/08 - 22/09";
                            $name = "Xử Nữ";
                        }else{
                            $img = "ThienBinh.png";
                            $time = "23/09 - 23/10";
                            $name = "Thiên Bình";
                        }
                        break;
                    case 10:
                        if($day<=23){
                            $img = "ThienBinh.png";
                            $time = "23/09 - 23/10";
                            $name = "Thiên Bình";
                        }else{
                            $img = "ThienYet.png";
                            $time = "24/10 - 22/11";
                            $name = "Thiên Yết";
                        }
                        break;
                    case 11:
                        if($day<=22){
                            $img = "ThienYet.png";
                            $time = "24/10 - 22/11";
                            $name = "Thiên Yết";
                        }else{
                            $img = "NhanMa.png";
                            $time = "23/11 - 21/12";
                            $name = "Nhân Mã";
                        }
                        break;
                    default :
                        if($day<=21){
                            $img = "NhanMa.png";
                            $time = "23/11 - 21/12";
                            $name = "Nhân Mã";
                        }else{
                            $img = "MaKet.png";
                            $time = "22/12 - 19/01";
                            $name = "Ma Kết";
                        }
                        break;
                }

            }
        }
    ?>

<div class="main-container">
    <div class="container">
        <div class="row">
            <h1 id="hihi">Bạn Thuộc Chòm Sao Gì ?</h1>
            <form action="09-chomsao.php" method="post" name="main-caculatation">
                <div class="col-sm-3">
                    <p>Ngày Sinh :</p>
                    <p>Tháng Sinh :</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" name="date">
                    <input type="text" name="month">
                </div>
                <input type="submit" name="submit" id="" value="Lấy Kết Quả">
            </form>
        </div>
        <img src="img/<?php echo $img?>" alt="SongNgu">
        <p><?php echo $name?> <span>( <?php echo $time?> )</span></p>
    </div>
</div>
</body>
</html>