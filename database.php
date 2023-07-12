<?php
$d = new mysqli("localhost", "root", "");
$d->query("CREATE DATABASE dastur");
$bz = new mysqli("localhost", "root", "", "dastur");
$bz->query("CREATE TABLE guruh1
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
$bz->query("CREATE TABLE guruh2
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
$bz->query("CREATE TABLE guruh3
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
$bz->query("CREATE TABLE guruh4
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
$bz->query("CREATE TABLE guruh5
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
$bz->query("CREATE TABLE guruh6
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color: green;">ma'lumotlar bazasi muvaffaqiyatli yaratildi!</h1>
    <a href="index.html" style="padding: 3px 10px;background: black; color: wheat;font-size: 22px;text-decoration:none;">Ortga</a>
</body>
</html>