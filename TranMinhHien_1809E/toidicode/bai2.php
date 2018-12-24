<?php
    class Name{
        var $propertyname;
        const constname = value;
        function methodName(){

        }
    }
    class Person{

    }
    class ConNguoi{
        var $name;
        var $mat;
        var $mui;
        const sochan =2;
        function an(){}
        function noi($caunoi){
            return $this->name = $caunoi;
        }
        function getSoChan(){
            return self::sochan;
        }
        function di(){}
    }
    new className;
    new className();
    $variable = new className();
    $Tai =new ConNguoi();

    self::propertyName;
    className::propertyName;
$newClass = new className();
$newClass->propertuName;
className::propertyName;

$tai = new ConNguoi();
$tai->name;
$tai->mui;
ConNguoi::sochan;

$connguoi = new ConNguoi();
$connguoi->name ='Tran Minh Hien';
echo $connguoi->name;
echo $connguoi->noi('Tran Minh Hien');