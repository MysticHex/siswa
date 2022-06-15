<?php
include 'function.php';

$id=$_GET['id'];

$ssql="SELECT * FROM siswa WHERE No='$id'";
$ruun=mysqli_query($conn,$ssql);

$row=mysqli_fetch_assoc($ruun);
$nm=$row['Nama_lengkap'];
$jrsn=$row['Jurusan'];
$kls=$row['Kelas'];
$NIS=$row['NIS'];
$NISN=$row['NISN'];
$jenkai=$row['Jenis_kelamin'];

if (isset($_POST['btn'])) {
    $nama = (isset($_POST['nama'])) ? $_POST['nama'] : "";
    $jrs = (isset($_POST['jurusan'])) ? $_POST['jurusan'] : "";
    $nis = (isset($_POST['nis'])) ? $_POST['nis'] : "";
    $nisn = (isset($_POST['nisn'])) ? $_POST['nisn'] : "";
    $jk = (isset($_POST['jenis_kelamin'])) ? $_POST['jenis_kelamin'] : "";
    $kelas = (isset($_POST['kelas'])) ? $_POST['kelas'] : "";

    $sql = "UPDATE
    `siswa`
SET
    `Nama_lengkap` = '$nama',
    `Kelas` = '$kelas',
    `Jurusan` = '$jrs',
    `NIS` = '$nis',
    `NISN` = '$nisn',
    `Jenis_kelamin` = '$jk'
WHERE
    `No` = '$id';";
    $run = mysqli_query($conn,$sql);

    if ($run) {
        header('location:index.php?sm=Update data berhasil');
    }else{
        header('location:index.php?em=Error');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input {
            width: 100%;
        }

        select {
            width: 100%;

        }
    </style>
</head>

<body>
    <div class="card text-dark bg-light mb-3 mt-5 mx-auto" style="max-width: 18rem;">
        <div class="card-header">
            <h2 class="text-center">Update</h2>
            <small><a href="index.php">List data</a></small>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <input type="text" name="nama" id="" placeholder="Masukan Nama" autocomplete="off" maxlength="50" value="<?= $nm ?>">
                <div class="mb-2"></div>

                <input type="text" name="jurusan" id="" placeholder="Masukan Jurusan" autocomplete="off" maxlength="3" value="<?=$jrsn?>">
                <div class="mb-2"></div>

                <input type="number" name="nis" id="" placeholder="Masukan NIS" autocomplete="off" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="8" value="<?=$NIS?>">
                <div class="mb-2"></div>

                <input type="number" name="nisn" id="" placeholder="Masukan NISN" autocomplete="off" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="10" value="<?=$NISN?>">
                <div class="mb-2"></div>

                <select name="jenis_kelamin" id="">
                    <option value="L" <?php if($jenkai=='L'){echo "selected";} ?>>Laki-laki</option>
                    <option value="P" <?php if($jenkai=='P'){echo "selected";} ?>>Perempuan</option>
                </select>
                <div class="mb-2"></div>

                <select name="kelas" id="kelas">
                    <option value="10" <?php if($kls==10){echo 'selected';} ?>>10</option>
                    <option value="11" <?php if($kls==11){echo 'selected';} ?>>11</option>
                    <option value="12" <?php if($kls==12){echo 'selected';} ?>>12</option>
                </select>
                <div class="mb-2"></div>

                <input name="btn" type="submit" value="Submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</body>

</html>