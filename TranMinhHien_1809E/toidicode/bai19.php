
/*class ConNguoi
{
    private static $name;
    public function __isset($name)
    {
        echo 'Bạn vừa kiểm tra thuộc tính: ' . $name;
    }

}
$connguoi = new ConNguoi();
isset($connguoi->name);
empty($connguoi->name);
isset($connguoi->age);*/

<?php
class ConNguoi
{
    private $name;
    public function __unset($name)
    {
        echo 'Bạn vừa hủy thuộc tính: ' . $name;
    }
}
$connguoi = new ConNguoi();
unset($connguoi->name);
unset($connguoi->age);