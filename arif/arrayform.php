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
        <h2>Data Siswa XI-RPL 3</h2>
        <table>
            <tr>
                <td>Jumlah Siswa</td>
                <td>:</td>
                <td><input type="number" name="jumlah"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="proses" value="proses"></td>
            </tr>
        </table>
    </form>

<?php
if (isset($_POST['proses'])) {
    $jumlah = $_POST['jumlah'];
?>

    <form action="hasilarrayform.php" method="post">
        <table>
            <?php
            for ($i=1; $i <= $jumlah; $i++) {
            ?>
            <tr>
                <td></td>
                <td></td>
                <td>Data Siswa ke - <?php echo $i;?></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="number" name="nis[]" placeholder="Masukan NIS Anda ..."></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama[]" placeholder="Masukan Nama Asli Anda ..."></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas[]" placeholder="Masukan Kelas Anda ..."></td>
            </tr>
            <tr>
                <td>jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan[]" placeholder="Masukan jurusan Anda ..."></td>
            </tr>
            <tr>
                <td>jeniskelamin</td>
                <td>:</td>
                <td><input type="radio" name="jeniskelamin[]" placeholder="Masukan jk Anda ..." value="laki-laki" value="perempuan">laki-laki</td>
                <td><input type="radio" name="jeniskelamin[]" placeholder="Masukan jk Anda ..." value="perempuan">perempuan</td>
                
            </tr>
            <tr>
                <td>alamat</td>
                <td>:</td>
                <td><textarea type="textarea" name="alamat[]" placeholder="Masukan alamat Anda ..."></textarea></td>
            </tr>
            <tr>
                <td>agama</td>
                <td>:</td>
                <td><input type="text" name="agama[]" placeholder="Masukan agama Anda ..."></td>
            </tr>
            <?php 
            }
             ?> 

            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="simpan"></td>
            </tr>

          
        </table>
    </form>


<?php } ?>

</center> 
</body>

</html>