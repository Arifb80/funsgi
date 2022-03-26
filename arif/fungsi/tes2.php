<?php

function persegi($sisi){
    $luas = $sisi * $sisi;
    echo "<h3>persegi</h3>";
    echo "Jumlah sisi :".$sisi. "<br>";
    echo "luas :".$luas. "<br>";
}

function persegipanjang($panjang,$lebar){
    $luas = $panjang * $lebar;
    echo "<h3>persegi panjang</h3>";
    echo "panjang :".$panjang. "<br>";
    echo "lebar :".$lebar. "<br>";
    echo "luas :".$luas. "<br>";
}
function segitiga($alas,$tinggi){
    $luas = ($alas * $tinggi) / 2;

    echo "<h3>segitiga</h3>";
    echo "alas :".$alas. "<br>";
    echo "tinggi :".$tinggi. "<br>";
    echo "luas :".$luas. "<br>";
}
function lingkaran($phi,$jari1,$jari2){
    $luas = $phi * $jari1 * $jari2;

    echo "<h3>lingkaran</h3>";
    echo "phi :".$phi. "<br>";
    echo "jari1 :".$jari1. "<br>";
    echo "jari2 :".$jari2. "<br>";
    echo "luas :".$luas. "<br>";
}


persegi(5);
echo "<hr>";
persegipanjang(5,6);
echo "<hr>";
segitiga(7,10);
echo "<hr>";
lingkaran(3.14,10,2);
echo "<hr>";
?>