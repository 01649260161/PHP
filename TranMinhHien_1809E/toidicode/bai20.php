//magic method

<?php
class ConNguoi
{
    private $name = "Vũ Thanh Tài";
    private $age = 22;
    public function __call($methodName, $arguments)
    {
        echo 'Bạn vừa gọi phương thức: ' . $methodName . ' và có các tham số: ' . implode('-', $arguments);
    }
    private function getInfo()
    {
        echo $this->name . ' + ' . $this->age;
    }
}
$connguoi = new ConNguoi();
$connguoi->getInfo();
echo '<br>';
$connguoi->getInfo('name', 'age');