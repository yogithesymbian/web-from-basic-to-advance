
<?php
    $gaji = 100000000;
    printf("Gaji semula = %d <br> ", $gaji);
    $gaji = 2 * $gaji;
    printf("Gaji Sekarang = %d <br> ", $gaji);
    $gaji = "Dua Juta";
    echo $gaji;

    printf("<br><br>");
    // $x = 2 + $x++;
    // echo "$x = $x";


    $kota = "samarinda";
    $$kota = 2000000;
    echo $samarinda;

    
    $kata = " Selamat";
    $kata .= " pagi ";

    echo $kata;

    $data = "25 rupiah";
    printf("%d", $data);

    printf("<br><br><br><br>");

    $data1 = "45.5 Derajat Celcius";

    printf("Format d :  %d <br> ", $data1);
    printf("Format b :  %b <br> ", $data1);
    printf("Format o :  %o <br> ", $data1);
    printf("Format x :  %x <br> ", $data1);
    printf("Format X :  %X <br> ", $data1);
    printf("Format c :  %c <br> ", $data1);
    printf("Format s :  %s <br> ", $data1);
    printf("Format f :  %f <br> ", $data1);

    echo "<br> Belajar Php <br> <br>";

    $yogi = "Selamat";
    $a = strlen($yogi);
    echo $a;

    echo "<br><br><br><br>";

    $kalimat ="belajar web";
    printf("Hasil stroupper : %s <br>", strtoupper($kalimat));
    printf("Hasil stroupper : %s <br>", strtolower($kalimat));
    printf("Hasil ucfirst   : %s <br>", ucfirst($kalimat));
    printf("Hasil ucwords   : %s <br>", ucwords($kalimat));
    echo substr($kalimat,-1, 4);

    echo "<br><br>";

    if ($kalimat = "belajar web") 
    {
        # code...
        echo "ekpresi benar";
    }

    echo "<br><br>";

    $angka = 10;
    if ($angka == 7) 
    {
        # code...
        echo "good";
    }
    else 
    {
        # code...
        echo "not good";
    }

    echo "<br><br>";

    $beli = 200000;

    $keterangan = "Tidak dapat diskon";

    if ($beli >= 100000) 
    {
        # code...
        $keterangan = "Dapat Diskon";
        printf($keterangan);
    }
    else 
    {
        # code...
        $keterangan = "Tidak dapat diskon";
        printf($keterangan);
    }
    
    // printf menggunakan type data "%d", 
?>