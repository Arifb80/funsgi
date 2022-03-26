
<?php

$siswa = [
    [
    "namateman"     => "Sofyan",
    "buahkesukaan"  =>[
               ["buah" => "Mangga"],
               ["buah" => "Stroberi"],
               ["buah" => "Anggur" ,
               [ "jenis" => "Anggur biru"],
               [ "jenis" => "Anggur hitam"],
               [ "jenis" => "Anggur kuning"]
               ]                    
                                  
               ]
    ], 
    [
    "namateman"     => "Maya",
    "buahkesukaan"  =>[
                   ["buah" => "Pepaya"],
                   ["buah" => "Manggis"]
                   ]
    ],
    [
    "namateman"     => "Arif",
    "buahkesukaan"  =>[
                   ["buah" => "Rambutan"],
                   ["buah" => "Durian"],
                   ["buah" => "Leci"]
                   ]
    ], 
    
];
    foreach($siswa as $data){
    echo "Nama Teman : ".$data['namateman']."<br>";
    echo "buah kesukaan : ";

    echo "<ul type='none' style='padding-left: 85px ;margin-top : -15px'>";
    foreach($data['buahkesukaan'] as $data2){  
        echo "<li> - ".$data2['buah']."</li>"; 
    }
    echo "</ul>";
    echo "<hr>";
}

?>