<?php
$artikel = [
[
   "judul" => "Belajar PHP & MySQl untuk pemula",
   "penulis" => "petanikode"

],
[
    "judul" => "Tutorial PHPdari nol hingga mahir",
    "penulis" => "belajarcoding"
 
],
[
    "judul" => "membuat aplikasi web denganphp",
    "penulis" => "malasngoding"
 
]


];

foreach($artikel as $post){
    echo "<h2>".$post["judul"]."</h2>";
    echo "<p>".$post["penulis"]."</p>";
    echo "<hr>";       
}




?>