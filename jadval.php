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
    details>table, th, td {
      border:1px solid black;
      padding: 10px;
    }
    details{
        cursor: pointer;
        border: 1px solid black;
        padding: 10px;
        margin: 2px;
    }
    table>tr>th{
        text-align: center;
    }
    .btnBack{
            padding: 15px 25px;
            text-decoration: none;
            color: white;
            background-color: blue;
            outline: 3px solid blue;
            border: 3px solid white;
            border-radius: 5px;
            transition: all 0.3s;
        }
    .btnBack:hover{
            padding: 15px 20px;
            text-decoration: none;
            color: blue;
            background-color: white;
            outline: 3px solid white;
            border: 3px solid blue;
            border-radius: 5px;
            transition: all 0.3s;
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
        <select name='klasslar'>
            <?php
                $db = new mysqli("localhost", "root", "", "dastur");
                $bz = "SHOW TABLES";
                $result = $db -> query($bz);

                while ($row = $result -> fetch_assoc()) {
                    echo "<option value='".$row['Tables_in_dastur']."'>".$row['Tables_in_dastur']."</option>";
                };
                echo "</select>";
            ?>
        </div>
        <button type="submit" class="button is-info">Ochish</button>
    </form>
        <?php
            if(!empty($_POST["klasslar"])){
                    $sql = "SELECT * FROM $_POST[klasslar]";
                    $result2 = $db -> query($sql);
                    print   "<table> <tr>
                    <th>N/n</th>
                    <th>Ism</th>
                    <th>Familya</th>
                    <th>Telefon raqam-1</th>
                    <th>Telefon raqam-2</th>
                    <th>Davomat</th>
                    <th>To'lov / Sana</th>
                    <th>Ma`lumotlar</th>
                    </tr>";
                    while ($row2 = $result2 -> fetch_assoc()) {
                        print "<tr>
                            <td>".$row2['id']."</td>
                            <td>".$row2['ism']."</td>
                            <td>".$row2['familiya']."</td>
                            <td><a href=`tel:".$row2['telefon']."`>".$row2['telefon']."</a></td>
                            <td><a href=`tel:".$row2['telefon2']."`>".$row2['telefon2']."</a></td>
                            <td>Oxirgi marta ".$row2['davomat']."</td>
                            <td>Oxirgi marta ".$row2['tulov']."</td>
                            <td><a href='"."./Base/".$_POST['klasslar']."_".$row2['id'].".txt'>Faylni Ochish</a></td>
                        </tr>";
                    }
                    echo "</table>";
            };
        ?>
    <nav style="position:absolute; bottom:50px;left:10px;">
    <a href="index.html" style="padding: 10px 50px;background:black;color:white;">Ortga</a>
</nav>
<h1 style='font-size:18px;color:brown;'>Davomatni yoki to'lovni qo'shganingizdan so'ng guruhni qayta ochish kerak!</h1>
</body>
</html>