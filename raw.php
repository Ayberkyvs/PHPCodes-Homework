
<?php

    $vize = 60;
    $final = 70;
    $ortalama = ($vize * 0.3) + ($final * 0.7);
    echo "$ortalama";

?>

<?php

    $boy = 181;
    $kilo = 85;

    if ($boy <= 150) {
    $ideal_kilo = 45 + (($boy - 150) / 2.5) * 2.2;
    } else {
    $ideal_kilo = 48 + (($boy - 150) / 2.5) * 2.7;
    }

    echo "Boyunuz : " . $boy . 
    "Ideal Kilonuz : " . $ideal_kilo ;
?>

<?php
    $sayi = rand(1, 10);

    for ($i = 10; $i >= 1; $i--) {
    echo "<tr><td>" . $sayi . " x " . $i . " = " . ($sayi * $i) . "</td></tr>";
    }
    
?>

<?php
    $ad = "Cafer";
    $soyad = "Gemalmaz";

    echo "<h3>Adı : " . $ad . "</h3>";
    echo "<h3>Soyadı : " . $soyad . "</h3>";
    echo "<h3>Adı Soyadı : " . $ad . " " . $soyad . "</h3>";
    echo "<h3>Soyadı Adı : " . $soyad . " " . $ad . "</h3>";

?>

<?php
    $hata = "yok";
    $toplamTutar = 0;
    $indirimTutari = 0;
    $odemesiGerekenTutar = 0;
    $adet = 10;
    $fiyat = 20;
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

        echo "<div>";
        echo "$hata";
        echo "<h3>Toplam Tutar: " . $toplamTutar . " TL</h3>";
        echo "<h3>İndirim Tutarı: " . $indirimTutari . " TL</h3>";
        echo "<h3>Ödenmesi Gereken: " . $odemesiGerekenTutar . " TL</h3>";
        echo "</div>";
?>