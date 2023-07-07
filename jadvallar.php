<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bulma-0.9.4/bulma/css/bulma.css">
    <title>JADVAL</title>
</head>
<style>
    table, th, td {
      border:1px solid black;
      padding: 10px;
    }
    details{
        cursor: pointer;
        border: 1px solid black;
        padding: 10px;
        margin: 2px;
    }
    details>summary>b{
        color: red;
        font-size: 20px;
    }
    table>tr>th{
        text-align: center;
    }
    </style>
    <?php
        $db = new mysqli("localhost", "root", "", "dastur");
    ?>
</style>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <div class="select is-info">
            <select name="klasslar">
                <option value="1">Guruh 1</option>
                <option value="2">Guruh 2</option>
                <option value="3">Guruh 3</option>
                <option value="4">Guruh 4</option>
                <option value="5">Guruh 5</option>
                <option value="6">Guruh 6</option>
            </select>
        </div>
        <button type="submit" class="button is-info">Ochish</button>
    </form>
    <?php 
    
    ?>
        <?php
            if ($_POST["klasslar"] == 1) {
                $sql = "SELECT * FROM guruh1";
                $result = $db -> query($sql);
                print   "<table> <tr>
                <th>N/n</th>
                <th>Ism</th>
                <th>Familya</th>
                <th>Telefon raqam-1</th>
                <th>Telefon raqam-2</th>
                <th>Davomat(oxirgi)</th>
                <th>To'lov / Sana</th>
                <th>Ma`lumotlar</th>";
                while ($row = $result -> fetch_assoc()) {
                    print "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['ism']."</td>
                        <td>".$row['familiya']."</td>
                        <td><a href=`tel:".$row['telefon']."`>".$row['telefon']."</a></td>
                        <td><a href=`tel:".$row['telefon2']."`>".$row['telefon2']."</a></td>
                        <td>".$row['davomat']."</td>
                        <td>".$row['tulov']."</td>
                        <td><a href='"."./Base/".$_POST['klasslar']."_".$row['id'].".txt'>Kirish</a></td>
                    </tr>";
            }}else if($_POST["klasslar"] == 2){
                $sql = "SELECT * FROM guruh2";
                $result = $db -> query($sql);
                print   "<table> <tr>
                <th>N/n</th>
                <th>Ism</th>
                <th>Familya</th>
                <th>Telefon raqam-1</th>
                <th>Telefon raqam-2</th>
                <th>Davomat(oxirgi)</th>
                <th>To'lov / Sana</th>";
                while ($row = $result -> fetch_assoc()) {
                    print "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['ism']."</td>
                        <td>".$row['familiya']."</td>
                        <td><a href=`tel:".$row['telefon']."`>".$row['telefon']."</a></td>
                        <td><a href=`tel:".$row['telefon2']."`>".$row['telefon2']."</a></td>
                        <td>".$row['davomat']."</td>
                        <td>".$row['tulov']."</td>
                        <td><a href='"."./Base/".$_POST['klasslar']."_".$row['id'].".txt'>Kirish</a></td>
                    </tr>";
            }
            }else if($_POST["klasslar"] == 3){
                $sql = "SELECT * FROM guruh3";
                $result = $db -> query($sql);
                print   "<table> <tr>
                <th>N/n</th>
                <th>Ism</th>
                <th>Familya</th>
                <th>Telefon raqam-1</th>
                <th>Telefon raqam-2</th>
                <th>Davomat(oxirgi)</th>
                <th>To'lov / Sana</th>";
                while ($row = $result -> fetch_assoc()) {
                    print "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['ism']."</td>
                        <td>".$row['familiya']."</td>
                        <td><a href=`tel:".$row['telefon']."`>".$row['telefon']."</a></td>
                        <td><a href=`tel:".$row['telefon2']."`>".$row['telefon2']."</a></td>
                        <td>".$row['davomat']."</td>
                        <td>".$row['tulov']."</td>
                        <td><a href='"."./Base/".$_POST['klasslar']."_".$row['id'].".txt'>Kirish</a></td>
                    </tr>";
            }
            }
            else if($_POST["klasslar"] == 4){
                $sql = "SELECT * FROM guruh4";
                $result = $db -> query($sql);
                print   "<table> <tr>
                <th>N/n</th>
                <th>Ism</th>
                <th>Familya</th>
                <th>Telefon raqam-1</th>
                <th>Telefon raqam-2</th>
                <th>Davomat(oxirgi)</th>
                <th>To'lov / Sana</th>";
                while ($row = $result -> fetch_assoc()) {
                    print "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['ism']."</td>
                        <td>".$row['familiya']."</td>
                        <td><a href=`tel:".$row['telefon']."`>".$row['telefon']."</a></td>
                        <td><a href=`tel:".$row['telefon2']."`>".$row['telefon2']."</a></td>
                        <td>".$row['davomat']."</td>
                        <td>".$row['tulov']."</td>
                        <td><a href='"."./Base/".$_POST['klasslar']."_".$row['id'].".txt'>Kirish</a></td>
                    </tr>";
            }
            }
            else if($_POST["klasslar"] == 5){
                $sql = "SELECT * FROM guruh5";
                $result = $db -> query($sql);
                print   "<table> <tr>
                <th>N/n</th>
                <th>Ism</th>
                <th>Familya</th>
                <th>Telefon raqam-1</th>
                <th>Telefon raqam-2</th>
                <th>Davomat(oxirgi)</th>
                <th>To'lov / Sana</th>";
                while ($row = $result -> fetch_assoc()) {
                    print "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['ism']."</td>
                        <td>".$row['familiya']."</td>
                        <td><a href=`tel:".$row['telefon']."`>".$row['telefon']."</a></td>
                        <td><a href=`tel:".$row['telefon2']."`>".$row['telefon2']."</a></td>
                        <td>".$row['davomat']."</td>
                        <td>".$row['tulov']."</td>
                        <td><a href='"."./Base/".$_POST['klasslar']."_".$row['id'].".txt'>Kirish</a></td>
                    </tr>";
            }
            }
            else if($_POST["klasslar"] == 6){
                $sql = "SELECT * FROM guruh6";
                $result = $db -> query($sql);
                print   "<table> <tr>
                <th>N/n</th>
                <th>Ism</th>
                <th>Familya</th>
                <th>Telefon raqam-1</th>
                <th>Telefon raqam-2</th>
                <th>Davomat(oxirgi)</th>
                <th>To'lov / Sana</th>";
                while ($row = $result -> fetch_assoc()) {
                    print "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['ism']."</td>
                        <td>".$row['familiya']."</td>
                        <td><a href=`tel:".$row['telefon']."`>".$row['telefon']."</a></td>
                        <td><a href=`tel:".$row['telefon2']."`>".$row['telefon2']."</a></td>
                        <td>".$row['davomat']."</td>
                        <td>".$row['tulov']."</td>
                        <td><a href='"."./Base/".$_POST['klasslar']."_".$row['id'].".txt'>Kirish</a></td>
                    </tr>";
            }
            }
        ?>
    </details>
</body>
</html>