

<?php
class ConNguoi
{
    private $name = 'Vũ Thanh Tài';
    private $age = 20;
    public function __sleep()
    {
        //trả về thuộc tính name
        return array('name');
    }
}
echo serialize(new ConNguoi());