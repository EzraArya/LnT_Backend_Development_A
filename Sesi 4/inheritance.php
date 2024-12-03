<?php 
    class Animal {
        public $legs, $name;

        public function makeSound() {
            echo "Rawr";
        }
    }

    Class Mamalia extends Animal {
        public function getNumberOfLegs() {
            return $this->legs;
        }
    }

    $tiger = new Mamalia();
    $tiger->makeSound();

    $tiger->legs = 4;
    echo $tiger->getNumberOfLegs();
?>