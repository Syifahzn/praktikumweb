<form method="POST" action="">
    <div>
        <label for="">Tinggi: </label>
        <input type="text" name="tinggi">
    </div>
    <div>
        <label for="">Alamat Gambar: </label>
        <input type="text" name="linkUrl">
    </div>
    <button type="submit">Cetak</button>
</form>

<?php
    $tinggi = NULL;
    $linkUrl = NULL;

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST['tinggi']))
        {
            $tinggi = $_POST['tinggi'];
        }

        if(isset($_POST['linkUrl']))
        {
            $linkUrl = $_POST['linkUrl'];
        }

        $i = 0;
        while($i <= $tinggi){
            $j = 0;
            while($j <= $i){
                echo "&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp";
                $j++;
            }
            while($j <= $tinggi){
                echo '<img width ="20px" height ="20px" src = "'.$linkUrl.'"/>';
                $j++;
            }
            echo "<br>";
            $i++;
        }
    }    
?>