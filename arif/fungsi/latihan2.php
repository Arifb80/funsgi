<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arif</title>
    </head>
    
<body bgcolor="">
    <h1>Gaji</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama Karyawan</td>
                <td></td>
                <td><input type="text" name="nama" value=""></td>
            </tr>
            <tr>
            <td>Jabatan</td>
            <td></td>  
            <td>   
             <select name="jabatan">
		       <option value='direktur'>direktur</option>
		       <option value='manager'>manager</option>
		       <option value='karyawan'>karyawan</option>
		       <option value='ob'>ob</option>
	         </select>
            </td>
            </tr>
            <tr>
            <td>Status kerja</td>
            <td></td>  
            <td>   
            <select name="status">
		    <option value='tetap'>tetap</option>
		    <option value='kontrak'>kontrak</option>
	        </select>
            </td>
            </tr>
            <tr>
                <td>Lama kerja</td>
                <td></td>
                <td><input type="number" name="lamakerja" value=""></td>
            </tr>
            <tr>
                <td>Pinjaman</td>
                <td></td>
                <td><input type="number" name="pinjaman" value=""></td>
            </tr>
            <tr>
                <td>Tabungan</td>
                <td></td>
                <td><input type="number" name="tabungan" value=""></td>
            </tr>


            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="SIMPAN"></td>
            </tr>
            
        </table>
    </form>
</body>
</html>  
<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];
    $lamakerja = $_POST['lamakerja'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    if ($jabatan == "direktur") {
        $gaji = 10000000;
    }
    elseif($jabatan == "manajer") {
        $gaji = 7500000;
    }
    elseif($jabatan == "karyawan") {
        $gaji = 5000000;
    }
    elseif($jabatan == "ob") {
        $gaji = 2500000;
    }
    
    if($status == "tetap"){
        $tunjangan = 2500000;
    }
    elseif($status == "kontrak") {
        $tunjangan = 0;
    }

    if ($lamakerja >= 10) {
        $bonus = 1000000;
    }
    elseif($lamakerja >= 6) {
        $bonus = 500000;
    }
    elseif($lamakerja >= 0) {
        $bonus = 250000;
    }
    $totalgaji = ($gaji + $bonus + $tunjangan) - ($pinjaman + $tabungan);


    function kerja($nama1, $jabatan1, $gaji1, $status1, $bonus1, $lama1, $tunjangan1, $pinjaman1, $tabungan1, $totalgaji1){
        
        echo "Nama karyawan : ".$nama1."<br>";
        echo "jabatan : ".$jabatan1."<br>";
        echo "gajipokok : ".$gaji1."<br>";
        echo "status : ".$status1."<br>";
        echo "bonus status kerja : ".$bonus1."<br>";
        echo "lama status kerja : ".$lama1."<br>";
        echo "tunjangan lamakerja :".$tunjangan1."<br>";
        echo "<h4>potongan</h4>";
        echo "pinjaman : ".$pinjaman1."<br>";
        echo "tabungan : ".$tabungan1."<br>";
        echo "total gaji bersih. ".$totalgaji1;
    }
    kerja($nama, $jabatan, $gaji, $status, $bonus, $lamakerja, $tunjangan, $pinjaman, $tabungan, $totalgaji);

    }    