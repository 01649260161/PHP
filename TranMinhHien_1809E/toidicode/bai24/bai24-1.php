<?php
class ConNguoi
{
    public $name = "Vũ Thanh Tài";
    public $age = 21;
    public function __clone()
    {
        echo 'Phương thức __clone() được gọi';
    }
}
$connguoi = new ConNguoi();
$connguoi2 = clone $connguoi;
// Phương thức __clone() được gọi
echo $connguoi2->name;