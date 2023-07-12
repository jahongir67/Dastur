<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bulma-0.9.4/bulma/css/bulma.css">
    <style>
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none; 
        margin: 0; 
        }
    </style>
</head>
<body>
    <div class="d1">
    <h1 style="font-size: 26px;margin-left:20px;">To'lov</h1>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" style="display: flex;gap: 20px;width: max-content;margin: 20px;">
        <div>
            <div class="select is-link">
                <select name="klasslar" id="sl" style="border-color:red;">
                    <option value="1">1 guruh</option>
                    <option value="2">2 guruh</option>
                    <option value="3">3 guruh</option>
                    <option value="4">4 guruh</option>
                    <option value="5">5 guruh</option>
                    <option value="6">6 guruh</option>
                </select>
            </div>
    </div>
            <input type="number" name="userID" id="userID" placeholder="ID" class="input is-link" style="width: 60px;border-color:red;">
            <div style="display: flex;justify-content: space-between;">
                <div class="select is-link">
                    <select name="tulov" id="tulov" style="border-color:red;">
                        <option value="Nomalum">Nomalum</option>
                        <option value="To'lov Qilindi">To'lov qildi</option>
                        <option value="To'lov Qilinmadi">To'lov qilmadi</option>
                    </select>
                </div>

            </div>
            <input type="date" name="tulov_sana" id="tulov_sana" class="input is-link" style="border-color:red;">
            <input type="submit" value="Ok" class="button is-link">
        </form>
    </div>

    <script>
        let g = document.getElementById("sl");
        let i = document.getElementById("userID");
        let t = document.getElementById("tulov");
        let ts = document.getElementById("tulov_sana");
        
        g.addEventListener("input", ()=>{
        g.style.borderColor = "dodgerblue";
    })
        i.addEventListener("input", ()=>{
        i.style.borderColor = "dodgerblue";
    })
        t.addEventListener("input", ()=>{
        t.style.borderColor = "dodgerblue";
    })
        ts.addEventListener("input", ()=>{
        ts.style.borderColor = "dodgerblue";
    })
    </script>
</body>
</html>

<?php
$sql = new mysqli("localhost", "root", "", "dastur");

if(!empty($_POST['klasslar']) && !empty($_POST['userID']) && !empty($_POST['tulov']) && !empty($_POST['tulov_sana'])){
    $kls = $_POST['klasslar'];
    $uid = $_POST['userID'];
    $tul = $_POST['tulov'];
    $tuls = $_POST['tulov_sana'];

    if($_POST['klasslar'] == "1"){
        $sql->query("UPDATE guruh1 SET `tulov` = '$tuls' WHERE id = '$uid'");
        $r = $sql->query("SELECT * FROM guruh1");
        while($row = $r->fetch_assoc()){
            if($uid == $row['id']){
                $nm = $row["ism"] . " " . $row["familiya"];
                echo "<h2 style='color:green;margin-left:20px;'>Ma'lumotlar to'g'ri yuborildi</h2>";
                $f = fopen("./Base/" . $kls . "_" . $uid . ".txt", "a") or die("Fayl topilmadi 404");
                fwrite($f, $nm .  " " . $tul . " " . $tuls . "\n");
                fclose($f);
            }
        }
    } else if ($_POST['klasslar'] == "2"){
        $sql->query("UPDATE guruh2 SET `tulov` = '$tuls' WHERE id = '$uid'");
        $r = $sql->query("SELECT * FROM guruh2");
        while($row = $r->fetch_assoc()){
            if($uid == $row['id']){
                $nm = $row["ism"] . " " . $row["familiya"];
                echo "<h2 style='color:green;margin-left:20px;'>Ma'lumotlar to'g'ri yuborildi</h2>";
                $f = fopen("./Base/" . $kls . "_" . $uid . ".txt", "a") or die("Fayl topilmadi 404");
                fwrite($f, $nm .  " " . $tul . " " . $tuls . "\n");
                fclose($f);
            }
        }
    } else if ($_POST['klasslar'] == "3"){
        $sql->query("UPDATE guruh3 SET `tulov` = '$tuls' WHERE id = '$uid'");
        $r = $sql->query("SELECT * FROM guruh3");
        while($row = $r->fetch_assoc()){
            if($uid == $row['id']){
                $nm = $row["ism"] . " " . $row["familiya"];
                echo "<h2 style='color:green;margin-left:20px;'>Ma'lumotlar to'g'ri yuborildi</h2>";
                $f = fopen("./Base/" . $kls . "_" . $uid . ".txt", "a") or die("Fayl topilmadi 404");
                fwrite($f, $nm .  " " . $tul . " " . $tuls . "\n");
                fclose($f);
            }
        }
    } else if ($_POST['klasslar'] == "4"){
        $sql->query("UPDATE guruh4 SET `tulov` = '$tuls' WHERE id = '$uid'");
        $r = $sql->query("SELECT * FROM guruh4");
        while($row = $r->fetch_assoc()){
            if($uid == $row['id']){
                $nm = $row["ism"] . " " . $row["familiya"];
                echo "<h2 style='color:green;margin-left:20px;'>Ma'lumotlar to'g'ri yuborildi</h2>";
                $f = fopen("./Base/" . $kls . "_" . $uid . ".txt", "a") or die("Fayl topilmadi 404");
                fwrite($f, $nm .  " " . $tul . " " . $tuls . "\n");
                fclose($f);
            }
        }
    } else if ($_POST['klasslar'] == "5"){
        $sql->query("UPDATE guruh5 SET `tulov` = '$tuls' WHERE id = '$uid'");
        $r = $sql->query("SELECT * FROM guruh5");
        while($row = $r->fetch_assoc()){
            if($uid == $row['id']){
                $nm = $row["ism"] . " " . $row["familiya"];
                echo "<h2 style='color:green;margin-left:20px;'>Ma'lumotlar to'g'ri yuborildi</h2>";
                $f = fopen("./Base/" . $kls . "_" . $uid . ".txt", "a") or die("Fayl topilmadi 404");
                fwrite($f, $nm .  " " . $tul . " " . $tuls . "\n");
                fclose($f);
            } 
        }
    } else if ($_POST['klasslar'] == "6"){
        $sql->query("UPDATE guruh6 SET `tulov` = '$tuls' WHERE id = '$uid'");
        $r = $sql->query("SELECT * FROM guruh6");
        while($row = $r->fetch_assoc()){
            if($uid == $row['id']){
                $nm = $row["ism"] . " " . $row["familiya"];
                echo "<h2 style='color:green;margin-left:20px;'>Ma'lumotlar to'g'ri yuborildi</h2>";
                $f = fopen("./Base/" . $kls . "_" . $uid . ".txt", "a") or die("Fayl topilmadi 404");
                fwrite($f, $nm .  " " . $tul . " " . $tuls . "\n");
                fclose($f);
            }
        }
    }
} else {
    echo "<h1 style='color:red;margin-left:20px;'>Bo'sh joylarni to'ldiring!</h1>";
}
$sql->close();