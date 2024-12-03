<?php 
    // Polymorphism

    // Method Overridding -> Mengubah implementasi dari suatu method dengan menyesuaikan dengan classnya

    Class Dog {
        public function bark() {
            echo "BARK";
        }
    }

    class Bulldog extends Dog {
        public function bark() {
            echo "BARK BARK BARK";
        }
    }

    $dog = new Dog();
    $bulldog = new Bulldog();

    // $dog->bark();
    $bulldog->bark();


    // Method Overloading
    interface Addition {
        public function addition($num1, $num2);
    }

    class Integer implements Addition{
        public function addition($num1, $num2)
        {
            return $num1 + $num2;
        }
    }

    class Floats implements Addition{
        public function addition($num1, $num2)
        {
            return $num1 + $num2;
        }
    }

    
  
?>