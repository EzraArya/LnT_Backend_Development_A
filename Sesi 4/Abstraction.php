<?php 
    abstract class Mamalia {
        public $name;
        abstract public function Say();
    }    

    // Interface -> Hanya memuat Method yang akan digunakan
    interface InterfaceName {
        public function getName();
    }

    class Dog extends Mamalia implements InterfaceName{
        public function Say() {
            echo "Bark";
        }

        public function getName() {
            return $this->name;
        }
    }

    class Cat extends Mamalia {
        public function Say() {
            echo "Meow";
        }
    }

    // $cat = new Cat();
    // $cat->name = "Cat";
    // echo $cat->name;
    // $cat->Say();

    $dog = new Dog();
    $dog->Say();
    $dog->name = "Dog";
    echo $dog->getName();
?>