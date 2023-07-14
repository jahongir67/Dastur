<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bulma-0.9.4/bulma/css/bulma.css">
    <title>O'quvchilar jadvali</title>
</head>
<style>
    body{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .okno{
        position: absolute;
        top: 0;
        left: 0;
    }
    .okno2{
        position: absolute;
        top: 0;
        right: 0;
    }
    .okno iframe{
        width: 800px;
        height: 160px;
    }
    .okno2 iframe{
        width: 640px;
        height: 160px;
    }
    form{
        margin-bottom: 60px;
    }
    form button, form #bb{
        width: 200px;
    }
    form div select{
        width: 100%;
    }
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
    <div style="display:flex;justify-content:space-beetwen;width:100%;">
        <div class="okno">
            <iframe src="davomat.php" frameborder="0" scrolling="no"></iframe>
        </div>
        <div class="okno2">
            <iframe src="tulov.php" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <div class="select is-info" id="bb">
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
        if(!empty($_POST["klasslar"])){
            if ($_POST["klasslar"] == 1) {
                $sql = "SELECT * FROM guruh1";
                $result = $db -> query($sql);
                print   "<table> <tr>
                <th>N/n</th>
                <th>Ism</th>
                <th>Familya</th>
                <th>Telefon raqam-1</th>
                <th>Telefon raqam-2</th>
                <th>Davomat</th>
                <th>To'lov / Sana</th>
                <th>Ma`lumotlar</th>";
                while ($row = $result -> fetch_assoc()) {
                    print "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['ism']."</td>
                        <td>".$row['familiya']."</td>
                        <td><a href=`tel:".$row['telefon']."`>".$row['telefon']."</a></td>
                        <td><a href=`tel:".$row['telefon2']."`>".$row['telefon2']."</a></td>
                        <td>Oxirgi marta ".$row['davomat']."</td>
                        <td>Oxirgi marta ".$row['tulov']."</td>
                        <td><a href='"."./Base/".$_POST['klasslar']."_".$row['id'].".txt'>Faylni Ochish</a></td>
                    </tr>";
                }
            } else if($_POST["klasslar"] == 2){
                $sql = "SELECT * FROM guruh2";
                $result = $db -> query($sql);
                print   "<table> <tr>
                <th>N/n</th>
                <th>Ism</th>
                <th>Familya</th>
                <th>Telefon raqam-1</th>
                <th>Telefon raqam-2</th>
                <th>Davomat</th>
                <th>To'lov / Sana</th>
                <th>Ma`lumotlar</th>";
                while ($row = $result -> fetch_assoc()) {
                    print "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['ism']."</td>
                    <td>".$row['familiya']."</td>
                    <td><a href=`tel:".$row['telefon']."`>".$row['telefon']."</a></td>
                        <td><a href=`tel:".$row['telefon2']."`>".$row['telefon2']."</a></td>
                        <td>Oxirgi marta ".$row['davomat']."</td>
                        <td>Oxirgi marta ".$row['tulov']."</td>
                        <td><a href='"."./Base/".$_POST['klasslar']."_".$row['id'].".txt'>Faylni ochish</a></td>
                    </tr>";
                }
            } else if($_POST["klasslar"] == 3){
                $sql = "SELECT * FROM guruh3";
                $result = $db -> query($sql);
                print   "<table> <tr>
                <th>N/n</th>
                <th>Ism</th>
                <th>Familya</th>
                <th>Telefon raqam-1</th>
                <th>Telefon raqam-2</th>
                <th>Davomat</th>
                <th>To'lov / Sana</th>
                <th>Ma`lumotlar</th>";
                while ($row = $result -> fetch_assoc()) {
                    print "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['ism']."</td>
                    <td>".$row['familiya']."</td>
                    <td><a href=`tel:".$row['telefon']."`>".$row['telefon']."</a></td>
                    <td><a href=`tel:".$row['telefon2']."`>".$row['telefon2']."</a></td>
                        <td>Oxirgi marta ".$row['davomat']."</td>
                        <td>Oxirgi marta ".$row['tulov']."</td>
                        <td><a href='"."./Base/".$_POST['klasslar']."_".$row['id'].".txt'>Faylni ochish</a></td>
                        </tr>";
                    }
                } else if($_POST["klasslar"] == 4){
                    $sql = "SELECT * FROM guruh4";
                    $result = $db -> query($sql);
                    print   "<table> <tr>
                    <th>N/n</th>
                    <th>Ism</th>
                    <th>Familya</th>
                    <th>Telefon raqam-1</th>
                <th>Telefon raqam-2</th>
                <th>Davomat</th>
                <th>To'lov / Sana</th>
                <th>Ma`lumotlar</th>";
                while ($row = $result -> fetch_assoc()) {
                    print "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['ism']."</td>
                        <td>".$row['familiya']."</td>
                        <td><a href=`tel:".$row['telefon']."`>".$row['telefon']."</a></td>
                        <td><a href=`tel:".$row['telefon2']."`>".$row['telefon2']."</a></td>
                        <td>Oxirgi marta ".$row['davomat']."</td>
                        <td>Oxirgi marta ".$row['tulov']."</td>
                        <td><a href='"."./Base/".$_POST['klasslar']."_".$row['id'].".txt'>Faylni ochish</a></td>
                        </tr>";
            }
            } else if($_POST["klasslar"] == 5){
                $sql = "SELECT * FROM guruh5";
                $result = $db -> query($sql);
                print   "<table> <tr>
                <th>N/n</th>
                <th>Ism</th>
                <th>Familya</th>
                <th>Telefon raqam-1</th>
                <th>Telefon raqam-2</th>
                <th>Davomat)</th>
                <th>To'lov / Sana</th>
                <th>Ma`lumotlar</th>";
                while ($row = $result -> fetch_assoc()) {
                    print "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['ism']."</td>
                    <td>".$row['familiya']."</td>
                    <td><a href=`tel:".$row['telefon']."`>".$row['telefon']."</a></td>
                        <td><a href=`tel:".$row['telefon2']."`>".$row['telefon2']."</a></td>
                        <td>Oxirgi marta ".$row['davomat']."</td>
                        <td>Oxirgi marta ".$row['tulov']."</td>
                        <td><a href='"."./Base/".$_POST['klasslar']."_".$row['id'].".txt'>Faylni ochish</a></td>
                        </tr>";
                    }
                } else if($_POST["klasslar"] == 6){
                    $sql = "SELECT * FROM guruh6";
                $result = $db -> query($sql);
                print   "<table> <tr>
                <th>N/n</th>
                <th>Ism</th>
                <th>Familya</th>
                <th>Telefon raqam-1</th>
                <th>Telefon raqam-2</th>
                <th>Davomat</th>
                <th>To'lov / Sana</th>
                <th>Ma`lumotlar</th>";
                while ($row = $result -> fetch_assoc()) {
                    print "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['ism']."</td>
                    <td>".$row['familiya']."</td>
                    <td><a href=`tel:".$row['telefon']."`>".$row['telefon']."</a></td>
                    <td><a href=`tel:".$row['telefon2']."`>".$row['telefon2']."</a></td>
                        <td>Oxirgi marta ".$row['davomat']."</td>
                        <td>Oxirgi marta ".$row['tulov']."</td>
                        <td><a href='"."./Base/".$_POST['klasslar']."_".$row['id'].".txt'>Faylni ochish</a></td>
                    </tr>";
                }
            }
        } else {
            echo "<h1 style='color:red;font-size: 20px;'>Guruhni tanlang!</h1>";
        }
        ?>
    </details>
    <nav style="position:absolute; bottom:50px;left:10px;">
    <a href="index.html" style="padding: 10px 50px;background:black;color:white;">Ortga</a>
</nav>
<h1 style='font-size:18px;color:brown;'>Davomatni yoki to'lovni qo'shganingizdan so'ng guruhni qayta ochish kerak!</h1>
</body>
</html>