<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<body style="margin: 4rem;">

<center>
<img src=".png" width="20%">
<h2>PENGGAJIHAN <br></h2>
</center>
<br>

    <div class="card">

        <!-- HEADER CARD -->
        <div class="card-header">
            <h5>GAJI </h5>
        </div>

        <!-- BODY CARD -->
        <div class="card-body">

            <div class="row g-2">
                <div class="col text-center">
                    <h4>
                    <b><i>Gaji</i></b>
                    <h4>
                </div>

                <div class="col text-center">
                    <h4>
                    <b><i>Potongan</i></b>
                    <h4>
                </div>
            </div>

            <form action="" method="post">

            <!-- CARD FORM -->

            <div class="row g-2 mb-3">
                <div class="col ">
                    <label>Nama Karyawan</label>
                    <input type="text" name="nama" placeholder="Nama Karyawan" class="form-control" required>
                </div>

                <div class="col">
                    <label>Pinjaman</label>
                    <input type="number" name="pinjaman" placeholder="Pinjaman" class="form-control" required>
                </div>
            </div>

            <div class="row g-2 mb-3">
                <div class="col ">
                    <label>Jabatan</label>
                    <select name="jabatan" id="" class="form-select" required>
                        <option>Pilih Jabatan</option>
                        <option value="direktur">Direktur</option>
                        <option value="manager">manager</option>
                        <option value="karyawan">karyawan</option>
                        <option value="ob">OB</option>
                    </select>
                </div>

                <div class="col">
                    <label>Tabungan</label>
                    <input type="number" name="tabungan" placeholder="Tabungan" class="form-control" required>
                </div>
            </div>

            <div class="row g-2 mb-3">
                <div class="col ">
                    <label>Status Kerja</label>
                    <select name="status" id="" class="form-select" required>
                        <option>Pilih Status Kerja</option>
                        <option value="tetap">Tetap</option>
                        <option value="kontrak">Kontrak</option>
                    </select>
                </div>

                <div class="col">
                </div>

            </div>

            <div class="row g-2 mb-3">
                <div class="col ">
                    <label>Lama Kerja</label>
                    <input type="number" name="lama" placeholder="Lama Kerja" class="form-control" required>
                </div>

                <div class="col">
                </div>

            </div>

            <div class="row g-2">
                <div class="col text-center">
                   <input type="submit" name="proses" value="Proses" class="btn-primary mt-4" required>
                </div>

            </div>
            </form>
        </div>

    </div>

    
<?php
if(isset($_POST['proses'])){
    $nama = $_POST['nama'];
    $pinjaman = $_POST['pinjaman'];
    $jabatan = $_POST['jabatan'];
    $tabungan = $_POST['tabungan'];
    $status = $_POST['status'];
    $lama = $_POST['lama'];


    // GAJI DARI JABATAN
    if ($jabatan = "direktur") {
        $gaji = 10000000;
    }

    elseif ($jabatan = "manager") {
        $gaji = 7500000;
    }

    elseif ($jabatan = "karyawan") {
        $gaji = 5000000;
    }

    elseif ($jabatan = "ob") {
        $gaji = 2500000;
    }
    else{
        $gaji = "Data Tidak Valid";
    }

    //BONUS STATUS KERJA
    if ($status = "tetap") {
        $bonus = 2500000;
    }
    else{
        $bonus = 0;
    }

    //BONUS Lama Kerja
    if ($lama > 10) {
        $tunjangan = 1000000;
    }

    elseif ($lama > 5) {
        $tunjangan = 500000;
    }

    else{
        $tunjangan = 250000;
    }

    $totalgaji = ($gaji + $bonus + $tunjangan) - ($pinjaman + $tabungan);
    
    function data($nama1, $jabatan1, $gaji1, $status1, $bonus1, $lama1, $tunjangan1, $pinjaman1, $tabungan1, $totalgaji1){
    
    ?>  

    <!-- OUTPUT Struk Gaji -->
    <div class="card mt-5">

        <!-- HEADER -->
        <div class="card-header">
            <div class="text-center">
            <h3>
                <i>Struk Gaji</i>
            </h3>
            </div>
        </div>

        <!-- Card Body -->
        <div class="card-body">
            <table cellpadding="5px" class="table table-hover">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo $nama1?></td>
                </tr>

                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><?php echo $jabatan1 ?></td>
                </tr>

                <tr>
                    <td>gaji Pokok</td>
                    <td>:</td>
                    <td><?php echo "Rp.".$gaji1?></td>
                </tr>

                <tr>
                    <td>Status Kerja</td>
                    <td>:</td>
                    <td><?php echo $status1?></td>
                </tr>

                <tr>
                    <td>Bonus Status Kerja</td>
                    <td>:</td>
                    <td><?php echo $bonus1?></td>
                </tr>

                <tr>
                    <td>Lama Kerja</td>
                    <td>:</td>
                    <td><?php echo $lama1." Tahun"?></td>
                </tr>

                <tr>
                    <td>Tunjangan Lama Kerja</td>
                    <td>:</td>
                    <td><?php echo "Rp. ".$tunjangan1?></td>
                </tr>

                <tr>
                    <td>
                            <h4>Potongan</h4>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                
                <tr>
                    <td>Pinjaman</td>
                    <td>:</td>
                    <td><?php echo "Rp. ".$pinjaman1?></td>
                </tr>

                <tr>
                    <td>Tabungan</td>
                    <td>:</td>
                    <td><?php echo "Rp. ".$tabungan1?></td>
                </tr>

                <tr>
                    <td>
                        <h4>Total Gaji Bersih</h4>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                
                <tr>
                    <td>total Gaji Bersih</td>
                    <td>:</td>
                    <td><?php echo "Rp. ".$totalgaji1?></td>
                </tr>
                
            </table>
        </div>

    </div>
    <?php
    } 
    // Pemanggilan Data
    data($nama, $jabatan, $gaji, $status, $bonus, $lama, $tunjangan, $pinjaman, $tabungan, $totalgaji);
}
?>

    
</body>
</html>
