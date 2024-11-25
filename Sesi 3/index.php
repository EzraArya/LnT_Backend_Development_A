<?php 
    // Code kita
    // echo "Hello World";

    // Variable: $nama_variable = value;
    // $nama = "Ezra";
    // echo $nama;

    // // Constant Variable
    // // define()
    // define("pi", 3.14);
    // echo pi;
    // // const
    // const gravity = 9.8;
    // echo gravity;

    // // Bersifat case-sensitive
    // $name = "Ezra";
    // $Name = "Arya";

    // echo $name;
    // echo $Name;

    // $name = "Ezra";
    // var_dump($name);

    // $name = 1;
    // var_dump($name);

    // // Tipe Data
    // // String -> Text
    // $name = "Ezra";
    // var_dump($name);

    // echo "<br>";
    // // Integer -> Bilangan bulat
    // $angka = 1;
    // var_dump($angka);
    // echo "<br>";

    // // Float -> Bilangan desimal
    // $desimal = 1.1;
    // var_dump($desimal);
    // echo "<br>";

    // // Boolean -> True or False
    // $boo = true;
    // var_dump($boo);
    // echo "<br>";

    // // NULL -> Tidak memiliki value
    // $nul = null;
    // var_dump($nul)

    // Conditional -> Menerapkan suatu kondisi untuk menjalankan suatu kode apabila si kondisi terpenuhi
    // IF, IF Else, Else, Switch

    // $angka = 3;

    // // if ($angka == 1) {
    // //     echo "Satu";
    // // } elseif ($angka == 2) {
    // //     echo "Dua";
    // // } else {
    // //     echo "Bukan satu atau dua";
    // // }

    // switch ($angka) {
    //     case 1:
    //         echo "Satu";
    //         break;
    //     case 2:
    //         echo "Dua";
    //         break;
    //     default:
    //         echo "Bukan satu atau dua";
    //         break;
    // }

    // Looping -> Menjalankan suatu instruksi berulang kali selama suatu kondisi terpenuhi
    
    // For Loop
    // for($i = 1; $i <= 10; $i += 1) {
    //     echo $i;
    //     echo "<br>";
    // }

    // While Loop
    // $angka = 11;

    // while ($angka <= 10) {
    //     echo $angka;
    //     echo "<br>";
    //     $angka += 1;
    // }

    // Do While Loop
    // $angka = 11;

    // do {
    //     echo $angka;
    // } while ($angka <= 10);

    // Foreach Loop -> Mengiterasikan Item dalam suatu array
    // $fruits = array("Mangga", "Apel", "Pisang");

    // // foreach ($fruits as $fruit) {
    // //     echo $fruit;
    //     // echo "<br>";
    // // }

    // // var_dump($fruits);
    // // echo $fruits[0];
    // for ($i=0; $i < 3; $i++) { 
    //     echo $fruits[$i];
    //     echo "<br>";
    // }

    function sayHello() {
        echo "Hello World";
    }

    function greetings($name = "Ezra") {
        echo "Hello, $name";
    }

    greetings("Arya");
?>