<?php

function persegi(){
    $sisi = 10;
    $luas = $sisi * $sisi;

    echo "<h3>persegi</h3>";
    echo "Jumlah sisi :".$sisi. "<br>";
    echo "luas :".$luas. "<br>";
}

function persegipanjang(){
    $panjang = 10;
    $lebar = 5;
    $luas = $panjang * $lebar;

    echo "<h3>persegi panjang</h3>";
    echo "panjang :".$panjang. "<br>";
    echo "lebar :".$lebar. "<br>";
    echo "luas :".$luas. "<br>";
}
function segitiga(){
    $alas = 10;
    $tinggi = 5;
    $luas = ($alas * $tinggi) / 2;

    echo "<h3>segitiga</h3>";
    echo "alas :".$alas. "<br>";
    echo "tinggi :".$tinggi. "<br>";
    echo "luas :".$luas. "<br>";
}
function lingkaran(){
    $phi = 3.14;
    $jari1 = 5;
    $jari2 = 5;
    $luas = $phi * $jari1 * $jari2;

    echo "<h3>lingkaran</h3>";
    echo "phi :".$phi. "<br>";
    echo "jari1 :".$jari1. "<br>";
    echo "jari2 :".$jari2. "<br>";
    echo "luas :".$luas. "<br>";
}


persegi();
echo "<hr>";
persegipanjang();
echo "<hr>";
segitiga();
echo "<hr>";
lingkaran();
echo "<hr>";






?>