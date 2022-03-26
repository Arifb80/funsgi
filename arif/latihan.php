<?php
$artikel = [
[
   "id"      => "1001",
   "judul"   => "Invasi Ukraina",
   "isi"     => "Kementrian pertahanan Ukraina mengatakan diperkirakan 14200,setidaknya waraga sipil dilaporkan tewas dalam Invasi ukraina",
   "tanggal" => "1 mei 2022"

],
[
    "id"      => "1002",
    "judul"   => "Bahan Pokok",
    "isi"     => "Hingga saat ini Harga bahan pokok diperkirakan mengalami kenaikan sebesar 3%",
    "tanggal" => "1 januari 2022"
 
],
[
    "id"      => "1003",
    "judul"   => "Sports",
    "isi"     => "Berita olahraga terbaru hari ini, club persib bandung berhasil menjuarai liga lokal",
    "tanggal" => "16 maret 2022"
 
],
[
    "id"      => "1004",
    "judul"   => "Investasi Bodong",
    "isi"     => "Dikabarkan tersangka berinisial di atau doni salmanan menipu dengan iming iming investasi",
    "tanggal" => "1 juni 2022"
 
],
[
    "id"      => "1005",
    "judul"   => "Timnas Indonesia",
    "isi"     => "Timnas indoesia berhasil menyambar gelar juara diajang kompetisi AFF",
    "tanggal" => "1 april 2022"
 
]


];
echo "<u><center>DETIK.com</center></u>";
foreach($artikel as $post){
    
    echo "<b>ID:</b>".$post['id']; 
    echo "<h2>".$post["judul"]."</h2>";
    echo "<p>".$post["isi"]."</p>";
    echo "<i>Tanggal </i>".$post['tanggal'];
    echo "<hr>";       
}



?>