<body>
<?php
    $bintang = 0;
    $i = 0;
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $bintang = (int)$_POST['bintang'];
    }    
    if(isset($_POST['tambah']))
    {
        $bintang += 1;
    }
    if(isset($_POST['kurang']))
    {
        $bintang -= 1;
    }
    if($bintang == 0){?>
        <html>
        <form method="POST" action="">
            <div>
                <label for="">Jumlah bintang </label>
                <input type="text" name="bintang">
            </div>
            <button type="submit">Submit</button>
        </form>
        </html>
    <?php }
    if($bintang > 0){
        echo "Jumlah bintang $bintang</br>"?>
        <br>
        <?php
        while($i < $bintang){
            echo "<img width='30px' height='30px' src= 'star.png'/>";
            $i++;
        }?>
        <form method="POST">
            <input type="text" name="bintang" value="<?php echo $bintang ?>" hidden>
            <br><button type="submit" name="tambah" value="Tambah">Tambah</button>
            <button type="submit" name="kurang" value="Kurang">Kurang</button>
        </form>
    <?php }   
?>    
</body>