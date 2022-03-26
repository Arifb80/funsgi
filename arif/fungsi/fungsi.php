<?php
function perkenalan(){
    echo "Assalamualaikum <br>";
    echo "Nama saya arif";


}

function penjumlahan(){
    $angka1 = 10;
    $angka2 = 5;
    $jumlah = $angka1 + $angka2;

    echo "<h3>penjumlahan</h3>";
    echo "Angka pertama :".$angka1. "<br>";
    echo "Angka kedua :".$angka2. "<br>";
    echo "jumlah :".$jumlah. "<br>";
}
function pengurangan(){
    $angka1 = 10;
    $angka2 = 5;
    $jumlah = $angka1 - $angka2;

    echo "<h3>pengurangan</h3>";
    echo "Angka pertama :".$angka1. "<br>";
    echo "Angka kedua :".$angka2. "<br>";
    echo "jumlah :".$jumlah. "<br>";
}
function perkalian(){
    $angka1 = 10;
    $angka2 = 5;
    $jumlah = $angka1 * $angka2;

    echo "<h3>perkalian</h3>";
    echo "Angka pertama :".$angka1. "<br>";
    echo "Angka kedua :".$angka2. "<br>";
    echo "jumlah :".$jumlah. "<br>";
}
function pembagian(){
    $angka1 = 10;
    $angka2 = 5;
    $jumlah = ($angka1/$angka2);

    echo "<h3>pembagian</h3>";
    echo "Angka pertama :".$angka1. "<br>";
    echo "Angka kedua :".$angka2. "<br>";
    echo "jumlah :".$jumlah. "<br>";
}


penjumlahan();
echo "<hr>";
pengurangan();
echo "<hr>";
perkalian();
echo "<hr>";
pembagian();
?>