
//Deklarasi Variable
// var
// let
// const

// const pi = 3.14
// console.log(pi)
// // pi = 123

// // Scope -> Lingkup dimana variabel bisa digunakan
// // Var -> Function scope/ Global scope
// var a = 1
// {
//     var a = 2
//     console.log(a)
// }
// console.log(a)

// // Let -> Block-scope -> bisa digunakan hanya pada lingkupannya
// let b = 1
// {
//     let b = 2
//     console.log(b)
// }
// console.log(b)


//Data Type

//Primitive
// // String -> Teks
// var nama = "Ezra"
// console.log(nama)
// console.log(typeof(nama))

// //Number -> Angka
// // Integer -> Bilangan Bulat -> 1, 2 ,3
// // Double -> Bilangan Desimal -> 1.1 , 2.2
// var num = 1
// console.log(num)
// console.log(typeof(num))

// var dec = 1.1
// console.log(dec)
// console.log(typeof(dec))

// //Boolean -> True or False
// var bol = true
// console.log(bol)
// console.log(typeof(bol))

// // NULL
// var nul = null
// console.log(nul)
// console.log(typeof(nul))

// // Undefined
// var username; //Declare
// // console.log(typeof(username))
// username = "EzraArya"
// // console.log(typeof(username))
// console.log(username)

// username = "Wijaya"
// console.log(username)

// Reference

// Object
// Users
// -> username, password

// var user = {
//     username: "EzraArya",
//     password: "password123"
// }

// console.log(user.username)
// console.log(user.password)

// // Array -> Kumpulan data
// var fruits = ["Mangga", "Pisang", "Apel"]

// console.log(fruits)
// console.log(fruits[0])
// console.log(fruits[1])

// // Masukin data dalam Array
// fruits.push("Jeruk")
// console.log(fruits)

// // Delete data dalam Array
// fruits.pop()
// fruits.pop()
// fruits.pop()
// console.log(fruits)

// Function -> Sebuah objek yang bisa dipanggil berulang kali untuk melaksanakan suatu Instruksi
// Greet User
// function greeting() {
//     console.log("Hello World")
// }

// greeting()

// // Memanggil User -> Hello, nama
// function sayHello(name) {
//     console.log("Hello, " + name)
// }

// sayHello("Ezra")

//Control Flow
// IF Statement

// Jika nama user == username dalam database
// Maka user bisa masuk ke page

// var nilai = 100


// if (nilai >= 90) {
//     console.log("A")
// } else if (nilai < 90 && nilai >= 70) {
//     console.log("B")
// } else {
//     console.log("C")
// }

// Switch Case
// 1 -> Home Page
// 2 -> Detail Page
// 3 -> List Page
// 4 -> Exit

// var input = 5

// switch (input) {
//     case 1:
//         console.log("Home Page")
//         break
//     case 2:
//         console.log("Detail Page")
//         break
//     case 3: 
//         console.log("List Page")
//         break
//     case 4:
//         console.log("Exit")
//         break
//     default:
//         console.log("Incorrect Input")
//         break;
// }


// Looping
// For Loop -> Selama kondisi tersebut terpenuhi lakukan suatu instruksi
// i++ sama aja dengan
// i += 1; i = i + 1

// for(var i = 1; i <= 10; i++) {
//     console.log(i)
// }


// While Loop -> Ketika suatu kondisi terpenuhi maka lakukan suatu instruksi
// var i = 1
// while(i <= 10) {
//     console.log(i)
//     i = i + 1
// }


// Do While Loop -> Lakukan instruksi tersebut ketika kondisi terpenuhi
// var i = 0
// do {
//     console.log(i)
//     i++
// } while(i <= 10)