<?php
class People{
    function __construct()
    {
        echo 'class nguoi dc khoi tao';
    }
    public function getMessage()
    {
        echo 'Đây là class Foo';
    }
    function __destruct()
    {
        echo 'class nguoi dc huy';
    }
}

/*$foo = new People();
$foo->getMessage();*/
class chil1{
    function __construct()
    {
        echo 'class chil1 dc khoi tao';
    }
    public function getMessage()
    {
        echo 'Đây là class Foo';
    }
    function __destruct()
    {
        echo 'class chil1 dc huy';
    }
}

class chil2 extends People{
    function __construct()
    {
        parent::__construct();
        echo 'class chil2 dc khoi tao';
    }
    public function getMessage()
    {
        parent::getMessage();
        echo 'Đây là class Foo';
    }
    function __destruct()
    {
        parent::__destruct();
        echo 'class chil2 dc huy';
    }
}
/*$foo = new chil2();*/
$foo = new chil2();
echo '<br>';
$foo->getMessage();