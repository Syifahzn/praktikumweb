<form method="POST">
    <div>
        <label for="">Nilai</label>
        <input type="text" name="nilai">
    </div>
    <button type="submit">Konversi</button>
</form>

<?php
    $nilai = NULL;

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST['nilai']))
        {
            $nilai = $_POST['nilai'];
        }
    }

    if($nilai == 0){
        echo "<h2>Hasil: Nol</h2>";
    }
    elseif ($nilai > 0 && $nilai < 10){
        echo "<h2>Hasil: Satuan</h2>";
    }
    elseif ($nilai > 10 && $nilai < 20){
        echo "<h2>Hasil: Belasan</h2>";
    }
    elseif ($nilai == 10 || $nilai >= 20 && $nilai < 100){
        echo "<h2>Hasil: Puluhan</h2>";
    }
    elseif ($nilai >= 100 && $nilai < 1000){
        echo "<h2>Hasil: Ratusan</h2>";
    }
    elseif ($nilai >= 1000){
        echo "<h2>Anda Menginput Melebihi Limit Bilangan</h2>";
    }
?>