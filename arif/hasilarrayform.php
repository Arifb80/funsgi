<?php

if(isset($_POST['simpan'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
     <h2>Data siswa kelas XI rpl 3</h2>
     <table border="1">
     <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>kelas</th>
        <th>jurusan</th>
        <th>jeniskelamin</th>
        <th>alamat</th>
        <th>agama</th>

    <?php
    for($a=0; $a<count($nama); $a++){
    ?>
    <tr>
        <td><?php echo $nis[$a]; ?> </td>
        <td><?php echo $nama[$a]; ?> </td>
        <td><?php echo $kelas[$a]; ?> </td>
        <td><?php echo $jurusan[$a]; ?> </td>
        <td><?php echo $jeniskelamin[$a]; ?> </td>
        <td><?php echo $alamat[$a]; ?> </td>
        <td><?php echo $agama[$a]; }?> </td>
        

        </td>
    </tr>    
    
    </table>
    </center>
</body>
</html>