<?php
class ConNguoi
{
    private $name = 'Vũ Thanh Tài';
    private $age = 20;
    public function __invoke($name)
    {
        if ($name === 'name') {
            echo $this->name;
        }
    }
}
$congnuoi = new ConNguoi();
$congnuoi('name');