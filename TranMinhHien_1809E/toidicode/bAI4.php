<?php
/*class Person{
    private $name;
    private function run(){
        return 'Day la ham run';
    }
    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
    function getRunMethod(){
        return $this->run();
    }
}
//Khoi tao Class
$person = new Person();
//set thuoc tinh name
$person->setName('Vu Thanh Tai');
//Lay ra thuoc tinh name
echo $person->getName();
//Goi gia tri cua phuong thuc run
echo  $person->getRunMethod();
*/?>

<?php
class Person
{
    protected $name;
}
class Male extends Person{
    function setName($name){
        //Dung vi su dung trong class con
        $this->name = $name;
    }
    function getName(){
        //Dung vi su dung trong class con
        return $this->name;
    }
}
//Khoi tao Class
$person = new Person();
//sai vi bien name co visibility la protected nen khong tac dong tu ngoai class vao duoc
$person->name;
//Khoi tao lop male
$male = new Male();
//tac dong vao bien name thong qua ham setName
$male->setName('Vu Thanh Tai');
echo $male->getName();
