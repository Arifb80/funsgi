<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arif</title>
    </head>
    
<body bgcolor="">
<center>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value=""></td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td></td>
                <td><input type="date" name="tanggal_lahir" value=""></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td></td>
                <td><input type="radio" name="jk" value="laki-laki">laki-laki</td>
                <td><input type="radio" name="jk" value="perempuan">perempuan</td>
            </tr>
            <tr>
            <td>agama</td>
            <td></td>  
            <td>   
            <select name="agama">
		    <option value='islam'>Islam</option>
		    <option value='kristen'>Kristen</option>
		    <option value='katholik'>Katholik</option>
		    <option value='hindu'>Hindu</option>
		    <option value='kristen'>Budha</option>
	        </select>
            </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" value=""></textarea></td>
            </tr>
            <tr>
                <td>hobi</td>
                <td>:</td>
                <td><input type="checkbox" name="hobi" value="makan">makan
                    <input type="checkbox" name="hobi" value="tidur">tidur
                    <input type="checkbox" name="hobi" value="mancing">mancing
               </td>
            </tr>
            <tr>
            <td>status</td>
            <td></td>  
            <td>   
            <select name="status">
		    <option value='janda'>janda</option>
		    <option value='kawin'>Kawin</option>
		    <option value='belumkawin'>belumkawin</option>
	        </select>
            </td>
            </tr>
            <tr>
                <td>Moto Hidup</td>
                <td>:</td>
                <td><input type="text" name="moto" value=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="SIMPAN"></td>
            </tr>

        </table>
    </form>
</center>
</body>
</html>    

<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jeniskelamin = $_POST['jk'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    $status = $_POST['status'];
    $moto = $_POST['moto'];
   function biodata($nama1,$tanggal_lahir1,$jeniskelamin1,$agama1,$alamat1,$hobi1,$status1,$moto1){

       echo "Nama : ".$nama1."<br>";
       echo "Tanggal_lahir : ".$tanggal_lahir1."<br>";
       echo "Jenis kelamin : ".$jeniskelamin1. "<br>";
       echo "Agama : ".$agama1."<br>";
       echo "Alamat: ".$alamat1."<br>";
       echo "hobi  : ".$hobi1."<br>";
       echo "status  : ".$status1."<br>";
       echo "moto hidup : ".$moto1."<br>";
   }



biodata($nama,$tanggal_lahir,$jeniskelamin,$agama,$alamat,$hobi,$status,$moto);
}


