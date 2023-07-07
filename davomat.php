<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bulma-0.9.4/bulma/css/bulma.css">

    <style>
        .d1{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .d1 label{
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="d1">
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" style="display: flex;flex-direction: column;align-items: center;width: 250px;">
            <label for="">Guruhni tanlang:</label>
            <div class="select is-info" style="width: 100%;">
                <select name="klasslar" style="width: 100%;">
                    <option value="1">1 guruh</option>
                    <option value="2">2 guruh</option>
                    <option value="3">3 guruh</option>
                    <option value="4">4 guruh</option>
                    <option value="5">5 guruh</option>
                    <option value="6">6 guruh</option>
                </select>
            </div>
<br>
            <label for="">ID raqam kiriting:</label>
            <input type="number" name="userID" id="userID" placeholder="#ID raqam kiriting" class="input is-info">
<br>
            <label for="">Bugungi Davomat:</label>
            <div style="display: flex;justify-content: space-between;">
                <div class="select is-info" style="width: 50%;">
                    <select name="davomat" id="dav" style="width: 100%;">
                        <option value="keldi">Keldi</option>
                        <option value="kelmadi">Kelmadi</option>
                    </select>
                </div>

                <input type="date" name="sana" id="sana" class="input is-info" style="width: 50%;">
            </div>
<br>
            <label for="" style="font-size: 18px;">To'lov haqida: (Majburiy emas)</label>
            <div style="display: flex;justify-content: space-between;">
                <div class="select is-info" style="width: 50%;">
                    <select name="tulov" id="tulov" style="width: 100%;">
                        <option value="Nomalum">Noma'lum</option>
                        <option value="To'lov Qilindi">To'lov qilindi</option>
                        <option value="To'lov Qilinmadi">To'lov qilinmadi</option>
                    </select>
                </div>

                <input type="date" name="tulov_sana" id="tulov_sana" class="input is-info" style="width: 50%;">
            </div>
<br>
            <input type="submit" value="O'zgartirish" class="button is-info" style="width: 100%;">
        </form>
    </div>
</body>
</html>

<?php
$sql = new mysqli("localhost", "root", "", "dastur");

if(!empty($_POST['klasslar']) && !empty($_POST['userID'])){
    $kls = $_POST['klasslar'];
    $uid = $_POST['userID'];
    $dav = $_POST['davomat'];
    $davs = $_POST['sana'];
    $tul = $_POST['tulov'];
    $tuls = $_POST['tulov_sana'];

    if($_POST['klasslar'] == "1"){
        $sql->query("UPDATE guruh1 SET `davomat` = '$dav $davs', `tulov` = '$tuls' WHERE id = '$uid'");
        $r = $sql->query("SELECT * FROM guruh1");
        while($row = $r->fetch_assoc()){
            if($uid == $row['id']){
                $nm = $row["ism"] . " " . $row["familiya"];
            }
        }
        $f = fopen("./Base/" . $kls . "_" . $uid . ".txt", "a") or die("Fayl topilmadi 404");
        fwrite($f, $nm .  " " . $dav . " " . $davs . " // " . $tul . " " . $tuls . "\n");
        fclose($f);
    } else if ($_POST['klasslar'] == "2"){
        $sql->query("UPDATE guruh2 SET `davomat` = 'Oxirgi davomat $davs', `tulov` = '$tuls' WHERE id = '$uid'");
        $r = $sql->query("SELECT * FROM guruh2");
        while($row = $r->fetch_assoc()){
            if($uid == $row['id']){
                $nm = $row["ism"] . " " . $row["familiya"];
            }
        }
        $f = fopen("./Base/" . $kls . "_" . $uid . ".txt", "a") or die("Fayl topilmadi 404");
        fwrite($f, $nm .  " " . $dav . " " . $davs . " // " . $tul . " " . $tuls . "\n");
        fclose($f);
    } else if ($_POST['klasslar'] == "3"){
        $sql->query("UPDATE guruh3 SET `davomat` = 'Oxirgi davomat $davs', `tulov` = '$tuls' WHERE id = '$uid'");
        $r = $sql->query("SELECT * FROM guruh3");
        while($row = $r->fetch_assoc()){
            if($uid == $row['id']){
                $nm = $row["ism"] . " " . $row["familiya"];
            }
        }
        $f = fopen("./Base/" . $kls . "_" . $uid . ".txt", "a") or die("Fayl topilmadi 404");
        fwrite($f, $nm .  " " . $dav . " " . $davs . " // " . $tul . " " . $tuls . "\n");
        fclose($f);
    } else if ($_POST['klasslar'] == "4"){
        $sql->query("UPDATE guruh4 SET `davomat` = 'Oxirgi davomat $davs', `tulov` = '$tuls' WHERE id = '$uid'");
        $r = $sql->query("SELECT * FROM guruh4");
        while($row = $r->fetch_assoc()){
            if($uid == $row['id']){
                $nm = $row["ism"] . " " . $row["familiya"];
            }
        }
        $f = fopen("./Base/" . $kls . "_" . $uid . ".txt", "a") or die("Fayl topilmadi 404");
        fwrite($f, $nm .  " " . $dav . " " . $davs . " // " . $tul . " " . $tuls . "\n");
        fclose($f);
    } else if ($_POST['klasslar'] == "5"){
        $sql->query("UPDATE guruh5 SET `davomat` = 'Oxirgi davomat $davs', `tulov` = '$tuls' WHERE id = '$uid'");
        $r = $sql->query("SELECT * FROM guruh5");
        while($row = $r->fetch_assoc()){
            if($uid == $row['id']){
                $nm = $row["ism"] . " " . $row["familiya"];
            }
        }
        $f = fopen("./Base/" . $kls . "_" . $uid . ".txt", "a") or die("Fayl topilmadi 404");
        fwrite($f, $nm .  " " . $dav . " " . $davs . " // " . $tul . " " . $tuls . "\n");
        fclose($f);
    } else if ($_POST['klasslar'] == "6"){
        $sql->query("UPDATE guruh6 SET `davomat` = 'Oxirgi davomat $davs', `tulov` = '$tuls' WHERE id = '$uid'");
        $r = $sql->query("SELECT * FROM guruh6");
        while($row = $r->fetch_assoc()){
            if($uid == $row['id']){
                $nm = $row["ism"] . " " . $row["familiya"];
            }
        }
        $f = fopen("./Base/" . $kls . "_" . $uid . ".txt", "a") or die("Fayl topilmadi 404");
        fwrite($f, $nm .  " " . $dav . " " . $davs . " // " . $tul . " " . $tuls . "\n");
        fclose($f);
    }
}
$sql->close();
?> b 