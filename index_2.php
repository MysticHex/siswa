<?php
include 'function.php';

if (isset($_POST['btn'])) {
    $nama = (isset($_POST['nama'])) ? $_POST['nama'] : "";
    $jrs = (isset($_POST['jurusan'])) ? $_POST['jurusan'] : "";
    $nis = (isset($_POST['nis'])) ? $_POST['nis'] : "";
    $nisn = (isset($_POST['nisn'])) ? $_POST['nisn'] : "";
    $jk = (isset($_POST['jenis_kelamin'])) ? $_POST['jenis_kelamin'] : "";
    $kelas = (isset($_POST['kelas'])) ? $_POST['kelas'] : "";

    $sql = "INSERT INTO `siswa`(
        `No`,
        `Nama_lengkap`,
        `Kelas`,
        `Jurusan`,
        `NIS`,
        `NISN`,
        `Jenis_kelamin`
    )
    VALUES(
        DEFAULT,
        '$nama',
        '$kelas',
        '$jrs',
        '$nis',
        '$nisn',
        '$jk'
    )";
    $run =mysqli_query($conn,$sql);

    if ($run) {
        header('location:index.php?sm=Input data berhasil');
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
    <title>Insert</title>
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
            <h2 class="text-center">Input</h2>
            <small><a href="index.php">List data</a></small>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <input type="text" name="nama" id="" placeholder="Masukan Nama" autocomplete="off" maxlength="50">
                <div class="mb-2"></div>

                <input type="text" name="jurusan" id="" placeholder="Masukan Jurusan" autocomplete="off" maxlength="3">
                <div class="mb-2"></div>


                <input type="number" name="nis" id="" placeholder="Masukan NIS" autocomplete="off" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="8">
                <div class="mb-2"></div>

                <input type="number" name="nisn" id="" placeholder="Masukan NISN" autocomplete="off" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="10">
                <div class="mb-2"></div>

                <select name="jenis_kelamin" id="">
                    <option disabled selected hidden>Masukan Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                <div class="mb-2"></div>

                <select name="kelas" id="Kelas">
                    <option disabled selected hidden>Pilih kelas</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                <div class="mb-2"></div>

                <input name="btn" type="submit" value="Submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</body>

</html>
