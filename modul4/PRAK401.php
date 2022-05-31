<?php
    $panjang = "";
    $lebar = "";
    $nilai = "";

    if(isset($_POST["submit"])){
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $nilai = $_POST["nilai"];
    }   
?>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
        }
        table, th, tr, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <div>
            <label for="">Panjang : </label>
            <input type="text" name="panjang" value="<?=$panjang;?>">
        </div>
        <div>
            <label for="">Lebar : </label>
            <input type="text" name="lebar" value="<?=$lebar;?>">
        </div>
        <div>
            <label for="">Nilai : </label>
            <input type="text" name="nilai" value="<?=$nilai;?>">
        </div>
        <button type="submit" name="submit">Cetak</button>
    </form>

    <?php
        if(isset($_POST["submit"])){
            $input = explode(" ", $nilai);
            $jumlahnilai = count($input);
            if($panjang * $lebar == $jumlahnilai){
                $a = 0;
                for($i = 0; $i < $panjang; $i++){
                    for($j = 0; $j < $lebar; $j++){
                        $tabel[$i][$j] = $input[$a];
                        $a++;
                    }
                }
                echo "<table>";
                for($i = 0; $i < $panjang; $i++){
                    echo "<tr>";
                    for($j = 0; $j < $lebar; $j++){
                        echo "<td>".$tabel[$i][$j]."</td>";
                    }
                    echo "</tr>";
                } echo "</table>";
            }
            else {
                echo "Panjang nilai tidak sesuai dengan ukuran matriks";
            }
        }
    ?>
</body>
</html>