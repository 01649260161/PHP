<?php
    class Personnel{
        private $name = 'Vu Van A';
        private $age = 32;

        public function getPersonnel(){
            return $this->name .'-' .$this->age;
        }
    }

    $foo = new Personnel();
    echo $foo->getPersonnel();