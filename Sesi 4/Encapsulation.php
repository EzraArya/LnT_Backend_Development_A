<?php 
    // Class untuk rekening User
    class Rekening {
        private $name, $saldo;

        // CONSTRUCTOR
        public function __construct($name, $saldo) {
            $this->name = $name;
            $this->saldo = $saldo;
        }

        // GETTER
        public function getName() {
            return $this->name;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        // SETTER
        public function setName($name) {
            $this->name = $name;
        }

        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }
    }

    $user1 = new Rekening("Ezra", 100);
    echo $user1->getName();

    $user1->setName(" Arya");
    echo $user1->getName();
?>