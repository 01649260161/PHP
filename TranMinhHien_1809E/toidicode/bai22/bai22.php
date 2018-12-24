<?php
class ConNguoi
{
    private $name = 'Vũ Thanh Tài';
    private $age = 20;
    public function __toString()
    {
        return 'Phương thức __toString() được gọi';
    }
}
echo new ConNguoi();