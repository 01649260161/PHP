<?php
class ConNguoi
{
    private $name;
    public function setName($name = 'Con Nguoi')
    {
        $this->name = $name;
        //trả về đối tượng hiện tại
        return $this;
    }
    public function getName()
    {
        return $this->name;
    }
}
$connguoi = new ConNguoi();
//var_dump đối tượng sau khi khởi tạo
var_dump($connguoi);
var_dump($connguoi->setName('Vũ Thanh Tài'));