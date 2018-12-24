<?php
class ConNguoi
{
    private $name = 'Vũ Thanh Tài';
    private $age = 20;
    public function __sleep()
    {
        return array('name');
    }
    public function getName()
    {
        echo $this->name;
    }
    /**
     * gọi hàm getName khi unserialize()
     */
    public function __wakeup()
    {
        $this->getName();
    }
}
unserialize(serialize(new ConNguoi()));