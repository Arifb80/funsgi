<?php

$siswa = [
    [
    "nis"    => 1001,
    "nama"   => "Haddad",
    "kelas"  => "11 RPL 3",
    "eskul"  =>[
               ["nama_eskul" => "Seni tari"],
               ["nama_eskul" => "Karawitan"],
               ["nama_eskul" => "Futsal"]
               ]
    ], 
    
];
    foreach($siswa as $data){
    echo "Nis   : ".$data['nis']."<br>";
    echo "Nama  : ".$data['nama']."<br>";
    echo "Kelas : ".$data['kelas']."<br>";
    echo "eskul : ";
    echo "<ul>";

    foreach($data['eskul'] as $data2){
    echo "<li>".$data2['nama_eskul']."</li>"; 
    }
    echo "</ul>";
}

?>