<form method="POST">
    <div>
        <label for="">Nilai</label>
        <input type="text" name="suhu">
    </div>
    <div>
    <label for="">Dari  :</label><br/>
        <input type="radio" name="dari_suhu" value="dariCelcius">Celcius<br/>
        <input type="radio" name="dari_suhu" value="dariFahrenheit">Fahrenheit<br/>
        <input type="radio" name="dari_suhu" value="dariRheamur">Rheamur<br/>
        <input type="radio" name="dari_suhu" value="dariKelvin">Kelvin<br/>
    </div>
    <div>
        <label for="">Ke  :</label><br/>
        <input type="radio" name="ke_suhu" value="keCelcius">Celcius<br/>
        <input type="radio" name="ke_suhu" value="keFahrenheit">Fahrenheit<br/>
        <input type="radio" name="ke_suhu" value="keRheamur">Rheamur<br/>
        <input type="radio" name="ke_suhu" value="keKelvin">Kelvin<br/>
    </div>
    <button type="submit">Konversi</button>
</form>

<?php
    $suhu = "";
    $dari_suhu = "";
    $ke_suhu = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST['suhu']))
        {
            $suhu = $_POST['suhu'];
        }

        if(isset($_POST['dari_suhu']))
        {
            $dari_suhu = $_POST['dari_suhu'];
        }

        if(isset($_POST['ke_suhu'])){
            $ke_suhu = $_POST['ke_suhu'];
        }

        switch($dari_suhu){
            case "dariCelcius" :
                switch($ke_suhu){
                    case "keCelcius" :
                        echo "<h2> Hasil Konversi: $suhu °C</h2>";
                        break;
                    case "keFahrenheit" :
                        $konversi = (9/5 * $suhu) + 32;
                        echo "<h2> Hasil Konversi: $konversi °F</h2>";
                        break;
                    case "keRheamur" :
                        $konversi = 4/5 * $suhu;
                        echo "<h2> Hasil Konversi: $konversi °Re</h2>";
                        break;
                    case "keKelvin" :
                        $konversi = $suhu + 273;
                        echo "<h2> Hasil Konversi: $konversi °K</h2>";
                        break;
                    default :
                        echo "";
                }
                break;
            case "dariFahrenheit" :
                switch($ke_suhu){
                    case "keCelcius" :
                        $konversi = 5/9 * ($suhu - 32);
                        echo "<h2> Hasil Konversi: $konversi °C</h2>";
                        break;
                    case "keFahrenheit" :
                        echo "<h2> Hasil Konversi: $suhu °F</h2>";
                        break;
                    case "keRheamur" :
                        $konversi = 4/9 * ($suhu - 32);
                        echo "<h2> Hasil Konversi: $konversi °Re</h2>";
                        break;
                    case "keKelvin" :
                        $konversi = 5/9 * ($suhu - 32) + 273;
                        echo "<h2> Hasil Konversi: $konversi °K</h2>";
                        break;
                    default :
                        echo "";
                }
                break;
            case "dariRheamur" :
                switch($ke_suhu){
                    case "keCelcius" :
                        $konversi = 5/4 * $suhu;
                        echo "<h2> Hasil Konversi: $konversi °C</h2>";
                        break;
                    case "keFahrenheit" :
                        $konversi = (9/4 * $suhu) + 32;
                        echo "<h2> Hasil Konversi: $konversi °F</h2>";
                        break;
                    case "keRheamur" :
                        echo "<h2> Hasil Konversi: $suhu °Re</h2>";
                        break;
                    case "keKelvin" :
                        $konversi = (5/4 * $suhu ) + 273;
                        echo "<h2> Hasil Konversi: $konversi °K</h2>";
                        break;
                    default :
                        echo "";
                }
                break;
            case "dariKelvin" :
                switch($ke_suhu){
                    case "keCelcius" :
                        $konversi = $suhu - 273;
                        echo "<h2> Hasil Konversi: $konversi °C</h2>";
                        break;
                    case "keFahrenheit" :
                        $konversi = 9/5 * ($suhu - 273) + 32;
                        echo "<h2> Hasil Konversi: $konversi °F</h2>";
                        break;
                    case "keRheamur" :
                        $konversi = 4/5 * ($suhu - 273);
                        echo "<h2> Hasil Konversi: $konversi °Re</h2>";
                        break;
                    case "keKelvin" :
                        echo "<h2> Hasil Konversi: $suhu °K</h2>";
                        break;
                    default :
                        echo "";
                }
                break;
        }
    }
?>