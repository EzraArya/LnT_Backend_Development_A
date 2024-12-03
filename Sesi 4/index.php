<?php 
    // Class -> Blueprint untuk object 
    // -> Properties
    // -> Method/function

    class Book {
        public $author, $name, $price;

        // Constructor -> Menginisialisasi properties dari sebuah objek saat pembuatan objek tersebut

        public function __construct($author, $name) {
            $this->author = $author;
            $this->name = $name;
            $this->price = 100;
        }

        public function getPrice() {
            return $this->price;
        }
    }

    // Object -> Hasil implementasi dari blueprint/class
    $book1 = new Book("Ezra", "Legacy of thing");

    // echo $book1->getPrice();

    // Access Modifier -> Cara mengakses suatu data di class
    // Public -> Bisa diakses siapa saja

    // Protected -> Bisa diakses oleh kelas itu sendiri bersama dengan class yang berada dalam satu package dan child class

    // Private -> Data hanya bisa diakses oleh class tersebut saja

    class Product {
        public $name;
        protected $supplier;
        private $price;

        // Getter -> Function untuk mendapatkan data dari class tersebut
        public function getPrice() {
            return $this->price;
        }

        // Setter -> Function untuk mengubah data dari class tersebut
        public function setPrice($price) {
            $this->price = $price;
        }
    }

    $product1 = new Product();
    $product1->name = "Chiki";
    // $product1->supplier = "Indo";
    $product1->setPrice(100);

    echo $product1->getPrice();
?>  