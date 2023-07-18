<?php
$d = new mysqli("localhost", "root", "");
$d->query("CREATE DATABASE dastur");
include "db.php";
if($_POST["gsoni"] == 1){
    $sql->query("CREATE TABLE guruh1
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
} else if($_POST["gsoni"] == 2){
    $sql->query("CREATE TABLE guruh1
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh2
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
} else if($_POST["gsoni"] == 3){
    $sql->query("CREATE TABLE guruh1
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh2
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh3
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
} else if($_POST["gsoni"] == 4){
    $sql->query("CREATE TABLE guruh1
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh2
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh3
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh4
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
} else if($_POST["gsoni"] == 5){
    $sql->query("CREATE TABLE guruh1
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh2
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh3
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh4
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh5
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
} else if($_POST["gsoni"] == 6){
    $sql->query("CREATE TABLE guruh1
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh2
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh3
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh4
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh5
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh6
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
} else if($_POST["gsoni"] == 7){
    $sql->query("CREATE TABLE guruh1
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh2
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh3
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh4
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh5
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh6
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh7
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
} else if($_POST["gsoni"] == 8){
    $sql->query("CREATE TABLE guruh1
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh2
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh3
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh4
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh5
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh6
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh7
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh8
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
} else if($_POST["gsoni"] == 9){
    $sql->query("CREATE TABLE guruh1
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh2
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh3
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh4
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh5
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh6
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh7
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh8
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
$sql->query("CREATE TABLE guruh9
(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ism VARCHAR(25) NOT NULL,
familiya VARCHAR(25) NOT NULL,
telefon VARCHAR(20) NOT NULL,
telefon2 VARCHAR(20) NOT NULL,
maktab INT NOT NULL,
sinf INT NOT NULL,
tulov VARCHAR(30) NOT NULL,
davomat VARCHAR(30),
malumotlar TEXT NOT NULL)
");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color: green;">Ma'lumotlar bazasi muvaffaqiyatli yaratildi!</h1>
    <a href="index.html" style="padding: 3px 10px;background: black; color: wheat;font-size: 22px;text-decoration:none;">Ortga</a>
</body>
</html>