<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yavas Developer</title>
    <link rel="stylesheet" href="main.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Sora' rel='stylesheet'>
</head>
<body>
    <header>
        <div class="header">
            <a href="https://www.ayberkyavas.com"><img src="img/logo.png" alt="Logo"></a>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="col">
                <div class="banner">
                    <h3 class="banner-text">PHP Örnekleri</h3>
                    <a href="https://www.ayberkyavas.com"><h6 class="banner-text">ayberkyavas.com</h6></a>
                </div>
            <div class="col-6-mg">
                <h3>Vize Notu Hesaplayıcı</h3>
                <form class="vizeForm" method="POST">
                    <!-- PHP KISMI -->
                    <?php
                    error_reporting(0);

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $vize = $_POST["vize"];
                    $final = $_POST["final"];


                    $ortalama = ($vize * 0.3) + ($final * 0.7);
                    }
                    ?>
                    <div>
                    <input type="number" name="vize" class="notInput" id="vize" min="0" max="100" placeholder="Örn: 78" required>
                    <input type="number" name="final" class="notInput" id="final" min="0" max="100" placeholder="Örn: 90" required>
                    <input type="submit" name="hesapla" class="notInput" value="Hesapla">
                    </div>
                    <div>
                        <h3>Ortalamanız :<?php echo $ortalama; ?></h3>
                    </div>
                </form>
            </div>
            <div class="col-6-mg">
                <h3>Boy & Kilo Endeksi Hesaplayıcı</h3>
                <form class="vizeForm" method="POST">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $boy = $_POST["boy"];
                    $kilo = $_POST["kilo"];

                    if ($boy <= 150) {
                        $ideal_kilo = 45 + (($boy - 150) / 2.5) * 2.2;
                    } else {
                        $ideal_kilo = 48 + (($boy - 150) / 2.5) * 2.7;
                    }
                }
                ?>
                    <div>
                    <input type="number" name="boy" class="notInput" id="boy" min="110" max="230" placeholder="Örn: 178" required>
                    <input type="number" name="kilo" class="notInput" id="kilo" min="30" max="500" placeholder="Örn: 80" required>
                    <input type="submit" name="hesapla" class="notInput" value="Hesapla">
                    </div>
                    <div>
                        <h3>Boyunuz:  <?php echo $boy; ?> cm</h3>
                        <h3>İdeal Kilonuz:  <?php echo $ideal_kilo; ?> Kilogram</h3>
                    </div>
                </form>
            </div>
            <div class="col-6-mg">
                <h3>Rastgele Sayı Üretme</h3>
                <form class="vizeForm" method="POST">
                    <div>
                    <input type="submit" name="uret" class="notInput" value="Oluştur">
                    </div>
                    <div>
                    <table border="1">
                    <tr>
                        <th>Sayı</th>
                    </tr>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        $sayi = rand(1, 10);

                        for ($i = 10; $i >= 1; $i--) {
                            echo "<tr><td>" . $sayi . " x " . $i . " = " . ($sayi * $i) . "</td></tr>";
                        }
                    }
                    ?>
                </table>
                    </div>
                </form>
            </div>
            <div class="col-6-mg">
                <h3>Ad Soyad Yazdırma</h3>
                <form class="vizeForm" method="POST">
                    <div>
                    <input type="text" name="ad" class="notInput" id="ad" placeholder="Örn: Ayberk" required>
                    <input type="text" name="soyad" class="notInput" id="soyad" placeholder="Örn: Yavaş" required>
                    <input type="submit" name="hesapla" class="notInput" value="Hesapla">
                    </div>
                    <div>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {

                            $ad = $_POST["ad"];
                            $soyad = $_POST["soyad"];

                            echo "<h3>Adı : " . $ad . "</h3>";
                            echo "<h3>Soyadı : " . $soyad . "</h3>";
                            echo "<h3>Adı Soyadı : " . $ad . " " . $soyad . "</h3>";
                            echo "<h3>Soyadı Adı : " . $soyad . " " . $ad . "</h3>";
                        }
                        ?>
                    </div>
                </form>
            </div>
            <div class="col-6-mg">
                <h3>Toplam Tutar Hesaplama</h3>
                <form class="vizeForm" method="POST">
                <?php
                $toplamTutar = 0; 
                $indirimTutari = 0; 
                $odemesiGerekenTutar = 0; 

                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $adet = $_POST["adet"];
                    $fiyat = $_POST["fiyat"];

                    switch ($adet) {
                        case 1:
                            $toplamTutar = $fiyat;
                            break;
                        case 2:
                            $toplamTutar = $fiyat * 2;
                            break;
                        case 3:
                            $toplamTutar = $fiyat * 3;
                            break;
                        case 4:
                            $toplamTutar = $fiyat * 4;
                            break;
                        case 5:
                            $toplamTutar = $fiyat * 5;
                            break;
                        case 6:
                            $toplamTutar = $fiyat * 6;
                            break;
                        case 7:
                            $toplamTutar = $fiyat * 7;
                            break;
                        case 8:
                            $toplamTutar = $fiyat * 8;
                            break;
                        case 9:
                            $toplamTutar = $fiyat * 9;
                            break;
                        case 10:
                            $toplamTutar = $fiyat * 10;
                            break;
                        default:
                            $hata = "<h3> 1-10 arasında adet seçiniz</h3>";
                            break;
                    }

                    if ($toplamTutar < 100) {
                        $indirimTutari = $toplamTutar * 0.02;
                    } elseif ($toplamTutar >= 100 && $toplamTutar < 200) {
                        $indirimTutari = $toplamTutar * 0.05;
                    } elseif ($toplamTutar >= 200 && $toplamTutar < 500) {
                        $indirimTutari = $toplamTutar * 0.1;
                    } else {
                        $indirimTutari = $toplamTutar * 0.1;
                    }

                    $odemesiGerekenTutar = $toplamTutar - $indirimTutari;
                }
                ?>
                    <div>
                    <input type="number" name="adet" class="notInput" id="adet" placeholder="Örn: 3 Adet" min="1" max="10" required>
                    <input type="number" name="fiyat" class="notInput" id="fiyat" placeholder="Örn: 35 TL" min="1" required>
                    <input type="submit" name="hesapla" class="notInput" value="Hesapla">
                    </div>
                    <?php
                        echo "<div>";
                        echo "$hata";
                        echo "<h3>Toplam Tutar: " . $toplamTutar . " TL</h3>";
                        echo "<h3>İndirim Tutarı: " . $indirimTutari . " TL</h3>";
                        echo "<h3>Ödenmesi Gereken: " . $odemesiGerekenTutar . " TL</h3>";
                        echo "</div>";
                    ?>
                </form>
            </div>
            </div>
        </div>
    </section>
</body>
</html>