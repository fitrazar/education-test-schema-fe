<?php
    $input1 = "hallo fitra6751 selamat datang!";
    $input2 = "hallo fajar selamat datang!";
    echo "Input 1 = ".$input1."<br>";
    if (isset($input1)) {
        if (!preg_match("/^[a-zA-Z\W]*$/", $input1)) {
            $string = preg_replace("/[^0-9]/","",$input1);
            echo "Sistem kami menolak untuk inputan berisi angka ".$string;
        }else {
            echo "Sistem memeriksa data anda valid dengan ketentuan kami dengan inputan ".$input1;
        }
    echo "<br><br>";
    echo "Input 2 = ".$input2."<br>";
    }if (isset($input2)) {
        if (!preg_match("/^[a-zA-Z\W]*$/", $input2)) {
            $string = preg_replace("/[^0-9]/","",$input2);
            echo "Sistem kami menolak untuk inputan berisi angka ".$string;
        }else {
            echo "Sistem memeriksa data anda valid dengan ketentuan kami dengan inputan ".$input2;
        }
    }else {
        echo "Data Input Kosong";
    }
?>